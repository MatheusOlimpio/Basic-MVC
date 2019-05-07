<?php
class loginController extends controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $dados = array();
        $this->loadView('login', $dados);
        
        if(isset($_POST)){
            extract($_POST);
            $u = new usuarios();
            if($user != NULL && $pass != NULL){
                $u->setUsuario($user);
                $u->setSenha($pass);
            }
        }
    }
}


?>