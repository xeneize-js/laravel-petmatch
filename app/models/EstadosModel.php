<?php
class EstadosModel extends Eloquent {
    protected $table = 'municipios';
    protected $primaryKey = "id_municipio";

    public function get_temp(){
        $municipios = array();
        $df = $this->where("estado", "=",9)->get();
        $edomex = $this->where("estado", "=",11)->orderBy("nombre_municipio","asc")->get();
        $morelia = $this->where("estado", "=",16)->get();
        foreach($df as $municipio){
            $municipios["df"][] = array(
                $municipio->nombre_municipio
            );
        }
        foreach($edomex as $municipio){
            $municipios["edomex"][] = array(
                $municipio->nombre_municipio
            );
        }
        foreach($morelia as $municipio){
            $municipios["morelia"][] = array(
                $municipio->nombre_municipio
            );
        }
        return $municipios;
    }
}