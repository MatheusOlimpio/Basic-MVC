<?php
class controller{
    public function __construct(){
        
    }
    //quando a view for carregada, vamos enviar o seu nome
    // e os dados a serem enviados
    //Foi criado um array para caso o usuario nao enviar nada
    // O array e criado, e nao iremos ter problemas
    public function loadView($viewName, $viewData = array()){
        // $viewData = array(
        //     'nome' => 'Matheus',
        //     'idade' => '21'
        // );
        // extract transforma os elementos do array em variaveis
        extract($viewData);
        include 'src/views/'.$viewName.'.php';
    }

    public function loadTemplate($viewName, $viewData = array()){
        include 'src/views/template.php';
    }

    public function loadViewTemplate($viewName, $viewData = array()){
        extract($viewData);
        include 'src/views/'.$viewName.'.php';
    }
}

?>