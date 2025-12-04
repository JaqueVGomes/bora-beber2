<?php
session_start(); //Inicia a sessão

// lembrar de tirar é para saber onde esta o erro
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Autoload do Composer
require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\UsuarioController;
use App\Controllers\ProdutoController;

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

$controllerp = new ProdutoController();

// ----------------- ROTAS -----------------

// HOME
if ($url == '/' || $url == '/index' || $url == '/index.php') {

    render('home.php');

    // SOBRE / QUEM SOMOS
} else if ($url == '/sobre') {

    render('sobre.php');

    // LISTA DE USUÁRIOS
} else if ($url == '/lista-usuario' || $url == '/usuarios') {

    $controller->listar();

    // CADASTRO DE USUÁRIO
} else if ($url == '/cadastro-usuario' || $url == '/usuarios/inserir') {

    render('usuarios/cadastro.php');
   
}
//verifica alem da rota o tipo de pedido
else if ($url == "/usuarios/salvar" && $_SERVER ['REQUEST_METHOD'] == 'POST' ){
    $controller = new UsuarioController();
    $controller->salvar(); 
}
// EXCLUIR USUARIOS
else if (preg_match('#^/usuarios/excluir/(\d+)$#', $url, $matches)) {
    $id = (int)$matches[1];
    $controller->excluir($id);

}

// CADASTRO DE PRODUTOS
else if ($url == '/cadastro-produto' || $url == '/produtos/inserir') {

    render('produtos/cadastro_produto.php');
}
// LISTA DE PRODUTOS
else if ($url == '/lista-produtos' || $url == '/produtos') {

    $controllerp->listar();
}
//verifica alem da rota o tipo de pedido
else if ($url == "/produtos/salvar" && $_SERVER ['REQUEST_METHOD'] == 'POST' ){
    $controllerp = new ProdutoController();
    $controllerp->salvar(); 

}
// EXCLUIR PRODUTOS
else if (preg_match('#^/produtos/excluir/(\d+)$#', $url, $matches)) {
    $id = (int)$matches[1];
    $controllerp->excluir($id);
}

    // LOGIN
else if ($url == '/login') {

    render('usuarios/login.php');

    // 404
} else {

    http_response_code(404);
    echo "<h1 style='color:white; text-align:center; margin-top:40px;'>Página não encontrada (404)</h1>";
}

