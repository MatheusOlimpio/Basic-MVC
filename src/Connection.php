<?php

namespace App;
use \PDO;
use \PDOStatement;
use \Exception;

Class Connection {
    private  $server = "mysql:host=localhost;dbname=db_loja";
    private  $user = "root";
    private  $pass = "";
    private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
    protected $con;
    public function __construct(){
        //
    } 
    public function openConnection()
    {
        try
        {
            $this->con = new PDO($this->server, $this->user,$this->pass,$this->options);
            return $this->con;
        } catch (PDOException $e){
            echo "There is some problem in connection: " . $e->getMessage();
        }
    }
    public function executeQuery($array){
        print_r($array);
        $this->con->execute($array); 
    }
    public function closeConnection() {
         $this->con = null;
      }
    }
?>