<?php
// Descobre se a rota atual é a home
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$isHome = ($path === '/' || $path === '/index.php');
// Essa variável ajuda a identificar quando mostrar a imagem inicial
?>
<!doctype html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bora Beber</title>

  <!-- Bootstrap -->
  <!-- Estilos padrão prontos do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <!-- ESTILO PARA A TELA DE LOGIN -->
  <style>
    .login-container {
      background-color: #fff;
      color: #000;
      max-width: 400px;
      margin: 80px auto;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* dá um efeito de destaque */
    }

    .login-title {
      font-size: 2rem;
      font-weight: bold;
      text-align: center;
      margin-bottom: 20px;
    }

    .btn-custom {
      background-color: #FFD700; /* mesma cor do tema */
      color: #000;
      font-weight: bold;
    }

    .btn-custom:hover {
      background-color: #e6c200; /* efeito ao passar o mouse */
    }
  </style>
</head>

<body class="bg-dark text-light">
  <!-- Todo o fundo do site fica escuro, com textos claros -->

  <!-- Faixa superior de horário/contato -->
  <!-- Mostra informações rápidas sobre o bar -->
  <div class="py-1 text-center text-dark" style="background-color:#FFD700;">
    <small>⏰ Seg a Sáb 11h–03h · 📞 (14) 99682-7351 · 📍 Rua Treze de Maio, 415 — Jaú/SP</small>
  </div>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

      <!-- LOGO - volta para página inicial -->
      <a class="navbar-brand fw-bold text-warning" href="/">
        <i class="bi bi-cup-straw"></i> Bora Beber
      </a>

      <!-- Botão que aparece no celular para mostrar o menu -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu de navegação -->
      <div id="nav" class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">

          <!-- Início -->
          <!-- Abre a página inicial com imagem do bar -->
          <li class="nav-item">
            <a class="nav-link<?= $isHome ? ' active' : '' ?>" href="/">Início</a>
          </li>

          <!-- Quem Somos -->
          <!-- Mostra informações sobre o estabelecimento -->
          <li class="nav-item">
            <a class="nav-link" href="/sobre">Quem Somos</a>
          </li>

          <!-- Lista de Usuários -->
          <!-- Lista todos os usuários cadastrados no sistema -->
          <li class="nav-item">
            <a class="nav-link" href="/lista-usuario">Lista de Usuários</a>
          </li>

          <!-- Lista de Produtos -->
          <!-- Lista todos os produtos cadastrados (bebidas e itens do bar) -->
          <li class="nav-item">
            <a class="nav-link" href="/lista-produtos">Lista de Produtos</a>
          </li>

          <!-- Cadastro de Produtos -->
          <!-- Tela para adicionar novos produtos ao estoque do bar -->
          <li class="nav-item">
            <a class="nav-link" href="/cadastro-produto">Cadastro de Produtos</a>
          </li>

          <!-- Cadastro de Usuário -->
          <!-- Formulário para cadastrar funcionários ou clientes -->
          <li class="nav-item">
            <a class="nav-link" href="/cadastro-usuario">Cadastro</a>
          </li>

          <!-- Login -->
          <!-- Tela de autenticação, ainda será utilizada futuramente -->
          <li class="nav-item">
            <a class="nav-link" href="/login">Login</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Imagem somente na home -->
  <!-- Essa imagem dá cara de “site do bar” ao entrar pela primeira vez -->
  <?php if ($isHome): ?>
    <main>
      <img
        src="https://st.depositphotos.com/1588534/2956/i/450/depositphotos_29565353-stock-photo-bottles-and-glasses-of-alcohol.jpg"
        class="img-fluid w-100"
        alt="Bebidas e bar">
    </main>
  <?php endif; ?>

  <!-- CONTEÚDO DAS VIEWS -->
  <!-- Aqui aparece o conteúdo de cada página carregada -->
  <div class="container my-4">
    <?= $content ?>
  </div>

  <!-- Rodapé -->
  <!-- Mostra os créditos dos desenvolvedores -->
  <footer class="text-center py-3 mt-0" style="background-color:#FFD700;">
    <small class="text-dark fw-semibold">
      Desenvolvido por Jaque Gomes e Emerson Galdino — Bora Beber &copy; 2025
    </small>
  </footer>

  <!-- Script do Bootstrap para funcionamento dos componentes -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
