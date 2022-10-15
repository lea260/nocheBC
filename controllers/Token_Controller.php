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
                "rol" => "admin"];
            $jwt = Jwts::GenerarTk($data);
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
            $tk   = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJleHAiOjE2NjUyNTQ3OTcsImRhdGEiOnsidXN1YXJpb19pZCI6NSwicm9sIjoiYWRtaW4ifSwiaWlzIjoibG9jYWxob3N0In0.FpVxaiyaR7PaL3185wM8F1UuRMMeuflGi6LCmi-rpJI';
            $data = Jwts::value($tk);
            print_r($data->data);
        } catch (Exception $th) {
            //throw $th;
        }

    }

}