<?php
class CalendarioController extends BaseController{
    protected $data;
    protected $dbObject;
    protected $userObject;

    private function getConnection(){
        if(!$this->dbObject instanceof CalendarioModel){
            $this->dbObject = new CalendarioModel();
            $this->userObject = new UsuariosController();
        }
    }

    public function __construct(){
        $this->getConnection();
    }

    public function post_addEvent(){
        $this->data = Input::all();
        $fecha = preg_split("/\//",$this->data["fecha_evento"]);
        $this->data["fecha_evento"] = $fecha[2]."-".$fecha[0].'-'.$fecha[1];
        if($this->dbObject->mSave($this->data)){
            return Redirect::to("/");
        }else{
            return json_encode(array(
                "status" => 500,
                "error" => 1,
                "message" => "Error on save the event, please debug it"
            ));
        }
    }

    public function get_addEvent($uuid){
        session_start();
        if(isset($_SESSION["email"]) && !empty($_SESSION["email"])){
            return View::make("add-event",array("uuid" => $uuid,));
        }else{
            return Redirect::to("/");
        }
    }

    public function post_editEvent(){
        $this->data = Input::all();
        if($this->dbObject->mEdit($this->data)){
            return json_encode(array(
                "status" => 200,
                "error" => 0,
                "message" => "Evento editado"
            ));
        }else{
            return json_encode(array(
                "status" => 500,
                "error" => 1,
                "message" => "Error on save the event, please debug it"
            ));
        }
    }

    public function get_editEvent($uuid){
        session_start();
        if(isset($_SESSION["email"]) && !empty($_SESSION["email"])){
            return View::make("add-event",array("uuid" => $uuid));
        }else{
            return Redirect::to("/");
        }
    }

    public function get_allEvents(){
        $events = $this->dbObject->mGetAllEvents();
        if(!empty($events)){
            return json_encode(array(
                "status" => 200,
                "error" => 0,
                "message" => "Todos los eventos obtenidos",
                "resourse" => $events
            ));
        }else{
            return json_encode(array(
                "status" => 200,
                "error" => 0,
                "message" => "Empty events"
            ));
        }
    }

    public function get_eventByUuid($calendario_uuid = null){
        if($calendario_uuid == null){
            return json_encode(array(
                "status" => 404,
                "error" => 1,
                "message" => "UUID is empty"
            ));
        }
        $event = $this->dbObject->mGetByUUID($calendario_uuid);
        if(!empty($event)){
            return json_encode(array(
                "status" => 200,
                "error" => 0,
                "message" => "Evento obtenido",
                "resourse" => $event
            ));
        }else{
            return json_encode(array(
                "status" => 200,
                "error" => 1,
                "message" => "Error on get event by uuid"
            ));
        }
    }

    public function get_eventByUserUuid($user_uuid = null){
        if($user_uuid == null){
            return json_encode(array(
                "status" => 404,
                "error" => 1,
                "message" => "User UUID is empty"
            ));
        }
        $events = $this->dbObject->mGetByUserUUID($user_uuid);
        if(!empty($events)){
            return json_encode(array(
                "status" => 200,
                "message" => "Eventos by user uuid obtenidos",
                "error" => 0,
                "resourse" => $events,
            ));
        }else{
            return json_encode(array(
                "status" => 200,
                "message" => "No hay eventos disponibles para este usuario",
                "error" => 1,
            ));
        }
    }

    public function post_deleteEvent(){
        $this->data = Input::all();
        if($this->dbObject->mDelete($this->data["calendario_uuid"])){
            return json_encode(array(
                "status" => 200,
                "message" => "Evento borrado!",
                "error" => 0
            ));
        }else{
            return json_encode(array(
                "status" => 200,
                "message" => "No se borro el evento",
                "error" => 1,
            ));
        }
    }
}