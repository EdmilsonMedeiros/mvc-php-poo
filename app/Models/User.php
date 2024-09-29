<?php

namespace App\Models;

class User extends Model{

    protected $table = 'users'; // Tabela
    // propriedades da classe:

    public function getAllUsers(){
        $sql = "SELECT * FROM {$this->table}";
        return $this->query($sql);
    }

    // Método para buscar um usuário específico
    public function getUserById($id) {
        $sql = "SELECT * FROM {$this->table} WHERE id = :id";
        return $this->query($sql, ['id' => $id]);
    }
}