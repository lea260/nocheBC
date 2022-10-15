<?php

class Articulos_Controller extends Controller
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

    public function nuevo($param = null)
    {

        //lista los articulos
        $this->view->render('articulos/nuevo');

    } //end listar
    public function listar($param = null)
    {

        //obtiene todos los articulos
        $articulos = $this->model->listar();
        //lo asigna a la varible articulos
        $this->view->listar = $articulos;
        //lista los articulos
        $this->view->render('articulos/listar');
        //$arr = [];
    } //end listar

    public function crear()
    {

        $codigo                = $_POST['codigo'];
        $descripcion           = $_POST['descripcion'];
        $precio                = $_POST['precio'];
        $fecha                 = $_POST['fecha'];
        $articulo              = new Articulo();
        $articulo->codigo      = $codigo;
        $articulo->descripcion = $descripcion;
        $articulo->precio      = $precio;
        $articulo->fecha       = $fecha;

        $id                    = $this->model->crear($articulo);
        $this->view->resultado = $id;
        $pathImg               = $_FILES['img']['tmp_name'];
        $tmpName               = $_FILES['img']['name'];
        $array                 = explode(".", $tmpName);
        $ext                   = $array[count($array) - 1];
        $ruta                  = 'public/imagenes/articulos/' . $id . "." . $ext;
        move_uploaded_file($pathImg, $ruta);

        $this->view->render('articulos/crear');

    } //end crear

    public function actualizar()
    {

        $id                    = $_POST['idaux'];
        $codigo                = $_POST['codigo'];
        $descripcion           = $_POST['descripcion'];
        $precio                = $_POST['precio'];
        $fecha                 = $_POST['fecha'];
        $articulo              = new Articulo();
        $articulo->id          = $id;
        $articulo->codigo      = $codigo;
        $articulo->descripcion = $descripcion;
        $articulo->precio      = $precio;
        $articulo->fecha       = $fecha;

        $resultado             = $this->model->actualizar($articulo);
        $this->view->resultado = $articulo->id;

        $this->view->render('articulos/actualizar');

    } //end crear

    public function verArticulo($param = null)
    {
        $idArticulo = $param[0];
        $articulo   = $this->model->verArticulo($idArticulo);

        $_SESSION["id_articulo"] = $idArticulo;

        $this->view->articulo = $articulo;

        $this->view->render('articulos/verArticulo');
    }

    public function eliminar($param = null)
    {
        $id = $_POST['idaux'];

        if ($this->model->eliminar($id)) {
            $mensaje = "Articulo eliminado correctamente";
            //$this->view->mensaje = "Alumno eliminado correctamente";
        } else {
            $mensaje = "No se pudo eliminar al alumno";
            //$this->view->mensaje = "No se pudo eliminar al alumno";
        }
        echo $mensaje;
    }

}