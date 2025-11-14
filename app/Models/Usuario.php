<?php
// Em qual pasta ele está
namespace App\Models;

use PDO;
use App\Core\Database;


// Mesmo nome do Arquivo 
class Usuario{
    // Aqui declaramos uma função para cada operação do CRUD

    //Busca todos os usuários no BD
    public static function buscarTodos(){
        // Primeiro vamos conectar no banco de dados
        // Precisamos importar o PDO antes de criar a classe
        $pdo = Database::conectar();

        // Geramos o script SQL de consulta
        $sql = "SELECT * FROM usuarios";

        // Retornamos o resultado da consulta
        return $pdo->query($sql)->fetchAll();
    }

    public static function salvar($dados){
        try {
            $pdo = Database::conectar();

            $senha_criptografada = password_hash($dados['senha'], PASSWORD_BCRYPT);

            $sql = "INSERT INTO usuarios (nome, cpf, data_nascimento, celular, rua, numero, complemento, bairro, cidade, cep, estado, genero, email, nivel_acesso, senha) ";
            $sql .= "VALUES (:nome, :cpf, :data_nascimento, :celular, :rua, :numero, :complemento, :bairro, :cidade, :cep, :estado, :genero, :email, :nivel_acesso, :senha)";

            //Prepara o SQL para ser inserido no BD e limpa códigos maliciosos

            $stmt = $pdo->prepare($sql);

            // Passa as variaveis para o SQL
            $stmt->bindParam(':nome', $dados{'nome'}, PDO::PARAM_STR);

        }catch (PDOException $e){
            echo "Erro ao inserir: " .$e->getMessage();
            exit;
        }
    }
}
