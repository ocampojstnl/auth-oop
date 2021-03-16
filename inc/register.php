<?php
// session_start();
require_once '../app.php';

if(@$_GET['csrf']) {
    if (__CSRF__ != $_GET['csrf']) {
        // header('Location: ../');
        echo 'Illegal access!';
        die();
    } 
}


use Controllers\Auth\Auth;
use Models\User;

$user = new Auth();
$user->login(['email' => $_POST['email'], 'password' => $_POST['password']]);
die();
var_dump(User::$attributes);
