<?php
/**
 * Created by PhpStorm.
 * User: gatunis
 * Date: 1/16/15
 * Time: 7:03 PM
 */

class ImageHelper {
    protected $file;
    protected $dbObject;
    protected $type = array();

    public function __construct(){
        if(!$this->dbObject instanceof ImageModel){
            $this->dbObject = new ImageModel();
            $this->type = array("png","jpg","jpeg");
        }
    }

    public function upload($file,$path,$user_info){
        $name = strtolower($file->getClientOriginalName());
        $ext = strtolower($file->getClientOriginalExtension());


        if(in_array($ext,$this->type)) {
            $uploadName = md5(md5(md5(time() . md5($name)).".".$ext)).".".$ext;
            //echo $path;die;
            $upload = $file->move($path, $uploadName);
            if ($upload) {
                $imageDataObject = array(
                    "user_uuid" => $user_info["uuid"],
                    "is_profile" => $user_info["profile"],
                    "path" => $path = $path.$uploadName
            );
                return $this->dbObject->mSave($imageDataObject);
            }
        }else{
            return 0;
        }
    }
}