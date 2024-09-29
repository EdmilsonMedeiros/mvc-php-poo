<?php

namespace App\Controllers;

class AuthController extends Controller{

    public function login() {
        // Lógica de login ou renderização de view de login
        return $this->view('/login');
    }
}