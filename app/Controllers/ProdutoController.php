<?php

namespace App\Controllers;

use App\Models\Produto;

class ProdutoController
{
    // Lista todos os usuários e chama a view
    public function listar()
    {
        // Busca no Model
        $lista_produtos = Produto::buscarTodos();

        // Renderiza a view CORRETA
        render('produtos/lista_produtos.php', [
            'title'    => 'Lista de Produtos',
            'produtos' => $lista_produtos
        ]);
    }
    public function salvar (){
        //1.Limpar os dados, remove tudo que não for texto puro
        $dados =[
            'nome'=>filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS),
            'categoria'=>filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS),
            'descricao'=>filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS),
            'quantidade'=>filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_SPECIAL_CHARS),
            'valor_unitario'=>filter_input(INPUT_POST, 'valor_unitario', FILTER_SANITIZE_SPECIAL_CHARS),
            'estoque_minimo'=>filter_input(INPUT_POST, 'estoque_minimo', FILTER_SANITIZE_SPECIAL_CHARS),
                     
        ];
        // cria a lista de erros
        $erros = [];

        if (empty($dados['nome'])){
            $erros[] = 'O campo NOME não pode ficar em branco!';
        }else if (strlen($dados['nome']) <4) { // verifica se o nome tem menos de 4 letras
            $erros[] = 'O campo NOME deve ter mais que 3 caracteres!';
        }

        // Se não houver erros salva 
        if (empty($erros)){
            $id = Produto::salvar($dados);
            header('Location: /produtos');
        }else{
            //Se não houver erros, volta para o formulario 
            $_SESSION['erros'] = $erros;
            $_SESSION['dados'] = $dados;
            header('Location: /produtos/inserir');
        }
    }
    public function excluir($id)
    {
        // Sanitiza o ID
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if (!$id) {
            $_SESSION['erros'][] = 'ID inválido para exclusão.';
            header('Location: /produtos');
            exit;
        }

        // Chama o Model para excluir
        $removido = Produto::excluir($id);

        if ($removido) {
            $_SESSION['sucesso'] = 'Produto excluído com sucesso.';
        } else {
            $_SESSION['erros'][] = 'Erro ao excluir o produto.';
        }

        header('Location: /produtos');
        exit;
    }

}
