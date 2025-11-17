<!-- home.php -->
<!-- Página inicial do Bora Beber -->
<div class="container py-5 text-center">
  <h1 class="fw-bold text-warning mb-4"><?= $title ?? 'Bem-vindo!' ?></h1>
  <p class="fs-5 mb-5"><?= $lenda ?? 'Sou uma lenda do PHP!' ?></p>

  <!-- Card principal -->
  <div class="card mx-auto shadow bg-light text-dark" style="max-width: 800px;">
    <div class="card-body">
      <h3 class="fw-bold text-dark mb-3">🍺 Sistema Bora Beber</h3>
      <p class="mb-4">
        Bem-vindo ao sistema de gerenciamento <strong>Bora Beber</strong>!<br>
        Utilize os botões abaixo para navegar pelas seções do sistema.
      </p>

      <!-- Botões principais de navegação -->
      <div class="d-flex flex-wrap justify-content-center gap-2">
        <a href="/" class="btn btn-dark px-4">Início</a>
        <a href="/sobre" class="btn btn-outline-dark px-4">Quem Somos</a>
        <a href="/usuarios" class="btn btn-outline-dark px-4">Lista de Usuários</a>
        <a href="/usuarios/inserir" class="btn btn-outline-dark px-4">Cadastrar Usuário</a>

        <!-- Produtos = abre cadastro_produto.php pela rota /cadastro -->
        <a href="/cadastro" class="btn btn-outline-dark px-4">Produtos</a>

        <!-- Login (a rota ainda não existe, então deixei como # por enquanto) -->
        <a href="#" class="btn btn-outline-dark px-4">Login</a>
      </div>
    </div>
  </div>
</div>



