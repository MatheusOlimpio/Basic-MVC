<?php 
class homeController extends controller{
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