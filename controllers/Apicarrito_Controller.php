 <?php

require_once 'entidades/itemDto.php';
class Apicarrito_Controller extends Controller
{
    public function save()
    {
        try {

            $jsonStr        = file_get_contents('php://input');
            $datos          = json_decode($jsonStr);
            $listaArticulos = $datos->lista;
            $usuario        = $datos->usuario_id;
            $lista          = [];
            foreach ($listaArticulos as $key => $obj) {
                $articulo           = new ItemDto();
                $articulo->id       = $obj->id;
                $articulo->cantidad = $obj->cantidad;
                $articulo->precio   = $obj->precio;
                $lista[]            = $articulo;
            }
            $resultado = $this->model->save($lista, $usuario);

            $respuesta = [
                "Mensage" => "Carrito Actulizado",
                "datos" => $lista,
                "totalResultados" => count($lista),
                "usuario" => $usuario,
                "PedidoID" => $resultado,
            ];
            $this->view->respuesta = json_encode($respuesta);
            if ($resultado == false) {
                http_response_code(400);
                $this->view->respuesta = json_encode([
                    "resultado" => $resultado,
                    "respuesta" => "error al completar el pedido",
                ]);
            } else {
                http_response_code(200);
            }
            $this->view->render('apicarrito/save');
            //code...

        } catch (Exception $e) {
            echo "<h1>" . $e->getMessage() . "</h1>";
            echo $headers;
            http_response_code(401);
        }
    }
}