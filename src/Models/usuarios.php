<?php
    class Usuarios extends model{
        private $id;
        private $nome;
        private $usuario;
        private $senha;
        private $data_Cad;

        public function __construct(){
            parent::__construct();
        }

        public function setId($id){
            $this->id = $id;
        }        
        public function getId(){
            return $this->id;
        }  
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setUsuario($user){
            $this->usuario = $user;
        }
        public function getUsuario(){
            return $this->usuario;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }
        public function getSenha(){
            return $this->senha;
        } 
        public function getDataCad(){
            return $this->data_Cad;
        }         
        public function selectUsuarios(){
            $array = array();
                $sql = "SELECT * FROM usuarios";
                $sql = $this->db->query($sql);
                if($sql->rowCount() > 0){
                    $array = $sql->fetchAll();
                }
            return $array;
        }
    }
?>