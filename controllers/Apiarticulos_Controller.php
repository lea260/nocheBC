<?php

class Apiarticulos_Controller extends Controller
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

        $this->view->render('articulos/index');
    }
    public function listar()
    {
        //$alumnos = $this->model->get();

        $json           = file_get_contents('php://input');
        $listaArticulos = json_decode($json);
        $respuesta      = [
            "articulos" => "hola desde la api",
        ];
        $this->view->respuesta = json_encode($respuesta);
        $this->view->render('apiarticulos/listar');
    }

}