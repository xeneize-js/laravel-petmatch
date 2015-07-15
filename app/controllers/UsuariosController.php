<?php
use \GuzzleHttp\Client;
class UsuariosController extends BaseController
{
    private $data;
    protected $connection;
    private $file;

    private function createConnection(){
        if (!$this->connection instanceof UsuariosModel) {
            $this->connection = new UsuariosModel();
        }
    }

    public function __construct(){
        $this->createConnection();
        $this->connection = new UsuariosModel();
    }

    public function get_checkSession(){
        session_start();
        print_r($_SESSION);
    }

    public function get_logout(){
        session_start();
        Auth::logout();
        unset($_SESSION["email"]);
        return Redirect::to("/");
    }

    public function get_userProfile($uuid){
        session_start();
        try {
            if (isset($_SESSION["email"]) && !empty($_SESSION["email"])) {
                $user = $this->getUserByEmail($_SESSION["email"]);
                //$mascotaModel = new MascotaModel();
                //$mascotaData = $mascotaModel->mMascotaByUUID($mascotaid);
                $img = new ImageModel();
                $images = $img->mGetByUUId($user[0]["uuid"]);

                $eventObject = new CalendarioModel();
                $events = $eventObject->mGetByUserUUID($user[0]["uuid"]);
                $animalista = new AnimalistaModel();
                $is_animalista = $animalista->mVerifyProfile($uuid);
                $profile = array();
                $msg = new MensajesModel();
                $messages = $msg->mGetAllByUser($uuid);
                $inbox = array();
                if($messages) {
                    $userObject = new UsuariosModel();
                    $mascotaObject = new MascotaModel();

                    foreach ($messages as $key => $message) {

                        $user_uuid = $userObject->getByuuid($message["from"]);
                        if ($user_uuid) {
                            $inbox[] = array(
                                "uuid" => $message["uuid"],
                                "from" => $user_uuid["nombre"],
                                "subject" => $message["subject"],
                                "date" => $message["date"]
                            );
                        } else {
                            $mascota = $mascotaObject->mMascotaByUUID($message["from"]);
                            if ($mascota) {
                                $inbox[] = array(
                                    "uuid" => $message["uuid"],
                                    "from" => $mascota["nombre"],
                                    "subject" => $message["subject"],
                                    "date" => $message["date"]
                                );
                            }
                        }

                    }
                }
                if($is_animalista){
                    $profile = $animalista->mUUID($uuid);
                }
                $estados = new EstadosModel();
                $municipios = $estados->get_temp();
                return View::make("user-profile", array(
                    "user" => $user,
                    "images" => $images,
                    "events" => $events,
                    "is_animalista" => $is_animalista,
                    "profile" => $profile,
                    "messages" => $inbox,
                    "municipios" => $municipios
                ));
            } else {
                Auth::logout();
                unset($_SESSION["email"]);
                return Redirect::to("/");
            }
        }catch (exception $e){
            echo $e;
        }
    }

    public function get_login()
    {
        session_start();
        if (isset($_SESSION["email"]) && !empty($_SESSION["email"])) {
            $user = $this->getUserByEmail($_SESSION["email"]);
            return Redirect::to("/user/user-profile/" . $user[0]["uuid"]);
        } else {
            return View::make("login");
        }
    }

    public function post_login()
    {
        session_start();
        $this->data = Input::all();
        $credentials = array(
            "email" => $this->data["email"],
            "password" => $this->data["password"]
        );
        $user = $this->connection->mUserByEmail($this->data["email"]);
        if(!empty($user)) {
            $activation = $this->connection->verifyActivation($user[0]["uuid"]);
            if(!$activation["activated"]){
                return json_encode(array("error" => 1, "message" => "Necesitas activar tu cuenta para poder ingresar"));
            }
        }


        if (Auth::attempt($credentials)) {
            //Session::put('user', $this->data["email"]);
            $_SESSION["email"] = $this->data["email"];
            $user = $this->getUserByEmail($_SESSION["email"]);
            //return Redirect::to('/pet/lista-mascotas/' . $user[0]["uuid"]);
            return json_encode(array(
                "error" => 0,
                "message" => "success",
                "url" => '/pet/lista-mascotas/' . $user[0]["uuid"]
            ));
        } else {
            return json_encode(array(
                "error" => 1,
                "message" => "Accesos incorrectos",

            ));
                //return Redirect::to("/");
        }
    }

    public function getUserByEmail($email)
    {
        return $this->connection->mUserByEmail($email);
    }

