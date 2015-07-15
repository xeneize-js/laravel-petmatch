<?php
class MascotaModel extends Eloquent{

    protected $table = 'mascota';
    protected $primaryKey = "UUID_mascota";

    public function mDelete($uuid){
        try {
            $mascota = $this->find($uuid);
            return $mascota->delete();
        }catch (exception $e){
            return 0;
        }
    }

    public function mSave($mascota){

        try {
            if (is_array($mascota)) {
                $mascota = (Object)$mascota;
            }
            //print_r($mascota);die;
            $this->UUID_mascota = $mascota->uuid;
            $this->nombre = strip_tags($mascota->nombre);
            $this->UUID_clase_mascota = strip_tags($mascota->clase_mascota);
            $this->UUID_raza = strip_tags($mascota->raza);
            $this->description = strip_tags($mascota->description);
            $this->edad = strip_tags($mascota->edad);
            $this->sexo = strip_tags($mascota->sexo);
            $this->datos_adicionales = strip_tags($mascota->datos);
            $this->usuarios_UUID_usuarios = strip_tags($mascota->dueno);
            $this->caracter = $mascota->caracter;
            $this->tiene_vacunas = $mascota->tiene_vacunas;
            $this->vacunas_cuales = $mascota->vacunas_cuales;
            $this->peso = $mascota->peso;
            $this->tamano = $mascota->tamano;
            $this->padre = $mascota->padre;
            $this->certificado = $mascota->certificado;
            if($this->save()){
                return HTTPResponse::response(0,201);
            }
        }catch(exception $e){
            return HTTPResponse::response(1,500);
        }
    }

    public function mMascotaByUUID($uuid){
        try {
            $mascota = $this->find($uuid);
            $response = array(
                "uuid" => $mascota->UUID_mascota,
                "nombre" => $mascota->nombre,
                "clase" => $mascota->UUID_clase_mascota,
                "raza" => $mascota->UUID_raza,
                "description" => $mascota->description,
                "nacimiento" => $mascota->edad,
                "sexo" => $mascota->sexo,
                "datos" => $mascota->datos_adicionales,
                "own" => $mascota->usuarios_UUID_usuarios,
                "certificado" => $mascota->certificado,
                "peso" => $mascota->peso,
                "tamano" => $mascota->tamano,
                "padre" => $mascota->padre,
                "caracter" => $mascota->caracter
            );
            return $response;
        }catch (exception $e){
            return 0;
        }
    }

    public function mEditMascota($mascota){

        try {
            if (is_array($mascota)) {
                $mascota = (Object)$mascota;
            }
            //print_r($mascota);die;
            $mascotaData = $this->find($mascota->uuid);
            $mascotaData->UUID_mascota = $mascota->uuid;
            $mascotaData->nombre = strip_tags($mascota->nombre);
            $mascotaData->UUID_clase_mascota = strip_tags($mascota->clase_mascota);
            $mascotaData->UUID_raza = strip_tags($mascota->raza);
            $mascotaData->description = strip_tags($mascota->description);
            $mascotaData->edad = strip_tags($mascota->edad);
            $mascotaData->sexo = strip_tags($mascota->sexo);
            $mascotaData->datos_adicionales = strip_tags($mascota->datos);
            $mascotaData->caracter = $mascota->caracter;
            $mascotaData->tiene_vacunas = $mascota->tiene_vacunas;
            $mascotaData->vacunas_cuales = $mascota->vacunas_cuales;
            $mascotaData->peso = $mascota->peso;
            $mascotaData->tamano = $mascota->tamano;
            $mascotaData->padre = $mascota->padre;
            $mascotaData->certificado = $mascota->certificado;
            if($mascotaData->save()){
                return HTTPResponse::response(0,201);
            }
        }catch(exception $e){
            return HTTPResponse::response(1,500);
        }
    }

    public function mMascotaLista($uuid){
        $mascotas = $this->where("usuarios_UUID_usuarios", "=",$uuid)->get();
        $data = array();
        foreach($mascotas as $key=> $mascota){
            $data[] = array(
                "uuid" => $mascota->UUID_mascota,
                "nombre" => $mascota->nombre,
                "clase" => $mascota->UUID_clase_mascota,
                "raza" => $mascota->UUID_raza,
                "description" => $mascota->description,
                "nacimiento" => date("d-m-Y", $mascota->fecha_nacimiento),
                "sexo" => $mascota->sexo,
                "datos" => $mascota->datos_aidicionales,
                "own" => $mascota->usuarios_UUID_usuarios
            );
        }
        return $data;
    }
}