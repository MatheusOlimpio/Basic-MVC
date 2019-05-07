<?php 
class homeController extends controller{
    public function __construct(){
        parent::__construct();
        
        $user = new usuarios();
        if(!$user->logged()){
            header("Location: /mvc/login");
            echo "<script>alert('Voce não tem permissão para acessar o sistema');</script>";
        }
    }

    public function index(){
        $usuario = new Usuarios();
        $usuario->setNome('Matheus');
        
        $dados = array(
            'nome' => $usuario->getNome()
        );
        $this->loadTemplate('home', $dados);
    }
    public function sobre(){
        $dados = array();
        $this->loadTemplate('sobre', $dados);
    }
}
?>