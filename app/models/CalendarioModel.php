<?php
class CalendarioModel extends Eloquent{
    protected $table = "calendario";
    protected $primaryKey = "calendario_uuid";


    public function mSave($calendar){
        try {
            if (is_array($calendar)) {
                $calendar = (Object)$calendar;
            }
            $this->calendario_uuid = UUID::getUUID();
            $this->nombre_evento = $calendar->nombre_evento;
            $this->descripcion_evento = $calendar->descripcion_evento;
            $this->fecha_evento = $calendar->fecha_evento;
            $this->usuario_uuid = $calendar->user;

            if ($this->save()) {
                return 1;
            } else {
                return 0;
            }
        }catch (exception $e){
            echo $e;
            return 0;
        }
    }

    public function mEdit($calendar){
        try {
            if (is_array($calendar)) {
                $calendar = (Object)$calendar;
            }
            $calendarData = $this->find($calendar->calendario_uuid);
            try {
                $calendarData->nombre_evento = $calendar->nombre_evento;
                $calendarData->descripcion_evento = $calendar->descripcion_evento;
                $calendarData->fecha_evento = $calendar->fecha_evento;
                $calendarData->usuario_uuid = $calendar->user;
                return $calendarData->save();
            } catch (exception $e) {
                return 0;
            }
        }catch (exception $e){
            return 0;
        }
    }

    public function mGetAllEvents(){
        try {
            $events = $this->all();
            $response = array();
            if(!empty($events)) {
                foreach ($events as $key => $event) {
                    $response[] = array(
                        "nombre_evento" => $event->nombre_evento,
                        "descripcion_evento" => $event->descripcion_evento,
                        "fecha_evento" => $event->fecha_evento,
                        "usuario_uuid" => $event->usuario_uuid,
                        "calendario_uuid" => $event->calendario_uuid
                    );
                }
                return $response;
            }else{
                return 0;
            }
        }catch (exception $e){
            return 0;
        }
    }

    public function mGetByUUID($calendario_uuid){
        try{
            $event = $this->find($calendario_uuid);
            if(!empty($event)) {
                $response = array(
                    "nombre_evento" => $event->nombre_evento,
                    "descripcion_evento" => $event->descripcion_evento,
                    "fecha_evento" => $event->fecha_evento,
                    "usuario_uuid" => $event->usuario_uuid,
                    "calendario_uuid" => $event->calendario_uuid
                );
                return $response;
            }else{
                return 0;
            }
        }catch (exeception $e){
            return 0;
        }
    }

    public function mGetByUserUUID($user_uuid){
        try{
            $events = $this->where("usuario_uuid","=",$user_uuid)->orderBy("fecha_evento","desc")->get();
            $response = array();
            foreach($events as $key => $event){
                $response[] = array(
                    "nombre_evento" => $event->nombre_evento,
                    "descripcion_evento" => $event->descripcion_evento,
                    "fecha_evento" => $event->fecha_evento,
                    "usuario_uuid" => $event->usuario_uuid,
                    "calendario_uuid" => $event->calendario_uuid
                );
            }
            return $response;
        }catch (exception $e){
            return 0;
        }
    }

    public function mDelete($calendario_uuid){
        try{
            $event = $this->find($calendario_uuid);
            if(!empty($event)){
                return $event->delete();
            }else{
                return 0;
            }
        }catch (exception $e){
            return 0;
        }
    }

}