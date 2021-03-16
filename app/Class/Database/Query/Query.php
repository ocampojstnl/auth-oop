<?php

namespace Database\Query;

use App\Base;
use Models\User;

class Query extends Base{

    public function getUsers() {
        $sql = "SELECT * FROM auth_oop.users";
        $stmt = $this->dbcon->query($sql);

        while($row = $stmt->fetch()) {
            $user = new User($row);
        }
    }

    public function find($email) {
        $sql = "SELECT * FROM auth_oop.users WHERE email = '$email'";
        $stmt = $this->dbcon->query($sql);

        while($row = $stmt->fetch()) {
            $user = new User($row);
            // $row = User::$attributes;
        }
    }
    
}