    public function get_profile()
    {
        session_start();
        if (isset($_SESSION["email"]) && !empty($_SESSION["email"])) {
            $user = $this->getUserByEmail($_SESSION["email"]);
            if (empty($user)) {
                Auth::logout();
                unset($_SESSION["email"]);
                return Redirect::to("/");
            }
            $estados = new EstadosModel();
            $municipios = $estados->get_temp();

            return View::make("profile", array('user' => $user,"municipios" => $municipios));
        } else {
            return Redirect::to("/");
        }
    }


    public function get_animalista(){
        session_start();
        if(isset($_SESSION["email"]) && !empty($_SESSION["email"])){
            return View::make("animalista");
        }else{
            return Redirect::to("/");
        }
    }

    public function post_animalista(){
        session_start();
        $this->data = Input::all();
        $user = $this->getUserByEmail($_SESSION["email"]);
        $this->data["user"] = $user[0]["uuid"];
        $this->data["uuid"] = UUID::getUUID();
        $animalista = new AnimalistaModel();
        $raza = '';
        foreach($this->data["clase_mascota_preferida"] as $clase){
            $raza .= " ".$clase." ";
            // .= " ".$clase." ";
        }
        $this->data["clase_mascota_preferida"] = $raza;
        $this->file = Input::file("foto");
        $image = new ImageHelper();
        $userInfo = array(
            "uuid" => $this->data["uuid"],
            "profile" => 1
        );
        $image->upload($this->file,"uploads/animalista/",$userInfo);
        $animalista->mSave($this->data);
        return Redirect::to("/pet/lista-mascotas/".$this->data["user"]);

    }


    public function post_profile(){
        session_start();
        $this->data = Input::all();
        $user = $this->getUserByEmail($_SESSION["email"]);
        $this->data["UUID"] = $user[0]["uuid"];

        if($this->data["estado"] == "Morelia"){
            $this->data["ciudad"] = "Michoacan";
        }
        if(!isset($this->data["animalista"])){
            $this->data["animalista"] = 0;
        }
        if ($this->connection->mPerfilSave($this->data)) {
            $this->file = Input::file("foto");
            $image = new ImageHelper();
            $userInfo = array(
                "uuid" => $this->data["UUID"],
                "profile" => 1
            );
            $image->upload($this->file,"uploads/user/",$userInfo);
            $_SESSION["email"] = $this->data["email"];
            $verifyAnimalista = new AnimalistaModel();
            if($this->data["animalista"] && ($verifyAnimalista->mVerifyProfile($this->data["UUID"]) == 0)){
                return Redirect::to("/user/animalista/");
            }

            return Redirect::to("/pet/lista-mascotas/" . $this->data["UUID"]);
        }
    }


    //registra usuario

    public function get_validate($uuid){
        $activation = $this->connection->activeAccount($uuid);
        if($activation){
            return View::make("activation");
        }else{
            return Redirect::to("/");
        }
    }

    public function post_register(){
        session_start();
        $this->data = Input::all();
        $emailExist = $this->connection->mVerifyEmail($this->data["email"]);
        try {
            if (!$emailExist) {
                $this->data["UUID"] = UUID::getUUID();
                if ($this->connection->mSave($this->data)) {

                    //logea al usuario despues de ser registrado
                    $user = $this->connection->mUserByEmail($this->data["email"]);
                    //print_r($user);die;
                    //print_r($this->data);die;
                    try {
                        $client = new Client();
                        $r = $client->post('http://dev.petmatch.club/email.php', ["body" => $this->data]);
                        $r->getBody();
                    }catch (exception $e){
                        echo $e;
                    }

                    //$email = new Email();
                    //$email->sendEmail($this->data["email"],$this->data["nombre"]);

                    /*$credentials = array(
                        "email" => $this->data["email"],
                        "password" => $this->data["password"]
                    );
                    if (Auth::attempt($credentials)) {
                        $_SESSION["email"] = $this->data["email"];
                    }*/
                    return HTTPResponse::response(0, 201);
                }
            } else {
                return json_encode(
                    array(
                        "error" => 1,
                        "message" => $this->data["email"] . " ya existe",
                        "status" => 200
                    )
                );
            }
        } catch (exception $e) {
            echo HTTPResponse::response(1, 500);
        }
    }

