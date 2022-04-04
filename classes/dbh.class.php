<?php

class Dbh {
    private $host = "localhost" || "127.0.0.1";
    private $user = "root";
    private $pwd = "";
    private $bbdd = "hoteles";

    protected function connect(){
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->bbdd;
        $pdo = new PDO($dsn, $this->user, $this->pwd); 
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}