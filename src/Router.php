<?php
namespace App;

class Router{
    private $routes = [];
    private static $params = [];
    // verifica se o metodo chamado e get ou post
    private function validar(string $method){
        return in_array($method, ['get', 'post']);
    }

    public function __call(string $method, array $args) {
        $method = strtolower($method);
        if(!$this->validate($method))
            return false;
        [$route, $action] = $args;
        if(!isset($action) or !is_callable($action))
            return false;
        
        $this->routes[$method][$route] = $action;
        return true;
    }
    /*
        Dá início a aplicação, verificando se existem rotas
        com o método HTTP atual (post ou get), se existe a rota definida pelo 
        parâmetro GET r. E por fim chamando o callable da rota correspondente,
        finalizando a aplicação exibindo o seu retorno (a resposta do Controller).
    */
    public function run () {
        $method = strtolower($_SERVER['REQUEST_METHOD']) ?? 'get';
        $route = $_GET['r'] ?? '/';
        
        if(!isset($this->routes[$method]))
            die('405 Method not allowed');
        if(!isset($this->routes[$method][$route]))
            die('404 Error');
        
        self::$params = $this->getParams($method);
        die( $this->routes[$method][$route]() );
    }
    /*
        Pega as variáveis correspondente ao método atual, sendo os dados
        enviados pelo cliente.
    */
    private function getParams(string $method) {
        if($method == 'get')
            return $_GET;
        return $_POST;
    }
    /*
        Getter para que controlador possa pegar os dados da requisição do cliente
    */
    public static function getRequest() {
        return self::$params;
    }    
}
?>