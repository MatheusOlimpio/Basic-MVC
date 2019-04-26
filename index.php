<?php
require 'config/config.php';
spl_autoload_register(function ($class) {
    //SE A VARIAVEL CLASS FOR UM CONTROLLER
    if(strpos($class, 'Controller') > -1) {
        if(file_exists('Controllers/'.$class.'.php')) {
            require_once 'Controllers/'.$class.'.php';
        }
    } else if(file_exists('Models/'.$class.'.php')) {
            require_once 'Models/'.$class.'.php';
    } else {
        require_once 'core/'.$class.'.php';
    }  
});

$core = new Core();
$core->run();
?>