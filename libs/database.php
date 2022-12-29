<?php
require_once 'vendor/autoload.php';
class Database
{

    private $host;
    private $port;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct()
    {

        /*
         * cargar variables de entorno
         *
         */

        //$path   = dirname(dirname(__FILE__));
        //$dotenv = Dotenv\Dotenv::createImmutable($path);
        //$dotenv->load();
        //var_dump($_ENV);

        $this->host     = constant('HOST');
        $this->port     = constant('PORT_DB');
        $this->db       = constant('DB');
        $this->user     = constant('USER');
        $this->password = constant('PASSWORD');
        $this->charset  = constant('CHARSET');

        /*$this->host     = $_ENV['HOST'];
    $this->port     = $_ENV['PORT_DB'];
    $this->db       = $_ENV['DB'];
    $this->user     = $_ENV['USER'];
    $this->password = $_ENV['PASSWORD'];
    $this->charset  = $_ENV['CHARSET'];*/
    }

    public function connect()
    {

        try {

            $connection = "mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options    = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options);

            return $pdo;

        } catch (PDOException $e) {
            print_r('Error connection: ' . $e->getMessage());
        }
    }
}