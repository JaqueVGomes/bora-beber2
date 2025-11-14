
    
    <div class="container my-5">
        <h2 class="text-center mb-4">Lista de Usuários</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-warning text-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Celular</th>
                        <th>Nível</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $u): ?>
                    <tr>
                        <td><?= $u['id_usuario'] ?></td>
                        <td><?= $u['nome'] ?></td>
                        <td><?= $u['email'] ?></td>
                        <td><?= $u['celular'] ?></td>
                        <td><?= $u['nivel_acesso'] ?></td>
                                         
                     
                            <button class="btn btn-sm btn-primary me-2">Editar</button>
                            <button class="btn btn-sm btn-danger">Excluir</button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                  <!-- na aula apagamos um usuario -->
                </tbody>
            </table>
        </div>
       <div class="col-md-6 text-end">
        <a href="/usuarios/inserir" class="btn btn-primarey-custom"> Adicionar Novo</button>
    
</div>
    

    <!-- Rodapé -->
    <footer class="text-center py-3 mt-5" style="background-color:#FFD700;">
        <small class="text-dark fw-semibold">
            Desenvolvido por Jaque Gomes e Emerson Galdino — Bora Beber © 2025
        </small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>