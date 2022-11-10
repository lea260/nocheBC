<?php
require_once 'entidades/ItemDto.php';
require_once 'models/Articulos_Model.php';
class Apitest_Controller extends Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    //localahost/prophp3bj/proyectoPHPComun/Api260260articulos
    public function render()
    {

        //var_dump($this);
        //var_dump($this->view);
        //$this->view->render('apilea/articulos/index');
        //var_dump($this);
        //var_dump($this->view);
    }

    public function test()
    {
        $json = file_get_contents('php://input');
//convierto en un array asociativo de php
        $obj        = json_decode($json);
        $lista      = $obj->lista;
        $usuario_id = $obj->usuario_id;
        $lst        = [];
        /*for ($i = 0; $i < count($lista); $i++) {
        $item              = new ItemDto();
        $item->id          = $lista[$i]->id;
        $item->precio      = $lista[$i]->precio;
        $item->descripcion = $lista[$i]->descripcion;
        $item->cantidad    = $lista[$i]->cantidad;
        $item->codigo      = $lista[$i]->codigo;
        $item->url         = $lista[$i]->url;
        $lst[]             = $item;

        # code...
        }*/

        foreach ($lista as $key => $value) {
            $item              = new ItemDto();
            $item->id          = $value->id;
            $item->precio      = $value->precio;
            $item->descripcion = $value->descripcion;
            $item->cantidad    = $value->cantidad;
            $item->codigo      = $value->codigo;
            $item->url         = $value->url;
            $lst[]             = $item;
        }
        $respuesta = [
            "listaArt" => $lst,
            "id" => $usuario_id,
        ];
        $this->view->respuesta = json_encode($respuesta);

        $this->view->render("apitest/test");
    }

    public function search()
    {
        $json = file_get_contents('php://input');
//convierto en un array asociativo de php
        $obj       = json_decode($json);
        $texto     = $obj->texto;
        $modelo    = new Articulos_Model();
        $lst       = [];
        $lst       = $modelo->search($texto);
        $respuesta = [
            "listaArt" => $lst,
        ];
        $this->view->respuesta = json_encode($respuesta);

        $this->view->render("apitest/test");
    }

}