<?php

class DB {

    private $host;
    private $database;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host = 'localhost';
        $this->database = 'login';
        $this->user = 'root';
        $this->password = '';
        $this->charset = 'utf8mb4';
    }

    public function connect(){
        try{

            $conn = "mysql:host=" . $this->host . "; dbname=" . $this->database . "; charset=" . $this->charset;
            
            $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_EMULATE_PREPARES => false];
            
            $pdo = new PDO($conn, $this->user, $this->password, $options);

            return $pdo;
            
        }catch(PDOException $e){
            print_r("Connect error: " . $e->getMessage());
        }
    }

}

?>