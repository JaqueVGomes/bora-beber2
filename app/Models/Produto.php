<?php

namespace App\Models;

use PDO;
use PDOException;
use App\Core\Database;

class Produto
{
    // Buscar todos os produtos
    public static function buscarTodos()
    {
        try {
            $pdo = Database::conectar();
            $sql = "SELECT * FROM produtos";
            return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao buscar produtos: " . $e->getMessage();
        }
    }

    // Salvar produto
    public static function salvar($dados)
    {
        try {
            $pdo = Database::conectar();

            $sql = "INSERT INTO produtos 
                (nome, categoria, descricao, quantidade, valor_unitario, estoque_minimo)
                VALUES 
                (:nome, :categoria, :descricao, :quantidade, :valor_unitario, :estoque_minimo)";

            $stmt = $pdo->prepare($sql);

            // Passa as variáveis para o SQL
            $stmt->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $stmt->bindParam(':categoria', $dados['categoria'], PDO::PARAM_STR);
            $stmt->bindParam(':descricao', $dados['descricao'], PDO::PARAM_STR);
            $stmt->bindParam(':quantidade', $dados['quantidade'], PDO::PARAM_STR);
            $stmt->bindParam(':valor_unitario', $dados['valor_unitario'], PDO::PARAM_STR);
            $stmt->bindParam(':estoque_minimo', $dados['estoque_minimo'], PDO::PARAM_STR);

            $stmt->execute();

            // Retorna o ID do produto inserido
            return (int) $pdo->lastInsertId();

        } catch (PDOException $e) {
            echo "Erro ao inserir produto: " . $e->getMessage();
            return false;
        }
    }

   public static function excluir($id)
    {
        try {
            $db = Database::conectar();
            $stmt = $db->prepare("DELETE FROM produtos WHERE id_produto = :id");
            return $stmt->execute([':id' => $id]);
        } catch (PDOException $e) {
            throw new PDOException("Erro ao excluir produto: " . $e->getMessage());
        }
    }
}
