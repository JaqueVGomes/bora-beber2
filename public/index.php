<?php
require __DIR__ . '/../vendor/autoload.php';

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
  echo ob_get_clean(); // <- sem isso fica branca
}

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ($url !== '/' && substr($url, -1) === '/') $url = rtrim($url, '/');

// HOME (usa layout)
if ($url === '/' || $url === '/index.php') {
  render('home.php', ['title' => 'Bem-vindo!', 'lenda' => 'Sou uma lenda do php!']);

// SOBRE (se já tiver app/Views/sobre.php)
} else if ($url === '/sobre') {
  render('sobre.php', ['title' => 'Sobre a página!']);

// USUÁRIOS (hoje estão em HTML dentro de util/base-html)
} else if ($url === '/usuarios') {
  require __DIR__ . '/../util/base-html/listagem_usua.html';

} else if ($url === '/usuarios/inserir') {
  require __DIR__ . '/../util/base-html/cadastro.html';

// PRODUTOS (HTML estático)
} else if ($url === '/produtos') {
  require __DIR__ . '/../util/base-html/listagem_produtos.html';

} else if ($url === '/produtos/novo') {
  require __DIR__ . '/../util/base-html/cadastro_produto.html';

// ROTA ANTIGA /cadastro (compatibilidade)
} else if ($url === '/cadastro') {
  require __DIR__ . '/../util/base-html/cadastro_produto.html';

// LOGIN (HTML estático)
} else if ($url === '/login') {
  require __DIR__ . '/../util/base-html/login.html';

// Aliases para quem acessar .html direto (opcional)
} else if ($url === '/listagem_usua.html') {
  require __DIR__ . '/../util/base-html/listagem_usua.html';

} else if ($url === '/listagem_produtos.html') {
  require __DIR__ . '/../util/base-html/listagem_produtos.html';

} else if ($url === '/cadastro_produto.html') {
  require __DIR__ . '/../util/base-html/cadastro_produto.html';

} else if ($url === '/login.html') {
  require __DIR__ . '/../util/base-html/login.html';

} else {
  http_response_code(404);
  echo "⚠️ Página não encontrada: <code>{$url}</code>";
}
