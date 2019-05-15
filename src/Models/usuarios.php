<?php
    class Usuarios extends model{
        private $id;
        private $nome;
        private $usuario;
        private $senha;
        private $data_Cad;
        private $email;

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
        public function setEmail($email){
            $this->email = $email;
        }        
        public function getEmail(){
            return $this->email;
        }      
        public function logged(){
           if(isset($_SESSION['twlg'])){ 
                return true;
           }else{
                return false;
           }
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
        public function selectUsuarioLogado($email){
                $array = array();
                $sql = "SELECT id, email, nome FROM usuarios WHERE email = :email";
                $stmt = $this->db->prepare($sql);
                $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                $stmt->execute();
                if($stmt->rowCount() > 0){
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                       $array = $row;
                    }
                }         
                return $array;
        }
        public function insertUsuarios($nome, $email, $usuario,$senha){
            $sql = "INSERT INTO usuarios(nome, usuario, email, senha) 
            VALUES(:nome, :usuario,:email,:senha);";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
            $stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
            $stmt->execute();
            
            if($stmt == TRUE){
                $id = $this->db->lastInsertId();
                return $id;
            }else{
                return false;
            }
        }
        public function usuarioExiste($email){
            $sql = "SELECT email FROM usuarios WHERE email = :email";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();

            if($stmt == TRUE){
                return true;
            }else{
                return false;
            }
        }
        public function autenticaLogin($email, $senha){
            $sql = "SELECT email, senha FROM usuarios WHERE email = :email AND senha = :senha";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
            $stmt->execute();
            $count=$stmt->rowCount();

            if($count){
                return true;
            }else{
                return false;
            }
        }
    }
?>