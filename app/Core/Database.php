<?php

namespace App\Core;
// Só dizendo onde esse arquivo está dentro do meu projeto.

use PDO;
use PDOException;
// Traz as ferramentas para conectar no banco de dados.

class Database {
    public static function conectar() {
        // Aqui eu coloco os dados do meu banco de dados
        $host = '127.0.0.1'; // endereço do banco (meu computador mesmo)
        $porta = '3306'; // a “porta” que o MySQL usa
        $banco = 'bora_beber'; // nome do meu banco
        $usuario = 'root'; // usuário do MySQL
        $senha = ''; // sem senha mesmo

        // Aqui eu junto tudo pra conectar
        $dsn = "mysql:host=$host;port=$porta;dbname=$banco;charset=utf8";
        // isso aqui serve pra não dar bug com acentos e caracteres

        try {
            // Aqui eu realmente faço a conexão com o banco
            return new PDO($dsn, $usuario, $senha, [
                // Se der algum erro, ele me mostra certinho
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                // Quando buscar os dados, traz do jeito mais simples possível (nome das colunas)
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (PDOException $e) {
            // Se der erro na conexão, ele vem parar aqui
            die("Erro na conexão: " . $e->getMessage());
            // e mostra o erro pra eu saber o que arrumar
        }
    }
}
