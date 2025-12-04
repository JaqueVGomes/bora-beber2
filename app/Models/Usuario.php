<?php

namespace App\Models;
// Indica que esta classe está dentro da pasta Models do projeto.

use PDO;
use PDOException;
use App\Core\Database;
// Importa recursos necessários para conectar ao banco e tratar erros.

class Usuario
{
    // Função para buscar todos os usuários cadastrados no banco
    public static function buscarTodos()
    {
        try {
            $pdo = Database::conectar(); // Conecta ao banco de dados
            $sql = "SELECT * FROM usuarios"; // Comando SQL para buscar todos os registros
            return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            // Retorna todos os usuários como um array com nomes das colunas
        } catch (PDOException $e) {
            echo "Erro ao buscar usuários: " . $e->getMessage();
        }
    }

    // Função para salvar um novo usuário no banco
    public static function salvar($dados)
    {
        try {
            $pdo = Database::conectar(); // Conecta ao banco

            // Criptografa a senha para segurança antes de salvar
            $senhaCriptografada = password_hash($dados['senha'], PASSWORD_BCRYPT);

            // Comando SQL com os campos que serão preenchidos
            $sql = "INSERT INTO usuarios 
                (nome, cpf, data_nascimento, celular, rua, numero, complemento, bairro, cidade, cep, estado, genero, email, nivel_acesso, senha)
                VALUES 
                (:nome, :cpf, :data_nascimento, :celular, :rua, :numero, :complemento, :bairro, :cidade, :cep, :estado, :genero, :email, :nivel_acesso, :senha)";

            $stmt = $pdo->prepare($sql);
            // Prepara o comando para evitar vulnerabilidades de segurança

            // Preenchendo os campos do SQL com os valores recebidos do formulário
            $stmt->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $stmt->bindParam(':cpf', $dados['cpf'], PDO::PARAM_STR);

            // Ajuste: garantindo que a data venha corretamente do formulário
            $data_nascimento = $dados['data_nascimento'];
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

            // Envia a senha já criptografada para o banco
            $stmt->bindParam(':senha', $senhaCriptografada);

            $stmt->execute(); // Executa e salva no banco

            // Retorna o ID do usuário recém-cadastrado
            return (int) $pdo->lastInsertId();

        } catch (PDOException $e) {
            echo "Erro ao inserir: " . $e->getMessage();
            return false;
        }
    }

    // Função para excluir um usuário pelo ID
    public static function excluir($id)
    {
        try {
            $db = Database::conectar(); // Conecta ao banco
            $stmt = $db->prepare("DELETE FROM usuarios WHERE id_usuario = :id");
            // Apaga o usuário com o ID informado

            return $stmt->execute([':id' => $id]);
            // Caso dê certo, retorna true

        } catch (PDOException $e) {
            echo "Erro ao excluir usuário: " . $e->getMessage();
            return false;
        }
    }
}
