<div class="container my-5">

    <h2 class="text-center mb-4 text-warning fw-bold">Lista de Produtos</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-warning text-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Valor Unitario</th>
                    <th>Quantidade</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php if (!empty($produtos)): ?>
                    <?php foreach ($produtos as $p): ?>
                        <tr>
                            <td><?= $p['id_produto'] ?></td>
                            <td><?= $p['nome'] ?></td>
                            <td><?= $p['valor_unitario'] ?></td>
                            <td><?= $p['quantidade'] ?></td>

                            <td class="text-center">
                                <a href="#" class="btn btn-sm btn-primary me-1">Editar</a>
                                <a href="/produtos/excluir/<?= $p['id_produto'] ?>" 
                                  class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir este produto?');">
                                    Excluir
                                </a>

                            </td>
                        </tr>
                    <?php endforeach; ?>

                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">Nenhum produto cadastrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="text-end mt-3">
        <a href="/produtos/inserir" class="btn btn-success">
            + Adicionar Novo
        </a>
    </div>