<?php

namespace App\Controllers;
use Dotenv\Dotenv;
use App\Controllers\Controller;

class HomeController extends Controller{

    public function index(){
        
        return require __DIR__ . '../../Views/home/index.php';
    }
}