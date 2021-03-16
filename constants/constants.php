<?php

$stringRand = rand(0, 999999999);
$salt = '@@#Mm4234dFD4^';
$_SESSION['csrf'] = $stringRandSecond = rand(999, 434538);
define("__CSRF__", $_SESSION['csrf']);