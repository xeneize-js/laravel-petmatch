<?php
class AnimalistaModel extends Eloquent{
    protected $table="animalista";
    protected $primaryKey = "animalista_uuid";

    public function mSave($animalista){
        try {
            ;
            if (is_array($animalista)) {
                $animalista = (Object)$animalista;
            }

            $this->animalista_uuid = $animalista->uuid;
            $this->user_uuid = $animalista->user;
            $this->costo_noche = $animalista->costo_noche;
            $this->costo_ocho_hrs = $animalista->costo_ocho_hrs;
            $this->paseos_30_min = $animalista->paseos_30_min;
            $this->session_entrenamiento = $animalista->session_entrenamiento;
            $this->titulo_perfil = $animalista->titulo_perfil;
            $this->acerca_de_ti = $animalista->acerca_de_ti;
            $this->vivienda = $animalista->vivienda;
            $this->tamano_vivienda = $animalista->tamano_vivienda;
            $this->hospedaje_mascotas = $animalista->hospedaje_mascotas;
            $this->disponible_24_hrs = $animalista->disponible_24_hrs;
            $this->clase_mascota_preferida = $animalista->clase_mascota_preferida;
            $this->tamano_mascota_preferida = $animalista->tamano_mascota_preferida;
            $this->edad_preferida = $animalista->edad_preferida;
            $this->caracter_preferido = $animalista->caracter_preferido;
            $this->tiene_mascota = $animalista->tiene_mascota;
            $this->foto_perfil = $animalista->foto;
            return $this->save();
        }catch (exception $e){
            echo $e;
        }
    }
    public function mVerifyProfile($uuid){
        try {
            $this->where("user_uuid", "=", $uuid)->firstOrFail();
            return 1;
        }catch (exception $e){
            return 0;
        }
    }
    public function mUUID($user_uuid){
        try{
            $profile = $this->where("user_uuid", "=", $user_uuid)->firstOrFail();
            return array(
                "animalista_uuid" => $profile->animalista_uuid
            );
        }catch (exception $e){
            return array();
        }
    }
    public function mGetAnimalistaByUUID($uuid){
        try{
            $profile = $this->find($uuid);
            return array(
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
            );
        }catch (exception $e){
            return array();
        }
    }
}