<?php

class Articulos_Controller extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";
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

    public function verArticulo($param)
    {
        $id = $param[0];
        //$this->view->lista = $this->model->listar();
        //$this->view->lista = ["articulo01", "articulo02"];
        echo $id;
        //$this->view->render('articulos/listar');
    }

}