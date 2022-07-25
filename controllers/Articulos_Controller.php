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
    public function render()
    {
        //$alumnos = $this->model->get();
        $this->view->alumnos = "cargado";
        $this->view->render('login/index');
    }

    public function nuevo()
    {
        //$alumnos = $this->model->get();
        $this->view->alumnos = "cargado";
        $this->view->render('articulos/nuevo');
    }

    public function crear()
    {
        $this->view->lista = $this->model->listar();
        //$this->view->lista = ["articulo01", "articulo02"];
        $this->view->render('articulos/crear');
    }

    public function listar()
    {
        $this->view->lista = $this->model->listar();
        //$this->view->lista = ["articulo01", "articulo02"];
        $this->view->render('articulos/listar');
    }

}