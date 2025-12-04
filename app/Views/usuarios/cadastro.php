<div class="container my-5">

  <!-- Conteúdo principal -->
  <!-- Tela para cadastro de novos usuários no sistema -->
  <main class="container py-5">
    <div class="text-center mb-4">
      <h1 class="fw-bold text-warning">Cadastro de Usuário</h1>
      <!-- Explicação simples do que deve ser feito -->
      <p class="text-light">Preencha os campos abaixo para se cadastrar no Bora Beber</p>
    </div>

    <!-- Formulário que envia os dados ao servidor -->
    <!-- /usuarios/salvar é a rota que vai carregar o Controller -->
    <form action="/usuarios/salvar" method="POST">

    <!-- Card que centraliza o formulário -->
    <div class="card mx-auto shadow" style="max-width: 880px;">
      <div class="card-body bg-light text-dark">

        <!-- Form permitindo validação de campos obrigatórios -->
        <form class="needs-validation" novalidate>

          <!-- Começo dos campos do formulário -->
          <div class="row g-3">

            <!-- Nome -->
            <!-- Identifica o usuário pelo nome completo -->
            <div class="col-md-6">
              <label class="form-label fw-semibold" for="nome">Nome Completo *</label>
              <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo" autocomplete="name" required>
              <div class="invalid-feedback">Informe seu nome.</div>
            </div>

            <!-- E-mail -->
            <!-- Contato e login no futuro -->
            <div class="col-md-6">
              <label class="form-label fw-semibold" for="email">E-mail *</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com" autocomplete="email" required>
              <div class="invalid-feedback">Informe um e-mail válido.</div>
            </div>

            <!-- CPF -->
            <!-- Identificação única e validação padrão -->
            <div class="col-md-4">
              <label class="form-label fw-semibold" for="cpf">CPF *</label>
              <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00"
                     inputmode="numeric"
                     pattern="^\d{3}\.?\d{3}\.?\d{3}-?\d{2}$"
                     required>
              <div class="form-text">Apenas números ou no formato 000.000.000-00.</div>
              <div class="invalid-feedback">Informe um CPF válido.</div>
            </div>

            <!-- Celular -->
            <!-- Para contato do cliente/funcionário -->
            <div class="col-md-4">
              <label class="form-label fw-semibold" for="celular">Celular *</label>
              <input type="tel" class="form-control" id="celular" name="celular" placeholder="(00) 00000-0000"
                     inputmode="tel"
                     pattern="^\(?\d{2}\)?\s?\d{4,5}-?\d{4}$"
                     required>
              <div class="invalid-feedback">Informe um celular válido.</div>
            </div>

            <!-- Data de Nascimento -->
            <!-- Usado para controle e estatísticas -->
            <div class="col-md-4">
              <label class="form-label fw-semibold" for="data_nascimento">Data de Nascimento *</label>
              <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
              <div class="invalid-feedback">Informe a data de nascimento.</div>
            </div>

            <!-- Gênero -->
            <div class="col-md-6">
              <label class="form-label fw-semibold" for="genero">Gênero *</label>
              <select class="form-select" id="genero" name="genero" required>
                <option selected disabled value="">Selecione...</option>
                <option value="Feminino">Feminino</option>
                <option value="Masculino">Masculino</option>
                <option value="Outro">Outro</option>
                <option value="Prefiro não informar">Prefiro não informar</option>
              </select>
              <div class="invalid-feedback">Selecione uma opção.</div>
            </div>

            <!-- Tipo de Usuário -->
            <!-- Define permissões no sistema -->
            <div class="col-md-6">
              <label class="form-label fw-semibold" for="nivel_acesso">Nivel de Acesso *</label>
              <select class="form-select" id="nivel_acesso" name="nivel_acesso" required>
                <option selected disabled value="">Selecione...</option>
                <option value="Admin">Administrador</option>
                <option value="Funcionario">Funcionário</option>
                <option value="Cliente">Cliente</option>
              </select>
              <div class="invalid-feedback">Selecione o tipo de usuário.</div>
            </div>

            <!-- CEP -->
            <!-- Ajuda a localizar rapidamente cidade/estado -->
            <div class="col-md-4">
              <label class="form-label fw-semibold" for="cep">CEP *</label>
              <input type="text" class="form-control" id="cep" name="cep" placeholder="00000-000"
                     inputmode="numeric"
                     pattern="^\d{5}-?\d{3}$"
                     autocomplete="postal-code"
                     required>
              <div class="invalid-feedback">Informe um CEP válido.</div>
            </div>

            <!-- Endereço -->
            <div class="col-md-6">
              <label class="form-label fw-semibold" for="endereco">Endereço *</label>
              <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua, avenida..."
                     autocomplete="address-line1" required>
              <div class="invalid-feedback">Informe o endereço.</div>
            </div>

            <!-- Número da residência -->
            <div class="col-md-2">
              <label class="form-label fw-semibold" for="numero">Número *</label>
              <input type="text" class="form-control" id="numero" name="numero"
                     placeholder="Nº" autocomplete="address-line2" required>
              <div class="invalid-feedback">Informe o número.</div>
            </div>

            <!-- Complemento -->
            <!-- Opcional -->
            <div class="col-md-4">
              <label class="form-label fw-semibold" for="complemento">Complemento</label>
              <input type="text" class="form-control" id="complemento" name="complemento"
                     placeholder="Apartamento, bloco...">
            </div>

            <!-- Cidade -->
            <div class="col-md-4">
              <label class="form-label fw-semibold" for="cidade">Cidade *</label>
              <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite a cidade"
                     autocomplete="address-level2" required>
              <div class="invalid-feedback">Informe a cidade.</div>
            </div>

            <!-- Estado -->
            <!-- Todos os 27 estados brasileiros -->
            <div class="col-md-4">
              <label class="form-label fw-semibold" for="estado">Estado *</label>
              <select class="form-select" id="estado" name="estado" autocomplete="address-level1" required>
                <option selected disabled value="">Selecione...</option>
                <option>AC</option><option>AL</option><option>AP</option><option>AM</option>
                <option>BA</option><option>CE</option><option>DF</option><option>ES</option>
                <option>GO</option><option>MA</option><option>MT</option><option>MS</option>
                <option>MG</option><option>PA</option><option>PB</option><option>PR</option>
                <option>PE</option><option>PI</option><option>RJ</option><option>RN</option>
                <option>RS</option><option>RO</option><option>RR</option><option>SC</option>
                <option>SP</option><option>SE</option><option>TO</option>
              </select>
              <div class="invalid-feedback">Selecione o estado.</div>
            </div>

            <!-- Senha -->
            <!-- Será criptografada ao salvar -->
            <div class="col-md-6">
              <label class="form-label fw-semibold" for="senha">Senha *</label>
              <input type="password" class="form-control" id="senha" name="senha"
                     minlength="6" autocomplete="new-password" required>
              <div class="form-text">Mínimo de 6 caracteres.</div>
              <div class="invalid-feedback">Informe uma senha (mín. 6).</div>
            </div>

            <!-- Confirmar Senha -->
            <!-- Usado para evitar digitação errada -->
            <div class="col-md-6">
              <label class="form-label fw-semibold" for="confirma_senha">Confirmar Senha *</label>
              <input type="password" class="form-control" id="confirma_senha" name="confirma_senha"
                     minlength="6" autocomplete="new-password" required>
              <div class="invalid-feedback">Repita a senha.</div>
            </div>
          </div>

          <!-- Botões de ação -->
          <div class="text-center mt-4">

            <!-- Botão Voltar: retorna sem salvar -->
            <a href="index.html" class="btn btn-outline-dark me-2 px-4">Voltar</a>

            <!-- Botão Limpar: apaga tudo digitado -->
            <button type="reset" class="btn btn-secondary me-2 px-4">Limpar</button>

            <!-- Botão Cadastrar: envia dados para o servidor -->
            <button type="submit" class="btn btn-warning text-dark fw-semibold px-4">Cadastrar</button>
          </div>

        </form>
      </div>
    </div>
  </main>

  <!-- JS do Bootstrap para menu responsivo -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
