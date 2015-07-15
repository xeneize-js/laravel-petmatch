<?php
/**
 * Created by PhpStorm.
 * User: gatunis
 * Date: 1/21/15
 * Time: 12:15 AM
 */

class BuscadorController extends BaseController{
    protected $data;
    protected $dbObject;
    protected $user;

    public function __construct(){
        $this->dbObject = new BuscadorModel();
        $this->user = new UsuariosModel();
    }

    public function post_data(){
        session_start();
        $this->data = Input::all();
        if(isset($this->data["animalista"])){
            $result = $this->dbObject->getAnimalistaByFilters($this->data);
            print_r($result);die;
            $currentUser = $this->user->mUserByEmail($_SESSION["email"]);
            return View::make("resultados",array("animalistas" => $result,"current" => $currentUser));
        }
        if(isset($this->data["raza_perro"])){
            $result["mascotas"] = array();
            return View::make("resultados",array("mascotas"=>$result));
        }
        $result = $this->dbObject->getMascotaByFilters($this->data);
        return View::make("resultados",array("mascotas"=>$result));
    }

    public function get_data(){
        session_start();
        if (isset($_SESSION["email"]) && !empty($_SESSION["email"])) {
            return Redirect::to("/");
        } else {
            return View::make("login");
        }
    }

}