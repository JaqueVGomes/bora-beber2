<div class="login-container">
    <div class="login-title">Bora Beber</div>

    <form method="POST" action="/login">
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuário</label>
            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Digite seu usuário" />
        </div>

        <div class="mb-3">
            <label for="senha" class="form-label">Senha</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" />
        </div>

        <button type="submit" class="btn btn-custom w-100">Logar</button>
    </form>
</div>
