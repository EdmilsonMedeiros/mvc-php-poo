<?php

// Carregar o autoload do Composer
require __DIR__ . '/../vendor/autoload.php';

// Carregar as rotas
$routes = require __DIR__ . '/../routes/web.php';

// Pegar a URL requisitada
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Verificar se a URL está mapeada
foreach ($routes as $route => [$controller, $method]) {
    // Usar regex para capturar o parâmetro {id}
    $pattern = preg_replace('/\{(\w+)\}/', '(\d+)', $route);
    
    if (preg_match("#^$pattern$#", $uri, $matches)) {
        // Remove o primeiro elemento do array $matches (que é a string inteira)
        array_shift($matches);

        // Chamar o controlador e método correto
        (new $controller)->$method(...$matches);
        exit; // Termina a execução após a chamada do controlador
    }
}

// Exibir erro 404 se a rota não for encontrada
http_response_code(404);
return require __DIR__ . '../../app/Views/404.php';
