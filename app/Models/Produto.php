<?php

namespace App\Models;
// Dizendo que essa classe faz parte da pastinha Models

use PDO;
use PDOException;
use App\Core\Database;
// Pegando as ferramentas pra conectar no banco e tratar erros

class Produto
{
    // Aqui criei uma função pra BUSCAR todos os produtos no banco
    public static function buscarTodos()
    {
        try {
            $pdo = Database::conectar(); // Conecta no banco
            $sql = "SELECT * FROM produtos"; // Pego tudo da tabela produtos
            return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
            // Retorna tudo de forma organizada (com nome das colunas)
        } catch (PDOException $e) {
            // Se der erro, mostro
            echo "Erro ao buscar produtos: " . $e->getMessage();
        }
    }

    // Função para SALVAR produto no banco
    public static function salvar($dados)
    {
        try {
            $pdo = Database::conectar(); // Conecta no banco

            // Aqui digo o que quero salvar e em quais colunas
            $sql = "INSERT INTO produtos 
                (nome, categoria, descricao, quantidade, valor_unitario, estoque_minimo)
                VALUES 
                (:nome, :categoria, :descricao, :quantidade, :valor_unitario, :estoque_minimo)";

            $stmt = $pdo->prepare($sql); 
            // Preparo o comando para evitar SQL injection (coisas perigosas)

            // Aqui eu envio os valores que peguei do formulário
            $stmt->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $stmt->bindParam(':categoria', $dados['categoria'], PDO::PARAM_STR);
            $stmt->bindParam(':descricao', $dados['descricao'], PDO::PARAM_STR);
            $stmt->bindParam(':quantidade', $dados['quantidade'], PDO::PARAM_STR);
            $stmt->bindParam(':valor_unitario', $dados['valor_unitario'], PDO::PARAM_STR);
            $stmt->bindParam(':estoque_minimo', $dados['estoque_minimo'], PDO::PARAM_STR);

            $stmt->execute(); 
            // Aqui é onde realmente manda pro banco

            return (int) $pdo->lastInsertId();
            // Aqui pego o ID do produto que acabei de cadastrar

        } catch (PDOException $e) {
            echo "Erro ao inserir produto: " . $e->getMessage();
            return false; // Se deu ruim, digo que não salvou
        }
    }

    // Função para EXCLUIR um produto do banco
    public static function excluir($id)
    {
        try {
            $db = Database::conectar(); // Conecta no banco
            $stmt = $db->prepare("DELETE FROM produtos WHERE id_produto = :id");
            // Apaga o produto com o ID que eu mandar

            return $stmt->execute([':id' => $id]);
            // Executa e retorna se deu certo

        } catch (PDOException $e) {
            throw new PDOException("Erro ao excluir produto: " . $e->getMessage());
            // Se der erro, mostra o motivo
        }
    }
}
