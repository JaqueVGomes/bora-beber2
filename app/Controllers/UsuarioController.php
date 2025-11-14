<?php
namespace App\Controllers;

// Importa o Model de Usuario
use App\Models\Usuario;

class UsuarioController{
    // Busca os usarios e chama a tela de listar
    public function listar(){
        // Chama a model e a função que busca os dados e armazena na var
        $listagem_usua = Usuario::buscarTodos();

        render("usuarios/listagem_usua.php",[
        'title' => "Lista de Usuários",
        'usuarios' =>$listagem_usua
        ]);
    }
}