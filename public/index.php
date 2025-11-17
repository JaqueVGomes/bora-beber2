<?php

// Importa o autoload do Composer para carregar as classes
require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\UsuarioController;

// Função para renderizar as telas com layout (COM TEMPLATE)
function render($view, $data = []) {
    extract($data);
    ob_start();

    // Inclui a tela específica (apenas o miolo da página)
    require __DIR__ . '/../app/Views/' . $view;
    $content = ob_get_clean();

    // Inclui o layout base, que usa a variável $content
    require __DIR__ . '/../app/Views/layouts/base.php';
}

// Função para renderizar as telas SEM layout (SEM TEMPLATE)
function render_sem_template($view, $data = []) {
    extract($data);

    // Inclui diretamente a tela específica, sem layout
    require __DIR__ . '/../app/Views/' . $view;
}

// Obtém a URL do navegador (apenas o caminho, sem query string)
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// ROTAS

// HOME (agora usando o LAYOUT base)
if ($url == "/" || $url == "/index.php") {

    render('home.php', [
        'title' => 'Bem-vindo!'
    ]);

// SOBRE
} else if ($url == "/sobre") {

    render('sobre.php', [
        'title' => 'Sobre a página!'
    ]);

// LISTAGEM DE USUÁRIOS
} else if ($url == "/usuarios") {

    // Cria uma instância do Controller e chama a função de listar
    $controller = new UsuarioController();
    $controller->listar();

// CADASTRO DE USUÁRIO
} else if ($url == "/usuarios/inserir") {

    render('usuarios/cadastro.php', [
        'title' => 'Cadastro de Usuários'
    ]);

// CADASTRO DE PRODUTOS (abre cadastro_produto.php)
} else if ($url == "/cadastro") {

    render('cadastro/cadastro_produto.php', [
        'title' => 'Cadastro de Produtos'
    ]);

// 404 - Página não encontrada
} else {

    echo "<h1>Página não encontrada (404)</h1>";
}


