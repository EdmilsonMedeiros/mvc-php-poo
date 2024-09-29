<?php

namespace App\Models;

use App\Database\Connection;
use Dotenv\Dotenv;
use PDO;

class Model {
    protected $connection;

    public function __construct()
    {
        // .env
        Dotenv::createUnsafeImmutable(__DIR__ . '/../../')->load();
        
        // Instancia a conexão ao banco de dados:
        $this->connection = (new Connection())->dbConnect();
    }

    // Método genérico para a execução de consultas:
    protected function query($sql, $params = []){
        $esmt = $this->connection->prepare($sql);
        $esmt->execute(($params));
        return $esmt->fetchAll(PDO::FETCH_ASSOC); // Retorna os dados consultados
    }
}