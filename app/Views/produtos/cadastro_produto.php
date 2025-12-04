<div class="container my-5">

  <!-- Título da página -->
  <!-- Indica que essa tela serve para cadastrar novos produtos -->
  <h1 class="text-center text-warning fw-bold mb-2">
    Cadastro de Produtos
  </h1>

  <!-- Subtítulo explicando ao usuário o objetivo do formulário -->
  <p class="text-center mb-4">
    Preencha as informações do produto para adicionar ao sistema 🍺
  </p>

  <!-- Card central onde está o formulário -->
  <!-- Card ajuda na organização visual, deixando o formulário no centro da tela -->
  <div class="card mx-auto shadow bg-light text-dark" style="max-width: 900px;">
    <div class="card-body">

      <!-- Formulário para enviar os dados ao servidor -->
      <!-- action = rota que será chamada ao salvar -->
      <!-- method = POST, pois estamos enviando dados para o banco -->
      <form action="produtos/salvar" method="POST">
        <div class="row g-3"> <!-- Organiza os campos em colunas -->

          <!-- Nome do produto (campo obrigatório) -->
          <!-- Aqui o usuário informa qual produto está cadastrando -->
          <div class="col-md-8">
            <label class="form-label fw-semibold">Nome do Produto *</label>
            <input type="text" name="nome" class="form-control" placeholder="Ex: Cerveja Heineken">
          </div>

          <!-- Categoria do produto -->
          <!-- Usado para classificar o produto dentro do sistema -->
          <div class="col-md-4">
            <label class="form-label fw-semibold">Categoria *</label>
            <select name="categoria" class="form-select">
              <option value="">Selecione...</option>
              <option value="cerveja">Cerveja</option>
              <option value="refrigerante">Refrigerante</option>
              <option value="destilado">Destilado</option>
              <option value="vinho">Vinho</option>
              <option value="outros">Outros</option>
            </select>
          </div>

          <!-- Descrição do produto -->
          <!-- Informações extras para diferenciar produtos similares -->
          <div class="col-12">
            <label class="form-label fw-semibold">Descrição *</label>
            <textarea name="descricao" rows="3" class="form-control" placeholder="Informe detalhes do produto..."></textarea>
          </div>

          <!-- Quantidade atual do produto no estoque -->
          <div class="col-md-4">
            <label class="form-label fw-semibold">Quantidade *</label>
            <input type="number" name="quantidade" class="form-control" placeholder="Ex: 50">
          </div>

          <!-- Valor unitário -->
          <!-- Preço de venda ou custo por unidade -->
          <div class="col-md-4">
            <label class="form-label fw-semibold">Valor Unitário (R$) *</label>
            <input type="text" name="valor_unitario" class="form-control" placeholder="Ex: 9,99">
          </div>

          <!-- Estoque mínimo sugerido -->
          <!-- Quando chegar nesse número, é hora de comprar mais -->
          <div class="col-md-4">
            <label class="form-label fw-semibold">Estoque Mínimo</label>
            <input type="number" name="estoque_minimo" class="form-control" placeholder="Ex: 10">
          </div>
        </div>

        <!-- Botões de ação -->
        <div class="d-flex justify-content-between mt-4">

          <!-- Botão "Voltar": retorna para a página inicial sem salvar -->
          <a href="/" class="btn btn-secondary">Voltar</a>

          <div>
            <!-- Botão "Limpar": apaga tudo que foi digitado no formulário -->
            <button type="reset" class="btn btn-outline-secondary me-2">Limpar</button>

            <!-- Botão "Cadastrar": envia os dados do formulário para o banco -->
            <button type="submit" class="btn btn-warning fw-semibold">Cadastrar</button>
          </div>

        </div>

      </form>

    </div>
  </div>

</div>
