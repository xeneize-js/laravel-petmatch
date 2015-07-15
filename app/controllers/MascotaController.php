<?php
class MascotaController extends BaseController {
    protected $data;
    protected $connection;
    protected $animalista;

    public function __construct(){
        if (!$this->connection instanceof MascotaModel) {
            $this->connection = new MascotaModel();
        }
        $this->animalista = new AnimalistaModel();
    }

    public function post_createPet(){
        $this->data = Input::all();
        if($this->data["clase_mascota"] == "Mini pig"){
            $this->data["raza"] = "Mini pig";
        }
        $certificados = "";
        $vacunas = "";
        if(is_array($this->data["certificado"])) {
            foreach ($this->data["certificado"] as $key => $certificado) {
                $certificados .= $certificado . ", ";
            }
            $this->data["certificado"] = $certificados;
        }else{
            $this->data["certificado"] = "No tiene";
        };
        if(is_array($this->data["vacunas_cuales"])) {
            foreach ($this->data["vacunas_cuales"] as $key => $vacuna) {
                $vacunas .= $vacuna . ", ";
            }
            $this->data["vacunas_cuales"] = $vacunas;
        }else{
            $this->data["vacunas_cuales"] = "No tiene";
        }
        //print_r($this->data);die;
        //$this->data["raza"] = empty($this->data["perro"]) ? $this->data["gato"] : $this->data["perro"];
        //list($mes, $dia, $anio) = preg_split('/\//', $this->data["fecha_nacimiento"]);
        //$this->data["fecha_nacimiento"] = strtotime($dia."-".$mes."-".$anio);

        $this->data["uuid"] = UUID::getUUID();
        if($this->connection->mSave($this->data)){

            return json_encode(
                array(
                    "message" => "Mascota creada",
                    "type" => 201,
                    "error" => 0,
                    "uuid" => $this->data["uuid"]
                )
            );
        }else{
            return json_encode(
                array(
                    "message" => "Error al crear mascota",
                    "type" => 500,
                    "error" => 1
                )
            );
        }

    }

    public function get_listaMascotas($UUID){
        session_start();
        if (isset($_SESSION["email"]) && !empty($_SESSION["email"])) {
            $mascotas = $this->connection->mMascotaLista($UUID);
            $userObject = new UsuariosModel();
            $user = $userObject->getByuuid($UUID);
            $is_animalista = $this->animalista->mVerifyProfile($UUID);
            return View::make("lista-mascotas", array(
                "mascotas" => $mascotas,
                "user" => $user,
                "is_animalista" => $is_animalista
            ));
        }else{
            return Redirect::to("/");
        }
    }

    public function post_editPet(){
        $this->data = Input::all();
       // $this->data["raza"] = empty($this->data["perro"]) ? $this->data["gato"] : $this->data["perro"];
        //ist($mes, $dia, $anio) = preg_split('/\//', $this->data["fecha_nacimiento"]);
        //$this->data["fecha_nacimiento"] = strtotime($dia."-".$mes."-".$anio);
        if($this->connection->mEditMascota($this->data)){

            return json_encode(
                array(
                    "message" => "Mascota editada",
                    "type" => 201,
                    "error" => 0,
                    "uuid" => $this->data["uuid"]
                )
            );
        }else{
            return json_encode(
                array(
                    "message" => "Error al editar mascota",
                    "type" => 500,
                    "error" => 1
                )
            );
        }
    }

    public function get_mascotaProfile($uuid,$mascotaid){
        session_start();

        try {
            if (isset($_SESSION["email"]) && !empty($_SESSION["email"])) {
                $user = new UsuariosController();
                $userData = $user->getUserByEmail($_SESSION["email"]);
                $mascotaModel = new MascotaModel();
                $mascotaData = $mascotaModel->mMascotaByUUID($mascotaid);
                $img = new ImageModel();
                $images = $img->mGetByUUId($mascotaData["uuid"]);
                $eventObject = new CalendarioModel();
                $events = $eventObject->mGetByUserUUID($mascotaData["uuid"]);
                $msg = new MensajesModel();
                $messages = $msg->mGetAllByUser($mascotaid);
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

                $estados = new EstadosModel();
                $municipios = $estados->get_temp();
                return View::make("mascota-profile", array(
                    "user" => $userData,
                    "mascota" => $mascotaData,
                    "images" => $images,
                    "events" => $events,
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
    public function get_uploadPicture($uuid,$own){
        session_start();
        if(isset($_SESSION["email"]) && !empty($_SESSION["email"])){
            return View::make("mascota-upload",array("uuid" => $uuid,"own" => $own));
        }else{
            return Redirect::to("/");
        }
    }
    public function post_uploadPicture(){
        $uuid = Input::get("uuid");
        $own = Input::get("own");
        $is_profile = Input::get("is_profile") ? Input::get("is_profile") : 0;

        $this->file = Input::file("foto");
        $image = new ImageHelper();
        $userInfo = array(
            "uuid" => $uuid,
            "profile" => $is_profile
        );
        $image->upload($this->file,"uploads/pet/",$userInfo);
        if($image){
            return Redirect::to("/pet/mascota-profile/".$own."/".$uuid);
        }
    }

    public function get_visita($mascotaid){
        if($mascotaid == null){
            return Redirect::to("/");
        }
        session_start();
        $user = new UsuariosController();
        $userData = $user->getUserByEmail($_SESSION["email"]);
        $mascotaModel = new MascotaModel();
        $mascotaData = $mascotaModel->mMascotaByUUID($mascotaid);
        $img = new ImageModel();
        $images = $img->mGetByUUId($mascotaData["uuid"]);
        return View::make("mascota-visita",array(
            "mascota" => $mascotaData,
            "images" => $images,
            "user" => $userData
        ));
    }

    public function post_delete(){
        $this->data = Input::all();
        if($this->connection->mDelete($this->data["uuid"])){
            return json_encode(array("status" => 200, "message" => "Borrado!", "error" => 0) );
        }else{
            return json_encode(array("status" => 500, "message" => "Error", "error" => 1));
        }
    }
}