<?php
require_once 'models/Articulos_Model.php';
class Carrito_Controller extends Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    //localahost/prophp3bj/proyectoPHPComun/Api260260articulos
    public function render()
    {

    }

    public function ver()
    {
        /*$modelo             = new Articulos_Model();
        $lst                = $modelo->listar();
        $this->view->listar = $lst;*/
        $this->view->render("carrito/ver");
    }

}
