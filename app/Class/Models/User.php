<?php

namespace Models;

class User {

    public static $attributes;

    public function __construct($attributes) {
        Self::$attributes = $attributes;
    }

}

