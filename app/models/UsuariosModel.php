<?php


class UsuariosModel extends Eloquent  {

    protected $table = 'usuarios';
    protected $primaryKey = "UUID_usuarios";



    public function mVerifyEmail($email){
        try {
            $this->where("email", "=", $email)->firstOrFail();
            return 1;
        }catch (exception $e){
            return 0;
        }
    }

    public function getByuuid($uuid){
        try {
            $user = $this->find($uuid);
            $data = array(
                "email" => $user->email,
                "nombre" => $user->nombre,
                "uuid" => $user->UUID_usuarios,
                "status" => $user->status,
                "activated_uuid" => $user->activated_uuid
            );
            return $data;
        }catch (exception $e){
            return 0;
        }
    }


    public function mSave($user){
        try {
            if(is_array($user)){
                $user = (Object) $user;
            }
            $this->UUID_usuarios = $user->UUID;
            $this->nombre = $user->nombre;
            $this->password = Hash::make($user->password);
            $this->text_password = $user->password;
            $this->email = $user->email;
            $this->status = 0;
            $this->payment = 0;
            $this->activated_uuid = UUID::getUUID();

            if($this->save()){
                return 1;
            }else{
                return 0;
            }
        }catch (exception $e){
            return $this->JSONResponse(1,$e);
        }
    }

    public function mUserByEmail($email){
        try {
            $user = $this->where("email", "=", $email)->get();
            $data = array();

            foreach ($user as $profile) {
                $data[] = array(
                    "email" => $profile->email,
                    "nombre" => $profile->nombre,
                    "uuid" => $profile->UUID_usuarios,
                    "apellido" => $profile->apellido,
                    "celular" => $profile->celular,
                    "estado" => $profile->estado,
                    "ciudad" => $profile->ciudad,
                    "colonia" => $profile->colonia,
                    "status" => $profile->status,
                    //"activated_uuid" => $profile->activated_uuid,
                    "text_password" => $profile->text_password
                );
            }
            return $data;
        }catch (exception $e){
            return 0;
        }
    }

    public function mPerfilSave($user)
    {
        try {
            if (is_array($user)) {
                $user = (Object)$user;
            }
            $userAccount = $this->find($user->UUID);
            $userAccount->UUID_usuarios = $user->UUID;
            $userAccount->nombre = $user->nombre;
            $userAccount->apellido = $user->apellido;
            $userAccount->email = $user->email;
            $userAccount->celular = $user->celular;
            $userAccount->estado = $user->estado;
            $userAccount->ciudad = $user->ciudad;
            $userAccount->colonia = $user->colonia;
            $userAccount->animalista = $user->animalista;

            if ($userAccount->save()) {
                return 1;
            } else {
                return 0;
            }
        } catch (exception $e) {
            echo $e;

        }
    }

    public function activeAccount($user_uuid){
        try{
            $account = $this->find($user_uuid);
            $account->status = 1;
            return $account->save();
        }catch (exception $e){
            return 0;
        }
    }

    public function verifyActivation($user_uuid){
        try{
            $activated = $this->find($user_uuid);
            $response = array();
            return $response = array("activated" => $activated->status);
        }catch (exception $e){
            return $e;
        }
    }

    public function cancelAccount($uuid){
        try{
            $cancel = $this->find($uuid);
            $mascota = new MascotaModel();
            $mascotas = $mascota->mMascotaLista($uuid);
            if(!empty($mascotas)){
                foreach($mascotas as $key => $masc){
                    $mascota->mDelete($masc["uuid"]);
                }
            }
            $cancel->delete();
        }catch (exception $e){
            echo $e;
        }
    }

    public function changuePassword($data){
        try{
            $user = $this->find($data["uuid"]);
            $user->password = Hash::make($data["nuevo_password"]);
            $user->text_password = $data["nuevo_password"];
            return $user->save();
        }catch (exception $e){
            echo $e;
        }
    }
}
