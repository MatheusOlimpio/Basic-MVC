<?php
    class logoutController extends controller{
        public function __contruct(){
            parent::__construct();
        }
        public function index(){
            if(isset($_SESSION['twlg'])){
                $_SESSION['twlg'] = array();
                session_destroy($_SESSION['twlg']); 
                header("Location: /mvc/login");
            }
        }
    }


?>