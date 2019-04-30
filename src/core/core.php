<?php
class Core {

    public function run(){
        // Vamos tirar o index.php da url, e pegar,
        //tudo o que esta depois do index.php

        $url = explode('index.php', $_SERVER['PHP_SELF']);
        $url = end($url);
        $params = array();
        // $urlDir = 'http://localhost/mvc/src/Controller/homeController.php';
        // if(file_exists($urlDir)){
        //     echo 'existe';
        // }else{
        //     echo 'nao';
        // }

        if(!empty($url)){
            // se foi digitado alguma coisa na url
            // separando url pela barra

            $url = explode('/', $url);
            // remove a primeira posicao do array - removemos a barra do /url
            array_shift($url);
            $currentController = $url[0].'Controller';
            array_shift($url);


            // se existe alguma action depois da segunda barra
            if(!empty($url[0])){
                // Sera a action atual
                $currentAction = $url[0];
                array_shift($url);
            }else{
                // Se nao, a action vai ser a index
                $currentAction = 'index';
            }

            if(count($url) > 0){
                $params = $url;
            }
        }else{
            // se o usuario nao digitou nada
            $currentController = 'homeController';
            $currentAction = 'index';
            
        }
        //nao iremos instanciar o controller, ele sera herdado de um objetivo
        require_once 'src/core/controller.php';
        //O php substitui esse codigo pelo nome do controller
        $c = new $currentController();
        // Funcao para passar os parametros da url para o controller
        // Passamos o controler, a action(metodo), e os nossos parametros
        // $url_base = BASE_URL;
        // $actualController = $url_base.'/Controllers/'.$currentController.'.php';

        // if(file_exists($actualController)){
        //     call_user_func_array(array($c, $currentAction), $params);
        // }else{
        //     $currentController = 'notFoundController';
        //     $currentAction = 'index';
        //     
        // }
        call_user_func_array(array($c, $currentAction), $params);
    }
} 
?>