    public function get_animalistaVerify($uuid = null){
        $animalista = new AnimalistaModel();
        if($animalista->mVerifyProfile($uuid)){
            return json_encode(array(
                "error" => 0,
                "message" => "Ya has creado tu perfil animalista"
            ));
        }else{
            return json_encode(array(
                "error" => 1,
                "message" => "Una vez que llenes el formulario, podras crear tu perfil animalista"
            ));
        }
    }

    public function get_uploadPicture($uuid){
        session_start();
        if(isset($_SESSION["email"]) && !empty($_SESSION["email"])){
            return View::make("upload",array("uuid" => $uuid));
        }else{
            return Redirect::to("/");
        }
    }
    public function post_uploadPicture(){
        $uuid = Input::get("uuid");
        $profile = Input::get("profile") ? 1 : 0;
        $this->file = Input::file("foto");
        $image = new ImageHelper();
        $userInfo = array(
            "uuid" => $uuid,
            "profile" => $profile
        );
        $image->upload($this->file,"uploads/user/",$userInfo);
        if($image){
            return Redirect::to("/");
        }
    }

    public function get_visita($animalistaUUID){
        session_start();
        if($animalistaUUID == null){
            return Redirect::to("/");
        }
        $user = $this->getUserByEmail($_SESSION["email"]);
        $img = new ImageModel();
        $images = $img->mGetByUUId($animalistaUUID);
        $animalistaObject = new AnimalistaModel();
        $profile = $animalistaObject->mGetAnimalistaByUUID($animalistaUUID);
        $user_animalista = new UsuariosModel();
        $name_animalista = $user_animalista->getByuuid($profile["user_uuid"]);
        $profile["nombre"] = $name_animalista["nombre"];
        return View::make("user-visita",array(
            "profile" => $profile,
            "images" => $images,
            "user" => $user
        ));
    }

    public function post_recoverPassword(){
        $this->data = Input::all();
        $password = $this->connection->mUserByEmail($this->data["email"]);
        try {
            $client = new Client();
            $r = $client->post('http://dev.petmatch.club/password.php', ["body" =>
                [
                    "password" => $password[0]["text_password"],
                    "to" => $password[0]["email"]
                ]
            ]);
            return json_encode(array("message" => "Tus datos fueron enviados a tu correo","status" => 200));
        }catch (exception $e){
            return json_encode(array("status" => 500));
        }
    }

    public function post_cancelAccount(){
        try {
            session_start();
            $this->data = Input::all();
            $this->connection->cancelAccount($this->data["uuid"]);
            Auth::logout();
            unset($_SESSION["email"]);
            return json_encode(array("status" => 200, "message" => "Borrado"));
        }catch (exception $e){
            return json_encode(array("status" => 500, "message" => $e));
        }
    }

    public function post_newPassword(){
        $this->data = Input::all();
        if(($this->data["nuevo_password"] == "") || ($this->data["c_nuevo_password"] == "")){
            return json_encode(array("status" => 200, "error" => 1, "message" => "No puedes dejar los campos vacios"));
        }
        if($this->data["nuevo_password"] == $this->data["c_nuevo_password"]){
            $password = $this->connection->changuePassword($this->data);
            try {
                $client = new Client();
                $r = $client->post('http://dev.petmatch.club/cpassword.php', ["body" =>
                    [
                        "password" => $this->data["nuevo_password"],
                        "to" => $this->data["email"]
                    ]
                ]);
                return json_encode(array("status" => 200, "error" => 0, "message" => "Contrasena cambiada con exito"));
            }catch (exception $e){
                return json_encode(array("status" => 500));
            }

        }else{
            return json_encode(array("status" => 200,"error" => 1, "message" => "Las contrasenas no coinciden"));
        }
    }

    public function post_verifyUser(){
        $this->data = Input::all();
        $credentials = array(
            "email" => $this->data["email"],
            "password" => $this->data["password"]
        );
        if(Auth::attempt($credentials)){
            return json_encode(array("status" => 200, "message" => "Usuario valido, ahora puedes cambiar tu contrasena","error" => 0));

        }else{
            return json_encode(array("status" => 200, "message" => "Usuario invalido","error" => 1));
        }
    }

    public function post_suscribete(){
        $this->data = Input::all();
        try {
            $client = new Client();
            $r = $client->post('http://dev.petmatch.club/suscribete.php', ["body" => $this->data]);
            return json_encode(array("status" => 200, "message" => "enviado", "error" => 0));
        }catch (exception $e){
            return json_encode(array("status" => 200, "error" => 1, "message" => "Error al enviar"));
        }
    }
}