<?php
/*
* home controller 
*/
class Home extends Controller
{
    function index()
    {
        $user = $this->load_model("User");
        $data = $user->findAll();
        $this->view("home",['rows'=>$data]);
    }
}