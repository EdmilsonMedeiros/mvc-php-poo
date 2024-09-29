<?php

namespace App\Database;
use App\Database\Config;
use Exception;
use PDO;

class Connection extends Config {
    // Método para a conexão com o banco de dados:
    public function dbConnect(){
        try{
            // Monta o DSN para o PDO (pode ser adaptado para outro banco de dados)
            $dsn = "mysql:host={$this->dbhost};dbname={$this->dbname}";

            // Cria uma nova conexão:
            $pdo = new PDO($dsn, $this->dbuser, $this->dbpassword);

            // Define o modo de erro do PDO para exceções:
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Retorna a conexão estabelecida:
            return $pdo;
        }catch(Exception $e){
            throw new Exception("<span style='color: red;'>Erro ao conectar ao banco de dados:</span> {$e->getMessage()}");
        }
    }
}