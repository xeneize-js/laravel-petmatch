<?php
class ImageModel extends Eloquent{
    protected $table = "images";
    protected $primaryKey = "image_uuid";

    public function mSave($image){
        try {
            if (is_array($image)) {
                $image = (Object)$image;
            }
            $this->image_uuid = UUID::getUUID();
            $this->user_uuid = $image->user_uuid;
            $this->is_profile = $image->is_profile;
            $this->path = $image->path;

            return $this->save();
        }catch (exception $e){
            return 0;
        }
    }

    public function mDelete($image_uuid){
        try{
            $image = $this->find($image_uuid);
            if(!empty($image)){
                $image->delete();
            }
        }catch (exception $e){
            return 0;
        }
    }

    public function mGetByUUId($uuid){
        try {

            $images = $this->where("user_uuid", "=", $uuid)->orderBy('created_at',"desc")->get();
            $response = array();

            foreach($images as $key => $image){

                $response[] = array(
                    "image" => $image->path,
                    "profile" => $image->is_profile
                );
            }
            return $response;
        } catch(exception $e){
            return 0;
        }
    }
}