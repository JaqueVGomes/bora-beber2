<?php
session_start(); //Inicia a sessão

// lembrar de tirar é para saber onde esta o erro
// Configura o PHP para exibir todos os erros na tela (útil para desenvolvimento)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Autoload do Composer
// Carrega automaticamente as classes da pasta /app conforme o namespace
require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\UsuarioController;
use App\Controllers\ProdutoController;

// Função para renderizar as telas COM layout
function render($view, $data = [])
{
    // Torna as chaves do array $data acessíveis como variáveis na view
    extract($data);
    ob_start();

    // View específica (apenas o conteúdo da página)
    require __DIR__ . '/../app/Views/' . $view;
    $content = ob_get_clean();

    // Layout base (usa a variável $content dentro do template principal)
    require __DIR__ . '/../app/Views/layouts/base.php';
}

// Função para renderizar SEM layout (se precisar)
// Útil para páginas que não usam o template padrão
function render_sem_template($view, $data = [])
{
    extract($data);
    require __DIR__ . '/../app/Views/' . $view;
}

// URL atual
// Pega apenas o caminho da URL (sem parâmetros depois de ?)
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Instância do controller de usuário
$controller = new UsuarioController();

// Instância do controller de produto
$controllerp = new ProdutoController();

// ----------------- ROTAS -----------------

// HOME
if ($url == '/' || $url == '/index' || $url == '/index.php') {

    // Renderiza a página inicial (home)
    render('home.php');

    // SOBRE / QUEM SOMOS
} else if ($url == '/sobre') {

    // Renderiza a página estática "Sobre"
    render('sobre.php');

    // LISTA DE USUÁRIOS
} else if ($url == '/lista-usuario' || $url == '/usuarios') {

    // Chama o método listar do UsuarioController
    // Esse método deve buscar os usuários no banco e mandar para a view
    $controller->listar();

    // CADASTRO DE USUÁRIO (formulário de cadastro)
} else if ($url == '/cadastro-usuario' || $url == '/usuarios/inserir') {

    // Mostra o formulário de cadastro de usuário
    render('usuarios/cadastro.php');
}

//verifica alem da rota o tipo de pedido
// Salvar usuário (requisição POST)
else if ($url == "/usuarios/salvar" && $_SERVER['REQUEST_METHOD'] == 'POST') {

    // Cria uma nova instância (poderia reutilizar a de cima, mas funciona assim também)
    $controller = new UsuarioController();

    // Chama o método salvar, que recebe os dados do formulário e grava no banco
    $controller->salvar();
}

// EXCLUIR USUARIOS
else if (preg_match('#^/usuarios/excluir/(\d+)$#', $url, $matches)) {

    // Pega o ID que veio na URL (ex.: /usuarios/excluir/3)
    $id = (int)$matches[1];

    // Chama o método excluir no controller com o ID do usuário
    $controller->excluir($id);
}

// CADASTRO DE PRODUTOS (formulário de cadastro)
else if ($url == '/cadastro-produto' || $url == '/produtos/inserir') {

    // Mostra o formulário de cadastro de produto
    render('produtos/cadastro_produto.php');
}

// LISTA DE PRODUTOS
else if ($url == '/lista-produtos' || $url == '/produtos') {

    // Chama o método listar do ProdutoController
    // Esse método deve buscar todos os produtos e mandar para a view de lista
    $controllerp->listar();
}

//verifica alem da rota o tipo de pedido
// Salvar produto (requisição POST)
else if ($url == "/produtos/salvar" && $_SERVER['REQUEST_METHOD'] == 'POST') {

    // Cria uma nova instância do controller de produto
    $controllerp = new ProdutoController();

    // Chama o método salvar, que grava o produto no banco
    $controllerp->salvar();
}

// EXCLUIR PRODUTOS
else if (preg_match('#^/produtos/excluir/(\d+)$#', $url, $matches)) {

    // ID vindo da URL (ex.: /produtos/excluir/5)
    $id = (int)$matches[1];

    // Chama o método excluir no ProdutoController
    $controllerp->excluir($id);
}

// LOGIN
else if ($url == '/login') {

    // Renderiza a tela de login utilizando o layout padrão
    render('usuarios/login.php');

    // 404
} else {

    // Se nenhuma rota for encontrada, responde com erro 404
    http_response_code(404);
    echo "<h1 style='color:white; text-align:center; margin-top:40px;'>Página não encontrada (404)</h1>";
}

