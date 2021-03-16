<?php

namespace Controllers\Auth;

use App\Base;
use Database\Query\Query;
use Models\User;

class Auth extends Base{

    public $dbcon;

    public function __construct() {
        $this->dbcon = $this->connect();
    }

    public function login($request) {
        $query = new Query();
        $query->find($request['email']);

        if (!@User::$attributes['email'] || !User::$attributes['email'] == $request['email']) {
            echo 'sad';
        } else {
            if (User::$attributes['password'] != $request['password']) {
                echo 'Wrong password';
            } else {
                echo 'logged in';
            }
        }
    }
}