<?php
/*
* main controller class
*/
class Controller{
    public function view($view,$data = array())
    {
        extract($data);
        if(file_exists("../private/views/".$view.".view.php")){
            require ("../private/views/".$view.".view.php");
        }
        else {
            require ("../private/views/404.view.php");
        }
    }

    public function load_model($model){
        if(file_exists("../private/models/".ucfirst($model).".php")){
            require("../private/models/".ucfirst($model).".php");
            return new $model();
        }
        return false;
        
    }

    public function redirect($link){
        header("location: ".ROOT."/".trim($link,"/")); 
    }
}