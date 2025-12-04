<!-- Container principal da tela de login -->
<div class="login-container">

    <!-- Título da tela de login -->
    <!-- Apenas identificação visual do sistema -->
    <div class="login-title">Bora Beber</div>

    <!-- Formulário de login -->
    <!-- method="POST" → envia os dados sem aparecer na URL -->
    <!-- action="/login" → rota que vai validar o usuário e senha -->
    <form method="POST" action="/login">

        <!-- Campo de usuário -->
        <!-- Aqui será inserido o e-mail ou nome de usuário para entrar no sistema -->
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuário</label>
            <input type="text" class="form-control" id="usuario" name="usuario"
                   placeholder="Digite seu usuário" />
        </div>

        <!-- Campo da senha -->
        <!-- Protegido (password) para não mostrar os caracteres digitados -->
        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha"
                   placeholder="Digite sua senha" />
        </div>

        <!-- Botão que envia os dados acima para o servidor validar -->
        <button type="submit" class="btn btn-custom w-100">Logar</button>

    </form>
</div>
