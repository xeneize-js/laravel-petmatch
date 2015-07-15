<?php
/**
 * Created by PhpStorm.
 * User: gatunis
 * Date: 31/01/15
 * Time: 07:14 PM
 */

class BeneficiosModel extends Eloquent{
    protected $table="beneficios";
    protected $primaryKey = "beneficio_uuid";

    public function mSave($beneficio){
        try {
            if (is_array($beneficio)) {
                $beneficio = (Object)$beneficio;
            }
            $this->beneficio_uuid = UUID::getUUID();
            $this->user_uuid = $beneficio->user_uuid;
            $this->mascota_uuid = $beneficio->mascota_uuid;
            $this->nombre_beneficio = $beneficio->nombre_beneficio;
            $this->descripcion = $beneficio->descripcion;
            $this->confirmacion = $beneficio->confirmacion;
            $this->categoria = $beneficio->categoria;
            return $this->save();
        }catch (exception $e){
            echo $e;
        }
    }
}