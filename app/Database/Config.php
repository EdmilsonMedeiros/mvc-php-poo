<?php

namespace App\Database;

class Config {
    protected $dbname;
    protected $dbuser;
    protected $dbpassword;
    protected $dbhost;

    // Construtor que define as priopriedades do banco de dados:
    public function __construct($dbname = 'project', $dbuser = 'root', $dbpassword = '', $dbhost = 'localhost')
    {
        $this->dbname       = getenv('DB_NAME') ?? $dbname;
        $this->dbuser       = getenv('DB_USER') ?? $dbuser;
        $this->dbpassword   = getenv('DB_PASSWORD') ?? $dbpassword;
        $this->dbhost       = getenv('DB_HOST') ?? $dbhost;
    }
}