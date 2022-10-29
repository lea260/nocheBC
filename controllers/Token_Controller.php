<?php
require_once 'jwt/jwts.php';

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class Token_Controller extends Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    //localahost/prophp3bj/proyectoPHPComun/Api260260articulos
    public function render()
    {

    }

    public function generar()
    {
        try {
            //code..
            $data = ["usuario_id" => 5,
                "rol" => "cliente"];
            $jwt               = Jwts::GenerarTk($data);
            $_SESSION['token'] = $jwt;
            echo $jwt;
            $decoded = JWT::decode($jwt, new Key(Jwts::$secret_key, 'HS256'));
            //print_r($decoded);

        } catch (Exception $th) {
            //throw $th;
            $men;
            var_dump($th);
        }
    }

    public function test()
    {
        try {
            $tk = $_SESSION['token'];

            //$tk   = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJleHAiOjE2NjYwNDk3NjYsImRhdGEiOnsidXN1YXJpb19pZCI6NSwicm9sIjoiYWRtaW4ifSwiaWlzIjoibG9jYWxob3N0In0.5DRxj1u_TgEslKuMhDcm9FvyZ10CJuJbg5KzbnKWrTI';
            $data = Jwts::value($tk);
            print_r($data->data);
        } catch (Exception $th) {
            //throw $th;
        }

    }

}