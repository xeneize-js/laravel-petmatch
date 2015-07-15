<?php
/**
 * Created by PhpStorm.
 * User: gatunis
 * Date: 1/25/15
 * Time: 4:30 PM
 */

class FavoritosController extends BaseController{
    protected $data;
    protected $connection;

    public function __construct(){
        if(!$this->connection instanceof FavoritosModel){
            $this->connection = new FavoritosModel();
        }
    }

    public function post_newFavorito(){
        $this->data = Input::all();
        $alReady = $this->connection->mAlReady($this->data["profile"],$this->data["me"]);
        //echo $alReady;die;
        if(!$alReady) {
            if ($this->connection->mSave($this->data)) {
                return json_encode(array(
                    "status" => 201,
                    "message" => "Agregado a la lista de favoritos",
                ));
            } else {
                return json_encode(array(
                    "status" => 500,
                    "message" => "Error al agregar este favorito"
                ));
            }
        }else{
            return json_encode(array(
                "status" => 200,
                "message" => "Ya tienes agregado a este usuario"
            ));
        }
    }

    public function getMyFavs($current_uuid){
        $favs = $this->connection->mMyFavs($current_uuid);
        if(is_array($favs)){
            //print_r($favs);die;
            $favorito = array();
            $userObject = new UsuariosModel();
            $mascotaObject = new MascotaModel();
            foreach ($favs as $key => $fav) {
                $user_uuid = $userObject->getByuuid($fav["mi_favorito"]);
                if ($user_uuid) {
                    $favorito[] = array(
                        "uuid" => $fav["mi_favorito"],
                        "nombre" => $user_uuid["nombre"],
                    );
                } else {
                    $mascota = $mascotaObject->mMascotaByUUID($fav["mi_favorito"]);
                    if ($mascota) {
                        $favorito[] = array(
                            "name" => $message["nombre"],
                            "uuid" => $fav["mi_favorito"],
                        );
                    }
                }

            }
            return json_encode(array("status" => 200,"favoritos" => $favorito));
        }else{
            return json_encode(array(
                "status" => 200,
                "message" => "No tienes favoritos aun"
            ));
        }
    }
}