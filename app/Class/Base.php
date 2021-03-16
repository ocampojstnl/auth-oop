<?php

namespace App;

use Database\Connection\Database as Db;

class Base extends Db{
    protected $dbcon;

    public function __construct() {
        $this->dbcon = $this->connect();
    }
    
}