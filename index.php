<?php
require 'config/config.php';

spl_autoload_register(function ($class) {
    //SE A VARIAVEL CLASS FOR UM CONTROLLER
    if(strpos($class, 'Controller') > -1) {
        if(file_exists('src/Controllers/'.$class.'.php')) {
            require_once 'src/Controllers/'.$class.'.php';
        }
    } else if(file_exists('src/Models/'.$class.'.php')) {
            require_once 'src/Models/'.$class.'.php';
    } else {
        require_once 'src/core/'.$class.'.php';
    }  
});

$core = new Core();
$core->run();
?>