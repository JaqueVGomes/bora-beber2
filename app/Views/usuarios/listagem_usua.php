<div class="container my-5">

    <h2 class="text-center mb-4 text-warning fw-bold">Lista de Usuários</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-warning text-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Celular</th>
                    <th>Nível</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php if (!empty($usuarios)): ?>
                    <?php foreach ($usuarios as $u): ?>
                        <tr>
                            <td><?= $u['id_usuario'] ?></td>
                            <td><?= $u['nome'] ?></td>
                            <td><?= $u['email'] ?></td>
                            <td><?= $u['celular'] ?></td>
                            <td><?= $u['nivel_acesso'] ?></td>

                            <td class="text-center">
                                <a href="#" class="btn btn-sm btn-primary me-1">Editar</a>
                                <a href="#" class="btn btn-sm btn-danger">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">Nenhum usuário cadastrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="text-end mt-3">
        <a href="/usuarios/inserir" class="btn btn-success">
            + Adicionar Novo
        </a>
    </div>

</div>

