<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends Controller{

    // Exibe o perfil do usuário
    public function profile($id) {
        $userModel = new User();
        $user = $userModel->getUserById($id); // Usando o ID do parâmetro

        // Verifica se o usuário foi encontrado
        if (!$user) {
            http_response_code(404);
            
            return $this->view('/404');
        }


        // // Define o cabeçalho para JSON | Retorno de dados como json
        // header('Content-Type: application/json');
        // // Retorna os dados do usuário em formato JSON
        // echo json_encode($user);

        return $this->view('/user/profile', ['user' => $user]);
    }

    public function getAllUsers(){
        $user = new User();
        return $user->getAllUsers();
    }

    public function getUserById($id){
        $user = new User();
        return $user->getUserById($id);
    }

}