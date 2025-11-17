<?php

namespace App\Controllers;

// Importar o model de Usuario
use App\Models\Usuario;

class UsuarioController
{
    // Busca os usuarios e chama a tela e listar
    public function listar()
    {
        // Chama a model e a função que busca os dados e armazena na var
        $lista_usuarios = Usuario::buscarTodos();

        render("usuarios/listagem_usua.php", [
            'title' => "Lista de Usuários",
            'usuarios' => $listagem_usua
        ]);
    }
}