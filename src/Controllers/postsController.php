<?php
class postsController extends controller{
    public function index(){
        echo 'Lista das postagens';
    }
    public function noticia($nome, $sobrenome){
        echo 'noticia: '.$nome, " ", $sobrenome ; 
    }
}

?>