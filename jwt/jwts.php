<?php
require_once 'vendor/autoload.php';
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class Jwts
{
    public static $secret_key = 'Sdw1s9x8@';

    public static function GenerarTk($data)
    {
        $time = time();

        $token = [
            //'nbf' => $time + (30 * 60),
            //'iat' => $time,
            'exp' => $time + (30 * 60),
            'data' => $data,
            'iis' => $_SERVER['HTTP_HOST'],
        ];

        return JWT::encode($token, self::$secret_key, 'HS256');
    }

    public static function value($jwt)
    {
        if (empty($jwt)) {
            throw new Exception("Invalid token supplied.");
        }

        //$decoded = JWT::decode($jwt, self::$secret_key, ['HS256']);
        // $decoded = JWT::decode($jwt, new Key(Jwts::$secret_key, 'HS256'));
        $decode = JWT::decode($jwt, new Key(Jwts::$secret_key, 'HS256'));

        return $decode;

    }

}