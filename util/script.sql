CREATE DATABASE bora_beber
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE bora_beber

CREATE TABLE usuarios (
    id_usuario BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, -- identificador único
    nome VARCHAR(255) NOT NULL, -- nome completo do usuário
    cpf VARCHAR(14), -- CPF no formato 000.000.000-00
    data_nascimento DATE, -- data no formato yyyy-mm-dd
    celular VARCHAR(20), -- celular com DDD
    rua VARCHAR(255), -- nome da rua
    numero VARCHAR(10), -- número da residência
    complemento VARCHAR(50), -- complemento (ex: apto)
    bairro VARCHAR(255), -- bairro
    cidade VARCHAR(255), -- cidade
    cep VARCHAR(10), -- CEP
    estado CHAR(2), -- estado (ex: SP, RJ)
    genero CHAR(1), -- masculino, feminino
    email VARCHAR(255) NOT NULL, -- e-mail válido
    nivel_acesso ENUM('Administrador', 'Funcionário', 'Cliente') NOT NULL, -- tipo de usuário
    senha VARCHAR(255) NOT NULL, -- senha criptografada
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- data de criação
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- data de alteração
    deleted_at TIMESTAMP NULL DEFAULT NULL -- marcação de exclusão lógica
);

CREATE TABLE produtos (
    id_produto BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, --identificador único
    nome VARCHAR(255) NOT NULL, -- nome completo do produto
    categoria ENUM('Cerveja', 'Refrigerante', 'Destilado', 'Vinho', 'Outros') NOT NULL, -- tipo de bebida
    descricao VARCHAR(255), -- breve descritivo do produto
    quantidade INT UNSIGNED NOT NULL, -- quantida inserida
    valor_unitario DECIMAL(10,2) NOT NULL, -- valor do produto
    estoque_minimo INT UNSIGNED NOT NULL, -- estoque do produto inicial
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- data de criação
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, -- data de alteração
    deleted_at TIMESTAMP NULL DEFAULT NULL -- marcação de exclusão lógica
);