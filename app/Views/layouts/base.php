<?php
// Descobre se a rota atual é a home
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$isHome = ($path === '/' || $path === '/index.php');
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bora Beber</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">

  <!-- Faixa fininha de informações (amarelo) -->
  <div class="py-1 text-center text-dark" style="background-color:#FFD700;">
    <small>⏰ Seg a Sáb 11h–03h · 📞 (14) 99682-7351 · 📍 Rua Treze de Maio, 415 — Jaú/SP</small>
  </div>

  <!-- Navbar preta com título à esquerda e itens à direita -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

      <!-- LOGO: agora vai para a rota / (home) -->
      <a class="navbar-brand fw-bold text-warning" href="/">
        <i class="bi bi-cup-straw"></i> Bora Beber
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div id="nav" class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">

          <!-- Início -->
          <li class="nav-item">
            <a class="nav-link<?= $isHome ? ' active' : '' ?>" href="/">Início</a>
          </li>

          <!-- Quem Somos -->
          <li class="nav-item">
            <a class="nav-link" href="/sobre">Quem Somos</a>
          </li>

          <!-- Lista de Usuários -->
          <li class="nav-item">
            <a class="nav-link" href="/usuarios">Lista de Usuários</a>
          </li>

          <!-- Cadastro de Produtos -->
          <li class="nav-item">
            <a class="nav-link" href="/cadastro">Cadastro de Produtos</a>
          </li>

          <!-- Cadastro de Usuário -->
          <li class="nav-item">
            <a class="nav-link" href="/usuarios/inserir">Cadastro</a>
          </li>

          <!-- Login (por enquanto ainda sem rota PHP, então deixa só #) -->
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Imagem principal: SÓ na página inicial -->
  <?php if ($isHome): ?>
    <main>
      <img
        src="https://s2.glbimg.com/0er2CDw17Ig3k_gAhDj9IcyNFVuGj6BBeLN-wEOosa7Lum41QEB1sKzNF4nkNXpm/e.glbimg.com/og/ed/f/original/2013/10/08/159203890.jpg"
        class="img-fluid w-100"
        alt="Bebidas e bar"
      >
    </main>
  <?php endif; ?>

  <!-- Aqui entra o conteúdo de cada página (views) -->
  <div>
    <?= $content ?>
  </div>

  <!-- Rodapé amarelo configurado -->
  <footer class="text-center py-3 mt-0" style="background-color:#FFD700;">
    <small class="text-dark fw-semibold">
      Desenvolvido por Jaque Gomes e Emerson Galdino — Bora Beber &copy; 2025
    </small>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
