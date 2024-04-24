<?php


include_once 'loader.php';

class auth{

    public $url = 'local';

    public function is_admin(){

    }

    public function is_login()
    {

        if($_SESSION['login']){
            return true;
        }else{

            header('location:./login.php');


        };
        
    }

}

