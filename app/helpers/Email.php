<?php
/**
 * Created by PhpStorm.
 * User: gatunis
 * Date: 24/01/15
 * Time: 03:48 PM
 */

class Email {
    protected $to;
    protected $user_uuid;
    protected $activated;

    public function sendEmail($to,$usuario){
        $to      = 'luis@catcoder.co.uk';
        $subject = 'the subject';
        $message = 'Hola $usuario <br/>,
                    Nos emociona que te hayas unido a Petmatch. <br />
                    Tu cuenta se ha creado correctamente, lo único que necesitas hacer ahora es activarla dando clic en la siguiente dirección o copiándola y pegándola en tu navegador.
http://www.petsnlove.com/email-confirmation.php?pin=sN1ZoVZ0NQJjCc7O1CHm&username=adssj%C3%B1 <br/>
No esperes más para comenzar a disfrutar de todos los beneficios <br/>.
El equipo de Petmatch';
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

// Additional headers
        $headers .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
        $headers .= 'From: Registro Petmatch <hola@petmatch.club>' . "\r\n";


        if(mail($to, $subject, $message, $headers)){
            echo "";
        }else{
            echo "fail";
        }
    }
}