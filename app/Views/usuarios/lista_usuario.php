<div class="container my-5">

    <!-- Título da página: mostra onde o usuário está no sistema -->
    <h2 class="text-center mb-4 text-warning fw-bold">Lista de Usuários</h2>

    <!-- Tabela com rolagem caso tenha muitos registros -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle">
            <thead class="table-warning text-dark">
                <tr>
                    <!-- Cabeçalho explicando os dados listados -->
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Celular</th>
                    <th>Nível</th>
                    <th class="text-center">Ações</th> <!-- Botões: editar e excluir -->
                </tr>
            </thead>

            <tbody>
                <!-- Se existirem usuários cadastrados, mostrar cada um -->
                <?php if (!empty($usuarios)): ?>
                    <?php foreach ($usuarios as $u): ?>
                        <tr>
                            <!-- Dados trazidos do banco para preenchimento da tabela -->
                            <td><?= $u['id_usuario'] ?></td>
                            <td><?= $u['nome'] ?></td>
                            <td><?= $u['email'] ?></td>
                            <td><?= $u['celular'] ?></td>
                            <td><?= $u['nivel_acesso'] ?></td>

                            <td class="text-center">
                                <!-- Botão Editar: futuramente vai abrir o formulário preenchido -->
                                <!-- Ele serve para atualizar os dados do usuário -->
                                <a href="#" class="btn btn-sm btn-primary me-1">Editar</a>

                                <!-- Botão Excluir: apaga o usuário do sistema -->
                                <!-- Pergunta antes para evitar exclusão por engano -->
                                <a href="/usuarios/excluir/<?= $u['id_usuario'] ?>" 
                                  class="btn btn-sm btn-danger"
                                  onclick="return confirm('Tem certeza que deseja excluir este usuário?');">
                                    Excluir
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                <!-- Se não tiver nenhum usuário cadastrado, mostra aviso -->
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="text-center">Nenhum usuário cadastrado.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Botão para cadastrar novo usuário -->
    <!-- Redireciona para a página de cadastro -->
    <div class="text-end mt-3">
        <a href="/usuarios/inserir" class="btn btn-success">
            + Adicionar Novo
        </a>
    </div>

</div>
