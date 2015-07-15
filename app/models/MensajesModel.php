<?php
/**
 * Created by PhpStorm.
 * User: gatunis
 * Date: 1/18/15
 * Time: 10:44 PM
 */

class MensajesModel extends Eloquent{

    protected $table = "mensajes";
    protected $primaryKey = "mensajes_uuid";

    public function mSave($message){
        try {
            if (is_array($message)) {
                $message = (Object)$message;
            }
            $this->mensajes_uuid = UUID::getUUID();
            $this->from_uuid = $message->from;
            $this->to_uuid = $message->to;
            $this->subject = $message->subject;
            $this->body = $message->body;
            $this->is_read = 0;
            $this->sent = $message->sent;
            return $this->save();
        }catch (exception $e){
            echo $e;
        }

    }

    public function mReaded ($message_uuid){
        try{
            $message = $this->find($message_uuid);
            $message->is_read = 1;
            $message->save();
        }catch (exception $e){
            return 0;
        }
    }

    public function mGetAllByUser($uuid){
        try{
            $response = array();
            $messages = $this->where("to_uuid","=",$uuid)->orderBy("created_at","desc")->get();
            foreach ($messages as $key => $message) {
                $message->sent = 0;
                $response[] = array(
                    "uuid" => $message->mensajes_uuid,
                    "from" => $message->from_uuid,
                    "to" => $message->to_uuid,
                    "subject" => $message->subject,
                    "body" => $message->body,
                    "is_read" => $message->is_read,
                    "date" => $message->created_at,
                    "sent" => $message->sent
                );

            }
            return $response;
        }catch (exception $e){
            return $e;
        }
    }

    //mensajes enviados
    public function mGetAllByUserSent($uuid){
        try{
            $response = array();
            $messages = $this->where("from_uuid","=",$uuid)
                ->where("sent","=",1)
                ->orderBy("created_at","desc")
                ->get();
            foreach ($messages as $key => $message) {
                $response[] = array(
                    "uuid" => $message->mensajes_uuid,
                    "from" => $message->from_uuid,
                    "to" => $message->to_uuid,
                    "subject" => $message->subject,
                    "body" => $message->body,
                    "is_read" => $message->is_read,
                    "created_at" => $message->created_at,
                    "sent" => $message->sent
                );

            }
            return $response;
        }catch (exception $e){
            return $e;
        }
    }

    public function getMensajeByUUID($message_uuid){
        try {
            $message = $this->find($message_uuid);
            $data = array();
            $data = array(
                "mensaje_uuid" => $message->mensajes_uuid,
                "from" => $message->from_uuid,
                "to" => $message->to_uuid,
                "subject" => $message->subject,
                "body" => $message->body,
                "created" => $message->created_at
            );
            return $data;
        }catch(exception $e){
                echo $e;
        }
    }
}