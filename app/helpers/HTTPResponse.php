<?php
class HTTPResponse{

    private static function getResponse($status){
        $definitions = array();
        if(is_numeric($status)) {
            $definitions = array(
                200 => "OK",
                201 => "Created",
                401 => "Unauthorized",
                404 => "Not found",
                500 => "Internal Server Error"
            );
            return $definitions[$status];
        }else{
            return "nan";
        }
    }

    public static function response($error,$status){
        return json_encode(array(
            "status" => $status,
            "message" => self::getResponse($status),
            "error" => $error
        ));
    }
}