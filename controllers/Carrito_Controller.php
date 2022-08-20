<?php

require_once 'models/Articulos_Model.php';
class Carrito_Controller extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->mensaje        = "";
        $this->view->resultadoLogin = "";
    }

    //base+articulos
    public function render()
    {
        //$alumnos = $this->model->get();
        $this->view->mensaje = "cargado";
        $this->view->render('articulos/index');
    }

    public function ver($param = null)
    {

        //lista los articulos
        $modelo             = new Articulos_Model();
        $lista              = $modelo->listar();
        $this->view->listar = $listar;
        $this->view->render('carrito/ver');

    } //end listar
}