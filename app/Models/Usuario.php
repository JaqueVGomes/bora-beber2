<?php

namespace App\Models;

use PDO;
use PDOException;
use App\Core\Database;

class Usuario
{
    // Buscar todos os usuários
    public static function buscarTodos()
    {
        try {
            $pdo = Database::conectar();
            $sql = "SELECT * FROM usuarios";
            return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao buscar usuários: " . $e->getMessage();
        }
    }

    // Salvar usuário
    public static function salvar($dados)
    {
        try {
            $pdo = Database::conectar();

            $senhaCriptografada = password_hash($dados['senha'], PASSWORD_BCRYPT);

            $sql = "INSERT INTO usuarios 
                (nome, cpf, data_nascimento, celular, rua, numero, complemento, bairro, cidade, cep, estado, genero, email, nivel_acesso, senha)
                VALUES 
                (:nome, :cpf, :data_nascimento, :celular, :rua, :numero, :complemento, :bairro, :cidade, :cep, :estado, :genero, :email, :nivel_acesso, :senha)";

            $stmt = $pdo->prepare($sql);

            //Passa as variaveis para o SQL 
            $stmt->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);        
            $stmt->bindParam(':cpf', $dados['cpf'], PDO::PARAM_STR);
            $stmt->bindParam(':data_nascimento', $data_nascimento);  
            $stmt->bindParam(':celular', $dados['celular'], PDO::PARAM_STR);
            $stmt->bindParam(':rua', $dados['rua'], PDO::PARAM_STR);
            $stmt->bindParam(':numero', $dados['numero'], PDO::PARAM_STR);
            $stmt->bindParam(':complemento', $dados['complemento'], PDO::PARAM_STR);
            $stmt->bindParam(':bairro', $dados['bairro'], PDO::PARAM_STR);
            $stmt->bindParam(':cidade', $dados['cidade'], PDO::PARAM_STR);
            $stmt->bindParam(':cep', $dados['cep'], PDO::PARAM_STR);
            $stmt->bindParam(':estado', $dados['estado'], PDO::PARAM_STR);
            $stmt->bindParam(':genero', $dados['genero'], PDO::PARAM_STR);
            $stmt->bindParam(':email', $dados['email'], PDO::PARAM_STR);
            $stmt->bindParam(':nivel_acesso', $dados['nivel_acesso'], PDO::PARAM_STR);
            $stmt->bindParam(':senha',  $senhaCriptografada);

            $stmt->execute();

            // Retorna o ID de registro no BD
            return (int) $pdo->lastInsertId();

            return true;

        } catch (PDOException $e) {
            echo "Erro ao inserir: " . $e->getMessage();
            return false;
        }
    }
    public static function excluir($id)
{
    try {
        $db = Database::conectar();
        $stmt = $db->prepare("DELETE FROM usuarios WHERE id_usuario = :id");
        return $stmt->execute([':id' => $id]);
    } catch (PDOException $e) {
        echo "Erro ao excluir usuário: " . $e->getMessage();
        return false;
    }
}
}
