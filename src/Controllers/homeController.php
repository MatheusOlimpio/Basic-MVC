<?php 
class homeController extends controller{
    public function __construct(){
        parent::__construct();
        
        $user = new usuarios();
        if(!$user->logged()){
            header("Location: /mvc/login");
            echo "<script>console.log('Voce não tem permissão para acessar o sistema');</script>";
        }
    }

    public function index(){
        $usuario = new Usuarios();
        $dados = [
            "id" => $_SESSION['twlg']['id'],
            "nome" => $_SESSION['twlg']['nome'],
            "email" => $_SESSION['twlg']['email']
        ];
        $this->loadTemplate('home', $dados);
    }

}
?>