<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Controllers\UsuarioController;

function render($view, $data = []) {
  extract($data);
  ob_start();
  require __DIR__ . '/../app/Views/' . $view;
  $content = ob_get_clean();
  require __DIR__ . '/../app/Views/layouts/base.php';
}

function render_sem_template($view, $data = []) {
  extract($data);
  ob_start();
  require __DIR__ . '/../app/Views/' . $view;
  $content = ob_get_clean();
  echo ob_get_clean(); // <- sem isso fica branca
}

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
  // Cria uma instância do Controller e chama a função de listar
  $controller = new UsuarioController();
  $controller ->listar();

}
else if($url == "/usuarios/inserir") {
   render('usuarios/cadastro.php', ['title' => 'Cadastrar Usuarios' ]);
}
//PRODUTOS
else if($url == "/cadastro") {
   render('cadastro/cadastro_produtos.php', ['title' => 'Cadastro de produtos' ]);
}
