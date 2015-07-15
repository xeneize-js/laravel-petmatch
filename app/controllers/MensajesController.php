<?php
/**
 * Created by PhpStorm.
 * User: gatunis
 * Date: 1/19/15
 * Time: 10:55 PM
 */

class MensajesController extends BaseController{
    protected $data;
    protected $dbObject;
    protected $currentUser;

    public function __construct(){
        if(!$this->dbObject instanceof MensajesModel){
            $this->dbObject = new MensajesModel();
        }
        if(!$this->currentUser instanceof UsuariosModel){
            $this->currentUser = new UsuariosModel();
        }
    }

    public function get_new($uuid,$from){
        session_start();
        if(isset($_SESSION["email"]) && !empty($_SESSION["email"])){
            return View::make("mensaje",array("uuid" => $uuid,"from" => $from));
        }else{
            return Redirect::to("/");
        }

    }

    public function post_new(){
        //print_r(Input::all());die;
        $this->data = Input::all();
        $this->data["sent"] = 1;
        if($this->dbObject->mSave($this->data)){
            return Redirect::to("/");
        }else{
            return array();
        }
    }

    public function get_sent($uuid){
        session_start();
        if(isset($_SESSION["email"]) && !empty($_SESSION["email"])){
            $messages = $this->dbObject->mGetAllByUserSent($uuid);
            $sent = array();
            $userObject = new UsuariosModel();
            $mascotaObject = new MascotaModel();
            foreach($messages as $key => $message){
                $user_uuid = $userObject->getByuuid($message["to"]);
                if($user_uuid) {
                    $sent[] = array(
                        "uuid" => $message["uuid"],
                        "to" => $user_uuid["nombre"],
                        "subject" => $message["subject"],
                        "date" => $message["created_at"]
                    );
                }else{
                    $mascota = $mascotaObject->mMascotaByUUID($message["to"]);
                    if($mascota) {
                        $sent[] = array(
                            "uuid" => $message["uuid"],
                            "to" => $mascota["nombre"],
                            "subject" => $message["subject"],
                            "date" => $message["created_at"]
                        );
                    }
                }
            }
            return View::make("sent",array(
                "uuid" => $uuid,
                "messages" => $sent
            ));
        }else{
            return Redirect::to("/");
        }
    }

    public function get_mensajeSent($uuid){
        session_start();
        if(isset($_SESSION["email"]) && !empty($_SESSION["email"])){
            $data = $this->dbObject->getMensajeByUUID($uuid);
            if(!$data){
                return View::make("readMessageSent",array("message" => 0));
            }else{
                return View::make("readMessageSent",array("message" => $data));
            }
        }else{
            return Redirect::to("/");
        }
    }
    public function get_mensajeRecived($uuid){
        session_start();
        if(isset($_SESSION["email"]) && !empty($_SESSION["email"])){
            $data = $this->dbObject->getMensajeByUUID($uuid);
            if(!$data){
                return View::make("readMessage",array("message" => 0));
            }else{
                return View::make("readMessage",array("message" => $data));
            }
        }else{
            return Redirect::to("/");
        }
    }


}