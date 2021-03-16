<?php

namespace Database\Connection;

use \PDO;

class Database {

    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $charset;

    protected function connect() {
        $this->servername = "localhost";            
        $this->username = "root";            
        $this->password = ""; 
        $this->dbname = "auth_oop";       
        $this->charset = "utf8mb4";

        //Data Source Name
        try {
            $dsn = "mysql:host=". $this->servername .";dbname:" . $this->dbname . ";charset=" . $this->charset;
            $pdo = new PDO($dsn, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    public function aso() {
        return 'Hayup';
    }
}


// CREATE TABLE users(
// 	id int(11) not null PRIMARY KEY AUTO_INCREMENT,
//     name varchar(111) not null,
//     email varchar(222) not null,
//     password varchar(222) not null
// );