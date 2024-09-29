<?php

use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Controllers\UserController;

// Array de rotas:

return [

    '/' => [HomeController::class, 'index'],
    '/user/profile/{id}' => [UserController::class, 'profile'],
    '/login' => [AuthController::class, 'login'],
];