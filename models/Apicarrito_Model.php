<?php

require_once 'entidades/itemDto.php';
class Apicarrito_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function save($Articulos, $user)
    {
        $pdo = $this->db->connect();
        $pdo->beginTransaction();
        try {
            $fecha = date('Y-m-d H:i:s', time());
            $query = $pdo->prepare('insert into pedido (usuario_id, fecha) VALUES (:idUsuario, :fecha)');
            $query->bindParam(':idUsuario', $user);
            $query->bindParam(':fecha', $fecha);
            $PedidoID = 0;
            if ($query->execute()) {
                $PedidoID = $pdo->lastInsertId();
            } else {

                $PedidoID = -1;
            }
            $query = $pdo->prepare('insert into item ( articulo_id, cantidad, precio, pedido_id) VALUES (:articulo_id, :cantidad, :precio, :pedido_id)');
            foreach ($Articulos as $key => $articulo) {
                # code...
                $query->bindParam(':articulo_id', $articulo->id);
                $query->bindParam(':cantidad', $articulo->cantidad);
                $query->bindParam(':precio', $articulo->precio);
                $query->bindParam(':pedido_id', $PedidoID);
                $query->execute();
            }
            //:descripcion, :precio, :fecha
            //$query->close();
            $pdo->commit();
            return $PedidoID;
        } catch (PDOException $e) {
            $pdo->rollBack();
            return false;
        } finally {
            $pdo = null;
        }
    }
}

;