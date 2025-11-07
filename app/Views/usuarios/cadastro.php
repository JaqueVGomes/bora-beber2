  <!-- Conteúdo principal -->
  <main class="container py-5">
    <div class="text-center mb-4">
      <h1 class="fw-bold text-warning">Cadastro de Usuário</h1>
      <p class="text-light">Preencha os campos abaixo para se cadastrar no Bora Beber</p>
    </div>

    <div class="card mx-auto shadow" style="max-width: 880px;">
      <div class="card-body bg-light text-dark">
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <!-- Nome -->
            <div class="col-md-6">
              <label class="form-label fw-semibold" for="nome">Nome Completo *</label>
              <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo" autocomplete="name" required>
              <div class="invalid-feedback">Informe seu nome.</div>
            </div>

            <!-- E-mail -->
            <div class="col-md-6">
              <label class="form-label fw-semibold" for="email">E-mail *</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com" autocomplete="email" required>
              <div class="invalid-feedback">Informe um e-mail válido.</div>
            </div>

            <!-- CPF -->
            <div class="col-md-4">
              <label class="form-label fw-semibold" for="cpf">CPF *</label>
              <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" inputmode="numeric" pattern="^\d{3}\.?\d{3}\.?\d{3}-?\d{2}$" required>
              <div class="form-text">Apenas números ou no formato 000.000.000-00.</div>
              <div class="invalid-feedback">Informe um CPF válido.</div>
            </div>

            <!-- Celular -->
            <div class="col-md-4">
              <label class="form-label fw-semibold" for="celular">Celular *</label>
              <input type="tel" class="form-control" id="celular" name="celular" placeholder="(00) 00000-0000" inputmode="tel" pattern="^\(?\d{2}\)?\s?\d{4,5}-?\d{4}$" required>
              <div class="invalid-feedback">Informe um celular válido.</div>
            </div>

            <!-- Data de Nascimento -->
            <div class="col-md-4">
              <label class="form-label fw-semibold" for="nascimento">Data de Nascimento *</label>
              <input type="date" class="form-control" id="nascimento" name="nascimento" required>
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
            <div class="col-md-6">
              <label class="form-label fw-semibold" for="tipo_usuario">Tipo de Usuário *</label>
              <select class="form-select" id="tipo_usuario" name="tipo_usuario" required>
                <option selected disabled value="">Selecione...</option>
                <option value="Admin">Admin</option>
                <option value="Funcionario">Funcionário</option>
                <option value="Cliente">Cliente</option>
              </select>
              <div class="invalid-feedback">Selecione o tipo de usuário.</div>
            </div>

            <!-- CEP -->
            <div class="col-md-4">
              <label class="form-label fw-semibold" for="cep">CEP *</label>
              <input type="text" class="form-control" id="cep" name="cep" placeholder="00000-000" inputmode="numeric" pattern="^\d{5}-?\d{3}$" autocomplete="postal-code" required>
              <div class="invalid-feedback">Informe um CEP válido.</div>
            </div>

            <!-- Endereço -->
            <div class="col-md-6">
              <label class="form-label fw-semibold" for="endereco">Endereço *</label>
              <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Rua, avenida..." autocomplete="address-line1" required>
              <div class="invalid-feedback">Informe o endereço.</div>
            </div>

            <!-- Número -->
            <div class="col-md-2">
              <label class="form-label fw-semibold" for="numero">Número *</label>
              <input type="text" class="form-control" id="numero" name="numero" placeholder="Nº" autocomplete="address-line2" required>
              <div class="invalid-feedback">Informe o número.</div>
            </div>

            <!-- Complemento -->
            <div class="col-md-4">
              <label class="form-label fw-semibold" for="complemento">Complemento</label>
              <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Apartamento, bloco...">
            </div>

            <!-- Cidade -->
            <div class="col-md-4">
              <label class="form-label fw-semibold" for="cidade">Cidade *</label>
              <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite a cidade" autocomplete="address-level2" required>
              <div class="invalid-feedback">Informe a cidade.</div>
            </div>

            <!-- Estado (todos os 27) -->
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
            <div class="col-md-6">
              <label class="form-label fw-semibold" for="senha">Senha *</label>
              <input type="password" class="form-control" id="senha" name="senha" minlength="6" autocomplete="new-password" required>
              <div class="form-text">Mínimo de 6 caracteres.</div>
              <div class="invalid-feedback">Informe uma senha (mín. 6).</div>
            </div>

            <!-- Confirmar Senha -->
            <div class="col-md-6">
              <label class="form-label fw-semibold" for="confirma_senha">Confirmar Senha *</label>
              <input type="password" class="form-control" id="confirma_senha" name="confirma_senha" minlength="6" autocomplete="new-password" required>
              <div class="invalid-feedback">Repita a senha.</div>
            </div>
          </div>

          <!-- Botões -->
          <div class="text-center mt-4">
            <a href="index.html" class="btn btn-outline-dark me-2 px-4">Voltar</a>
            <button type="reset" class="btn btn-secondary me-2 px-4">Limpar</button>
            <button type="submit" class="btn btn-warning text-dark fw-semibold px-4">Cadastrar</button>
          </div>
        </form>
      </div>
    </div>
  </main>

  <!-- Rodapé -->
  <footer class="text-center py-3 mt-5" style="background-color:#FFD700;">
    <small class="text-dark fw-semibold">
      Desenvolvido por Jaque Gomes e Emerson Galdino — Bora Beber © 2025
    </small>
  </footer>

  <!-- Opcional: JS do Bootstrap (para navbar responsiva); não há JS próprio -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>