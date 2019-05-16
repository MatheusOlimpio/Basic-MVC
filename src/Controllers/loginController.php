<?php
class loginController extends controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $dados = array();
        if(isset($_POST['email']) && isset($_POST['pass'])){

            $email = addslashes($_POST['email']);
            $senha = md5($_POST['pass']);

            if(!empty($email) && !empty($senha)){

                $u = new Usuarios();
                
                if($u->autenticaLogin($email, $senha)){
                    $_SESSION['twlg'] = $u->selectUsuarioLogado($email); 
                    header('Location: /mvc/home');
                }else{
                    $dados['aviso'] = 'Email ou senha errada.';
                }

            }else{

                $dados['aviso'] = 'Por favor, preencha todos os campos para fazer o login';

            }
        }
        $this->loadView('login', $dados);
    }

    public function cadastro(){
        $dados = array('aviso' => '');

        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = md5($_POST['senha']);

            if(!empty($nome) && !empty($email) && !empty($senha)){
                $u = new Usuarios();
                
                if(!$u->usuarioExiste($email)){
                    $_SESSION['twlg'] = $u->insertUsuarios($nome, $email, $senha);
                    header('Location: /mvc/home');
                }else{
                    $dados['aviso'] = "Este usuário ja existe";
                }

            }else{
                $dados['aviso'] = "Preencha todos os campos para cadastrar";
            }
        }
        $this->loadView('cadastro', $dados);
    }
    public function login(){

    }
}


?>