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

            // Bind de TODAS as variáveis
            $stmt->bindParam(':nome', $dados['nome']);
            $stmt->bindParam(':cpf', $dados['cpf']);
            $stmt->bindParam(':data_nascimento', $dados['data_nascimento']);
            $stmt->bindParam(':celular', $dados['celular']);
            $stmt->bindParam(':rua', $dados['rua']);
            $stmt->bindParam(':numero', $dados['numero']);
            $stmt->bindParam(':complemento', $dados['complemento']);
            $stmt->bindParam(':bairro', $dados['bairro']);
            $stmt->bindParam(':cidade', $dados['cidade']);
            $stmt->bindParam(':cep', $dados['cep']);
            $stmt->bindParam(':estado', $dados['estado']);
            $stmt->bindParam(':genero', $dados['genero']);
            $stmt->bindParam(':email', $dados['email']);
            $stmt->bindParam(':nivel_acesso', $dados['nivel_acesso']);
            $stmt->bindParam(':senha', $senhaCriptografada);

            $stmt->execute();

            return true;

        } catch (PDOException $e) {
            echo "Erro ao inserir: " . $e->getMessage();
            return false;
        }
    }
}
