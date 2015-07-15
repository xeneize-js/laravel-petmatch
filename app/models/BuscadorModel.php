<?php
/**
 * Created by PhpStorm.
 * User: gatunis
 * Date: 1/21/15
 * Time: 12:22 AM
 */

class BuscadorModel extends Eloquent{
    protected $user;
    protected $mascota;
    protected $images;
    protected $animalista;

    public function __construct(){
        $this->user = new UsuariosModel();
        $this->mascota = new MascotaModel();
        $this->images = new ImageModel();
        $this->animalista = new AnimalistaModel();
    }

    public function getMascotaByFilters($filters){
        if(is_array($filters)){
            $filters = (Object) $filters;
        }
        session_start();
        try {
            if($filters->clase_mascota == "Mini pig"){
                $filters->raza = "Mini pig";
            }
            $result = array();
            $mascotas = $this->mascota->join("usuarios", "mascota.usuarios_UUID_usuarios", "=", "usuarios.UUID_usuarios")
                ->where("mascota.UUID_clase_mascota", "=", $filters->clase_mascota)
                ->where("mascota.UUID_raza", "=", $filters->raza)
                ->where("mascota.sexo", "=", $filters->sexo)
                ->where("usuarios.ciudad", "=", $filters->ciudad)
                ->where("usuarios.estado", "=", $filters->estado)
                ->select("mascota.nombre", "UUID_mascota", "estado", "ciudad", "description", "edad", "usuarios_UUID_usuarios", "UUID_clase_mascota", "UUID_raza", "sexo", "caracter", "peso", "tamano", "padre","certificado")
                ->get();
            $currentUser = $this->user->mUserByEmail($_SESSION["email"]);
            foreach ($mascotas as $key => $mascota) {
                $result["mascotas"][] = array(
                    "mascota_uuid" => $mascota->UUID_mascota,
                    "estado" => $mascota->estado,
                    "ciudad" => $mascota->ciudad,
                    "name" => $mascota->nombre,
                    "description" => $mascota->description,
                    "edad" => $mascota->edad,
                    "dueno" => $mascota->usuarios_UUID_usuarios,
                    "clase_mascota" => $mascota->UUID_clase_mascota,
                    "raza" => $mascota->UUID_raza,
                    "sexo" => $mascota->sexo,
                    "caracter" => $mascota->caracter,
                    "peso" => $mascota->peso,
                    "tamano" => $mascota->tamano,
                    "padre" => $mascota->padre,
                    "certificado" => $mascota->certificado,
                    "images" => $this->images->mGetByUUId($mascota->UUID_mascota)
                );
            }
            $result["currentUser"] = $currentUser;
            return $result;
        }catch (exception $e){
            return $e;
        }
    }

    public function getAnimalistaByFilters($animalista){
        if(is_array($animalista)){
            $animalista = (Object) $animalista;
        }
        //print_r($animalista);die;
        try{
            $animalistas = $this->animalista->join("usuarios", "animalista.user_uuid", "=", "usuarios.UUID_usuarios")
                ->where("usuarios.ciudad", "=", $animalista->ciudad)
                ->where("usuarios.estado", "=", $animalista->estado)
                ->where("vivienda","like", "%".$animalista->vivienda."%")
                ->where("tamano_vivienda","like","%".$animalista->tamano_vivienda."%")
                ->where("hospedaje_mascotas","like","%".$animalista->hospedaje_mascotas."%")
                ->where("disponible_24_hrs","like","%".$animalista->disponible_24_hrs."%")
                ->where("edad_preferida","like","%".$animalista->edad_preferida."%")
                ->where("caracter_preferido","like","%".$animalista->caracter_preferido)
                ->get();
            $results = array();
            foreach($animalistas as $key => $profile){
                $results[] = array(
                    "animalista_uuid" => $profile->animalista_uuid,
                    "user_uuid" => $profile->user_uuid,
                    "costo_noche" => $profile->costo_noche,
                    "costo_ocho_hrs" => $profile->costo_ocho_hrs,
                    "paseos_30_min" => $profile->paseos_30_min,
                    "session_entrenamiento" => $profile->session_entrenamiento,
                    "titulo_perfil" => $profile->titulo_perfil,
                    "acerca_de_ti" => $profile->acerca_de_ti,
                    "vivienda" => $profile->vivienda,
                    "tamano_vivienda" => $profile->tamano_vivienda,
                    "hospedaje_mascotas" => $profile->hospedaje_mascotas,
                    "disponible_24_hrs" => $profile->disponible_24_hrs,
                    "clase_mascota_preferida" => $profile->clase_mascota_preferida,
                    "tamano_mascota_preferida" => $profile->tamano_mascota_preferida,
                    "edad_preferida" => $profile->edad_preferida,
                    "caracter_preferido" => $profile->caracter_preferido,
                    "tiene_mascota" => $profile->tiene_mascota,
                    "ciudad" => $profile->ciudad,
                    "estado" => $profile->estado
                );
            }

            return $results;
        }catch (exception $e){
            echo $e;
        }
    }
}