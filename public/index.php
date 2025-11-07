<?php
// IMPORTA O AUTLOAD DO COMPOSER PARA CARREGAR AS ROTAS
require __DIR__ .'/../vendor/autoload.php';

function render($view, $data = []) {
    // Extrai os dados para a variavel
    extract($data);
    ob_start();
    //inclui a tela que enviamos específica 
    require __DIR__ . '/../app/Views/' . $view;
    $content = ob_get_clean();
    //inclui layout base, que usará a variavel $content
    require __DIR__ . '/../app/Views/layouts/base.php';
}

function render_sem_template($view, $data = []) {
    // Extrai os dados para a variavel
    extract($data);
    ob_start();
    //inclui a tela que enviamos específica 
    require __DIR__ . '/../app/Views/' . $view;
}


//OBTEM A URL DO NAVEGADOR
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Navegação geral
if ($url == "/" || $url == "/index.php"){
   render_sem_template('home.php' , [
    'title' => 'Bem-vindo!' ,
    'lenda' => 'Sou uma lenda do php!' 
]);
}else if($url == "/sobre") {
    render('sobre.php', ['title' => 'Sobre a página!' ]);
}
//USUARIOS
else if($url == "/usuarios") {
    render('usuarios/lista-usua.php', ['title' => 'Lista de usuarios' ]);
}
else if($url == "/usuarios/inserir") {
    render('usuarios/cadastro.php', ['title' => 'Cadastrar Usuarios' ]);
}
//PRODUTOS
else if($url == "/cadastro") {
    render('cadastro/cadastro_produtos.php', ['title' => 'Cadastro de produtos' ]);
}
?>
