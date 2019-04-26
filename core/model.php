<?php
class Model{
    protected $db;

    public function __construct(){
        global $config;
        
        $this->db = new PDO("mysql:host=".$config['host'].";dbname=".$config['dbname']."",$config['dbuser'],$config['dbpass']);
    }
}


?>