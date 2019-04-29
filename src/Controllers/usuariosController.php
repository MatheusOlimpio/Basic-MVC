<?php
class usuariosController extends controller{
    public function index(){
        $usuario = new Usuarios();
        $dados['usuarios'] = $usuario->selectUsuarios();
        $this->loadTemplate('usuarios',$dados);
    }
}
?>