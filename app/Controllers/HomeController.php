<?php

namespace App\Controllers;
use Dotenv\Dotenv;
use App\Controllers\Controller;

class HomeController extends Controller{

    public function index(){
        
        return $this->view('/home/index');
    }
}