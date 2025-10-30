<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bora Beber</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">
</head>
  <body>
    <!-- topo fininho com horario, tel e end -->
    <div class="topbar">
    <div class="container topbar-wrap">
      <span>Seg a Sáb das 11h às 03h</span>
      <span> (14) 99682-7351</span>
      <span> Rua Treze de Maio, 415 — Jaú/SP</span>
    </div>
  </div>

  <!-- navegação: marca + links -->
  <nav class="navbar">
    <div class="container navbar-wrap">
      <div class="brand">
      <strong>BORA BEBER</strong>
      </div>
      <div class="menu">
        <a href="#sobre">Sobre</a>
        <a href="#produtos">Produtos</a>
        <a href="#caracteristicas">Serviços</a>
        <a href="#contato">Contato</a>
      </div>
    </div>
  </nav>

  <!-- título principal (banner) -->
  <section class="hero-title">
    <div class="container">
      <h1>Bora Beber: bebidas geladas, boas e entregues rapidinho</h1>
       <p class="hero-sub">Pediu, chegou! Entregamos em Jaú e região.</p>
    </div>
  </section>

  <!-- sobre: texto + imagem -->
<section id="sobre" class="sobre">
  <div class="container sobre-grid">
    <div class="sobre-texto">
      <h2>Sobre</h2>
      <p>O <strong>Bora Beber</strong> é uma loja de bebida, aqui de Jaú. 
        Você pode pedir cervejas, vinhos e destilados de um jeito fácil e rápido.</p>
      <p>É simples: basta você escolher sua bebida favorita,fazer o pedido, que logo você recebe na casa.</p>
    </div>

    <!-- imagem -->
    <div class="sobre-imgs">
      <img class="img-banner" src="https://dcomercio.com.br/public/upload/antigas/dc-negocios-diageo.png" alt="Bebidas variadas do Bora Beber">
    </div>
  </div>
</section>


  <!-- produtos -->
  <section id="produtos" class="sec-produtos">
    <div class="container">
      <h2>Produtos</h2>

      <div class="cards">
        <article class="card">
          <img src="https://m.media-amazon.com/images/I/415qKKdBKBL._AC_SX679_.jpg" alt="Cerveja IPA 600ml">
          <h3>Cerveja IPA 600ml</h3>
          <div class="preco"><small>R$</small><span class="preco-num">19,90</span></div>
          <p class="detalhes">Aromática, encorpada e amarga na medida.</p>
          <a class="btn simples" href="#">COMPRAR</a>
        </article>

        <article class="card">
          <img src="https://m.media-amazon.com/images/I/71a45X-be-L._AC_SX466_.jpg" alt="Cerveja Pilsen 350ml">
          <h3>Cerveja Pilsen 350ml</h3>
          <div class="preco"><small>R$</small><span class="preco-num">6,90</span></div>
          <p class="detalhes">Clássica, leve e refrescante.</p>
          <a class="btn simples" href="#">COMPRAR</a>
        </article>

        <article class="card">
          <img src="https://m.media-amazon.com/images/I/41idwlXC+6L._AC_SX385_.jpg" alt="Vinho Tinto Reserva 750ml">
          <h3>Vinho Tinto Reserva 750ml</h3>
          <div class="preco"><small>R$</small><span class="preco-num">59,90</span></div>
          <p class="detalhes">Perfeito pra noite tranquila ou jantar especial.</p>
          <a class="btn simples" href="#">COMPRAR</a>
        </article>

        <article class="card">
          <img src="https://m.media-amazon.com/images/I/71a8-9BtUVL._AC_SX466_.jpg" alt="Campari 1L">
          <h3>Campari 1L</h3>
          <div class="preco"><small>R$</small><span class="preco-num">79,90</span></div>
          <p class="detalhes">O clássico dos drinks.</p>
          <a class="btn simples" href="#">COMPRAR</a>
        </article>
      </div>
    </div>
  </section>

  <!-- serviços -->
  <section id="caracteristicas" class="sec-caracteristicas">
    <div class="container car-grid">

      <div class="car-item">
        <h4>Entrega em Jaú e região</h4>
        <p>Chega em até 30 minutos em qualquer bairro de Jaú.</p>
      </div>

      <div class="car-item">
        <h4>Pagamento fácil</h4>
        <p>Pix e cartão.</p>
      </div>

      <div class="car-item">
        <h4>Catálogo sempre novo</h4>
        <p>As novidades da semana você pode aproveitar direto aqui.</p>
      </div>

      <div class="car-item">
        <h4>Atendimento rápido</h4>
        <p>Fala com a gente pelo WhatsApp todos os dias.</p>
      </div>

      <div class="car-item">
        <h4>Atendimento no Whats</h4>
        <p>Fale com a gente pelo WhatsApp todos os dias.</p>
      </div>

      <div class="car-item">
        <h4>Ofertas do fim de semana</h4>
          <p>Combos especiais e descontos toda sexta e sábado!</p>
        </div>

    </div>
  </section>

  <!-- cadastro de e-mail  -->
<!-- cadastro de e-mail -->
<section id="contato" class="newsletter">
  <div class="container">
    <p class="texto-news">Quer receber as promoções primeiro? </p> <!-- Frase só p o botão não ficar solto sem nada-->
    <form class="form-news">
      <input type="email" placeholder="seu e-mail">
      <button type="submit">Enviar</button>
    </form>
  </div>
</section>

  <!-- rodapé  -->
  <footer class="rodape">
    <div class="container">
      2025 Bora Beber — Versão surtei mas saiu
    </div>
  </footer>

</body>
</html>