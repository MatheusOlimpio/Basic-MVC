<?php
require 'environment.php';

define("BASE_URL", "http://localhost/mvc/src");

global $config;
$config = array();
if(ENVIRONMENT == 'development'){
    //Conexão local
    $config['dbname'] = 'nomebanco';
    $config['host'] = 'nomehost';
    $config['dbuser'] = 'usuario';
    $config['dbpass'] = 'senha';
}else{
    //Conexão de producao
    $config['dbname'] = 'nomebanco';
    $config['host'] = 'nomehost';
    $config['dbuser'] = 'usuarios';
    $config['dbpass'] = 'senha'; 
}
?>
