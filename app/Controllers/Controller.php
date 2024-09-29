<?php

namespace App\Controllers;
use Dotenv\Dotenv;

class Controller {
    public function __construct()
    {
        // .env
        Dotenv::createUnsafeImmutable(__DIR__ . '/../../')->load();
    }

    public function view($view_path, $object = []){
        // Extrai os dados do array como variáveis
        extract($object);

        return require __DIR__ . "../../Views{$view_path}.php";
    }
}