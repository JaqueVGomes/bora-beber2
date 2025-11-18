<?php

namespace App\Controllers;

use App\Models\Usuario;

class UsuarioController
{
    // Lista todos os usuários e chama a view
    public function listar()
    {
        // Busca no Model
        $lista_usuarios = Usuario::buscarTodos();

        // Renderiza a view CORRETA
        render('usuarios/lista_usuario.php', [
            'title'    => 'Lista de Usuários',
            'usuarios' => $lista_usuarios
        ]);
    }
}
