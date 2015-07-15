<?php
/**
 * Created by PhpStorm.
 * User: gatunis
 * Date: 31/01/15
 * Time: 07:19 PM
 */

class BeneficiosController extends BaseController{
    protected $data;
    protected $connection;

    public function __construct(){
        if(!$this->connection instanceof BeneficiosModel){
            $this->connection = new BeneficiosModel();
        }
    }

    public function get_mascota($uuid){
        session_start();
        if (isset($_SESSION["email"]) && !empty($_SESSION["email"])) {
            return View::make("beneficios");
        } else {
            return Redirect::to("/");
        }
    }

    public function post_addBeneficio(){
        $this->data = Input::all();
        if($this->connection->mSave($this->data)){
            return json_encode(array(
                "status" => 200,
                "message" => "Beneficio utilizado",
                "error" => 0
            ));
        }else{
            return json_encode(array(
                "status" => 200,
                "message" => "Error al agregar beneficio",
                "error" => 1
            ));
        }
    }
}