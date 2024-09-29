<?php

namespace App\Controllers;
use Dotenv\Dotenv;

class Controller {
    public function __construct()
    {
        // .env
        Dotenv::createUnsafeImmutable(__DIR__ . '/../../')->load();
    }
}