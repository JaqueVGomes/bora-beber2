<div class="container my-5">

  <h1 class="text-center text-warning fw-bold mb-2">
    Cadastro de Produtos
  </h1>
  <p class="text-center mb-4">
    Preencha as informações do produto para adicionar ao sistema 🍺
  </p>

  <div class="card mx-auto shadow bg-light text-dark" style="max-width: 900px;">
    <div class="card-body">

      <form action="produtos/salvar" method="POST">
        <div class="row g-3">

          <!-- Nome do produto -->
          <div class="col-md-8">
            <label class="form-label fw-semibold">Nome do Produto *</label>
            <input type="text" name="nome" class="form-control" placeholder="Ex: Cerveja Heineken">
          </div>

          <!-- Categoria -->
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

          <!-- Descrição -->
          <div class="col-12">
            <label class="form-label fw-semibold">Descrição *</label>
            <textarea name="descricao" rows="3" class="form-control" placeholder="Informe detalhes do produto..."></textarea>
          </div>

          <!-- Quantidade -->
          <div class="col-md-4">
            <label class="form-label fw-semibold">Quantidade *</label>
            <input type="number" name="quantidade" class="form-control" placeholder="Ex: 50">
          </div>

          <!-- Valor unitário -->
          <div class="col-md-4">
            <label class="form-label fw-semibold">Valor Unitário (R$) *</label>
            <input type="text" name="valor_unitario" class="form-control" placeholder="Ex: 9,99">
          </div>

          <!-- Estoque mínimo -->
          <div class="col-md-4">
            <label class="form-label fw-semibold">Estoque Mínimo</label>
            <input type="number" name="estoque_minimo" class="form-control" placeholder="Ex: 10">
          </div>
        </div>

        <!-- Botões -->
        <div class="d-flex justify-content-between mt-4">
          <a href="/" class="btn btn-secondary">Voltar</a>
          <div>
            <button type="reset" class="btn btn-outline-secondary me-2">Limpar</button>
            <button type="submit" class="btn btn-warning fw-semibold">Cadastrar</button>
          </div>
        </div>

      </form>

    </div>
  </div>

</div>
