<?php

namespace App\Controllers;

use App\Models\Usuario;

class UsuarioController
{
    // Lista todos os usuários e chama a view
    public function listar()
    {
        // Busca no Model
        $lista_usuario = Usuario::buscarTodos();

        // Renderiza a view CORRETA
        render('usuarios/lista_usuario.php', [
            'title'    => 'Lista de Usuários',
            'usuarios' => $lista_usuario
        ]);
    }
    public function salvar (){
        //1.Limpar os dados, remove tudo que não for texto puro
        $dados =[
            'nome'=>filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS),
            'cpf'=>filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS),
            'celular'=>filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_SPECIAL_CHARS),
            'rua'=>filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_SPECIAL_CHARS),
            'numero'=>filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_SPECIAL_CHARS),
            'complemento'=>filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_SPECIAL_CHARS),
            'bairro'=>filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_SPECIAL_CHARS),
            'cidade'=>filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS),
            'cep'=>filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS),
            'estado'=>filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_SPECIAL_CHARS),
            'genero'=>filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_SPECIAL_CHARS),
            'email'=>filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS),
            'nivel_acesso'=>filter_input(INPUT_POST, 'nivel_acesso', FILTER_SANITIZE_SPECIAL_CHARS),
            'data_nascimento'=> filter_input(INPUT_POST, 'data_nascimento', FILTER_DEFAULT),
            'senha'=> filter_input(INPUT_POST, 'senha', FILTER_DEFAULT)
                     
        ];
        // cria a lista de erros
        $erros = [];

        if (empty($dados['nome'])){
            $erros[] = 'O campo NOME não pode ficar em branco!';
        }else if (strlen($dados['nome']) <4) { // verifica se o nome tem menos de 4 letras
            $erros[] = 'O campo NOME deve ter mais que 3 caracteres!';
        }

        // Se não houver erros salva 
        if (empty($erros)){
            $id = Usuario::salvar($dados);
            header('Location: /usuarios');
        }else{
            //Se não houver erros, volta para o formulario 
            $_SESSION['erros'] = $erros;
            $_SESSION['dados'] = $dados;
            header('Location: /usuario/inserir');
        }
    }
}
