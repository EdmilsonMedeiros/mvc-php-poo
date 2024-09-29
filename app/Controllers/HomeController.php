<?php

namespace App\Controllers;
use Dotenv\Dotenv;
use App\Controllers\Controller;

class HomeController extends Controller{

    public function index(){
        
        echo(getenv('DB_NAME'));
        
        return require __DIR__ . '../../Views/home/index.php';
    }
}