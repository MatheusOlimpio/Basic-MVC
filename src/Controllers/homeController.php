<?php 
class homeController extends controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
       
        $this->loadTemplate('home', $dados);
    }

}
?>
