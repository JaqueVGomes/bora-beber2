<?php

// lembrar de tirar é para saber onde esta o erro
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Autoload do Composer
require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\UsuarioController;

// Função para renderizar as telas COM layout
function render($view, $data = [])
{
    extract($data);
    ob_start();

    // View específica
    require __DIR__ . '/../app/Views/' . $view;
    $content = ob_get_clean();

    // Layout base
    require __DIR__ . '/../app/Views/layouts/base.php';
}

// Função para renderizar SEM layout (se precisar)
function render_sem_template($view, $data = [])
{
    extract($data);
    require __DIR__ . '/../app/Views/' . $view;
}

// URL atual
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Instância do controller de usuário
$controller = new UsuarioController();

// ----------------- ROTAS -----------------

// HOME
if ($url === '/' || $url === '/index' || $url === '/index.php') {

    render('home.php');

    // SOBRE / QUEM SOMOS
} elseif ($url === '/sobre') {

    render('sobre.php');

    // LISTA DE USUÁRIOS
} elseif ($url === '/lista-usuario' || $url === '/usuario') {

    $controller->listar();

    // CADASTRO DE USUÁRIO
} elseif ($url === '/cadastro-usuario' || $url === '/usuario/inserir') {

    render('usuarios/cadastro.php');

    // CADASTRO DE PRODUTOS
} elseif ($url === '/cadastro-produto' || $url === '/produto/inserir') {

    render('cadastro/cadastro_produto.php');

    // LOGIN
} elseif ($url === '/login') {

    render('usuarios/login.php');

    // 404
} else {

    http_response_code(404);
    echo "<h1 style='color:white; text-align:center; margin-top:40px;'>Página não encontrada (404)</h1>";
}
