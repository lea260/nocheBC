<?php
#require_once 'vendor/autoload.php';
#require_once 'auth/Auth.php';

class Login_Controller extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->mensaje        = "";
        $this->view->resultadoLogin = "";
    }

    //base+login
    public function render()
    {
        //$alumnos = $this->model->get();
        $this->view->alumnos = "cargado";
        $this->view->render('login/index');
    }

    public function ingresar()
    {
        $nombre     = $_POST['nombre'];
        $pass       = $_POST['pass'];
        $exitoLogin = $this->model->ingresar($nombre, $pass);
        if ($exitoLogin) {

            $_SESSION["estalogueado"] = true;
            $_SESSION["nombre"]       = $nombre;
            $_SESSION["rol"]          = "cliente";
            $this->view->render('login/ingresar');
        } else {
            $this->view->resultadoLogin = "usuario o contraseña incorrectos";
            $this->view->render('login/index');
        }

    }
    public function salir()
    {
        //$_SESSION["estalogueado"] = false;
        unset($_SESSION["estalogueado"]);
        unset($_SESSION["estalogueado"]);
        unset($_SESSION["rol"]);
        session_destroy();
        $this->view->render('index/index');
    }

    public function test()
    {
        //$_SESSION["estalogueado"] = false;
        $pwd                = '1234';
        $hash               = password_hash($pwd, PASSWORD_BCRYPT, ['cost' => 10]);
        $this->view->hash   = $hash;
        $result             = password_verify($pwd, $hash);
        $this->view->result = $result;
        $this->view->render('login/test');
    }
}