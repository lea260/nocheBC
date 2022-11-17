<?php

class Login_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function ingresar($user)
    {
        $cdb = $this->db->connect();
        try {
            $consulta = $cdb->prepare('select id from usuario where email=:email && password=:pass');
            $consulta->bindParam(':email', $user->email);
            $consulta->bindParam(':pass', $user->password);
            $consulta->execute();
            $id = -1;
            while ($row = $consulta->fetch()) {
                $id = $row['id'];
            }
            return $id;
        } catch (PDOException $e) {
            return -1;
        } finally {
            $cdb = null;
        }
    }
};