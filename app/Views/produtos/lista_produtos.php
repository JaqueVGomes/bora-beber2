<div class="container my-5">

    <!-- Título da página -->
    <!-- Mostra ao usuário que ele está visualizando os produtos cadastrados -->
    <h2 class="text-center mb-4 text-warning fw-bold">Lista de Produtos</h2>

    <!-- Tabela com rolagem caso tenha muitos produtos -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-warning text-dark">
                <tr>
                    <!-- Cabeçalho da tabela -->
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Valor Unitario</th>
                    <th>Quantidade</th>
                    <th class="text-center">Ações</th> <!-- Botões para editar e excluir -->
                </tr>
            </thead>

            <tbody>
                <!-- Se existir produtos cadastrados, listar um por um -->
                <?php if (!empty($produtos)): ?>
                    <?php foreach ($produtos as $p): ?>
                        <tr>
                            <!-- Dados de cada produto -->
                            <td><?= $p['id_produto'] ?></td>
                            <td><?= $p['nome'] ?></td>
                            <td><?= $p['valor_unitario'] ?></td>
                            <td><?= $p['quantidade'] ?></td>

                            <td class="text-center">
                                <!-- Botão Editar: futuramente abre o formulário para alterar o produto -->
                                <a href="#" class="btn btn-sm btn-primary me-1">Editar</a>

                                <!-- Botão Excluir: remove o produto do banco -->
                                <!-- onclick exibe um alerta para confirmar antes de excluir -->
                                <a href="/produtos/excluir/<?= $p['id_produto'] ?>" 
                                  class="btn btn-sm btn-danger" 
                                  onclick="return confirm('Tem certeza que deseja excluir este produto?');">
                                    Excluir
                                </a>

                            </td>
                        </tr>
                    <?php endforeach; ?>

                <!-- Se não houver produtos cadastrados, exibe mensagem -->
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">Nenhum produto cadastrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Botão para ir até o formulário de novo produto -->
    <div class="text-end mt-3">
        <a href="/produtos/inserir" class="btn btn-success">
            + Adicionar Novo
        </a>
    </div>

</div>
