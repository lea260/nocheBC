 <?php

require_once 'vendor/autoload.php';
//require "vendor/phpmailer/phpmailer/src/Exception.php";
//require "vendor/phpmailer/phpmailer/src/PHPMailer.php";
//require "vendor/phpmailer/phpmailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;

class Mail_Controller extends Controller
{

    public function enviar()
    {
        //$alumnos = $this->model->get();
        //$this->view->alumnos = "cargado";
        $correo  = constant('USER_DEST');
        $mensaje = "mensaje é ñ desde app";

        $oMail = new PHPMailer();
        $oMail->isSMTP();
        $oMail->Host       = "smtp.gmail.com";
        $oMail->Port       = 587;
        $oMail->SMTPSecure = "tls";
        $oMail->SMTPAuth   = true;
        $oMail->Username   = constant('USER_MAIL');
        $oMail->Password   = constant('PWD_MAIL');
        $oMail->setFrom(constant('USER_MAIL'), "programcionphp3bj");
        $oMail->addAddress($correo, "Pedro");
        $oMail->Subject = "Hola pepe el que pica";
        $oMail->msgHTML($mensaje);
        $oMail->CharSet = 'UTF-8';

        if (!$oMail->send()) {
            echo $oMail->ErrorInfo;
        } else {
            echo 'enviado';
            # code...
        }
        //$this->view->render('mail/enviar');

    }
}