<?php

class Articulos_Controller extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->mensaje        = "";
        $this->view->resultadoLogin = "";
    }

    //base+
    public function listar()
    {
        $alumnos = $this->model->listar();
        $this->view->alumnos = "cargado";
        $this->view->render('login/index');
    }
    public function listar()
    {
        $this->view->lista = $this->model->listar();
        $this->view->lista = ["articulo01", "articulo02"];
        $this->view->render('articulos/listar');
    }

}