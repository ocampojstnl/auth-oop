<?php

session_start();

require_once 'constants/constants.php';

// require_once 'app/Class/Models/Auth/Auth.php';

spl_autoload_register('myAutoloader');

function myAutoloader($className)
{
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);

    // include $_SERVER['DOCUMENT_ROOT'].'/app/Class/'.$className.'.php';
    include __DIR__ .'/app/Class/'.$className.'.php';
}
require_once 'app/Class/Base.php';

//https://dev.to/fadymr/php-create-your-own-php-dotenv-3k2i
//https://stackoverflow.com/questions/11222809/does-extending-a-parent-class-in-php-require-the-file-with-the-class-being-inclu
