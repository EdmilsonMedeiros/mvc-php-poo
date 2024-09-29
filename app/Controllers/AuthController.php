<?php

namespace App\Controllers;

class AuthController extends Controller{

    public function login(){

        return require __DIR__ . '../../Views/login.php';
    }
}