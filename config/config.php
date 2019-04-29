<?php
require 'environment.php';

define("BASE_URL", "http://localhost/mvc/src");

global $config;
$config = array();
if(ENVIRONMENT == 'development'){
    //Conexão local
    $config['dbname'] = 'db_loja';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else{
    //Conexão de producao
    // $config['dbname'] = 'teste';
    // $config['host'] = 'localhost';
    // $config['dbuser'] = 'root';
    // $config['dbpass'] = 'root'; 
}
?>