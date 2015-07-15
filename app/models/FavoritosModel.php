<?php
/**
 * Created by PhpStorm.
 * User: gatunis
 * Date: 1/25/15
 * Time: 3:52 PM
 */

class FavoritosModel extends Eloquent{
    protected $table = "favoritos";
    protected $primaryKey = "fav_uuid";

    public function mSave($fav){
        if(is_array($fav)){
            $fav = (Object) $fav;
        }
        try{
            $this->fav_uuid = UUID::getUUID();
            $this->mi_favorito_uuid = $fav->profile;
            $this->usuario_actual = $fav->me;
            return $this->save();
        }catch (exception $e){
            echo $e;die;
        }

    }

    public function mAlReady($profile, $me){
        try{
            $this->where("mi_favorito_uuid","=",$profile)
                ->where("usuario_actual" , "=", $me)
                ->firstOrFail();
            return 1;
        }catch (exception $e){
            return 0;
        }
    }

    public function mDelete($fav_uuid){
        try{
            $fav = $this->find($fav_uuid);
            return $fav->delete();

        }catch (exception $e){
            return 0;
        }
    }

    public function mMyFavs($me){
        try {
            $favs = $this->where("usuario_actual", "=", $me)->get();
            $response = array();
            foreach ($favs as $key => $fav) {
                $response[] = array(
                    "me" => $fav->usuario_actual,
                    "mi_favorito" => $fav->mi_favorito_uuid
                );
            }
            return $response;
        }catch (exception $e){
            return 0;
        }
    }
}