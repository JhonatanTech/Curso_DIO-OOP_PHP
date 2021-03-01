<?php

require 'Produto.php';

$produto = new Produto();

switch ($_GET['operacao']) {
    case 'list':
        
        echo '<h3>Produtos: </h3>';

        //'query' é um método da classe PDO
        foreach ($produto->list() as $value) {
            echo 'Id: ' . $value['id'] . '<br> Descrição: ' . $value['descricao'] . '<hr>';
        }
        break;

    case 'insert':

        $produto->insert('teste');

        if (!$produto) {
            echo 'Não foi possivel executar a operação!';
            return false;
        }
        echo 'Registro inserido com sucesso!';

        break;

    case 'update':

        $produto->update('teste',1);

        if (!$produto) {
            echo 'Não foi possivel executar a operação!';
            return false;
        }
        echo 'Registro atualizado com sucesso!';

        break;

    case 'delete':
            
        $produto->delete(1);

        if (!$produto) {
            echo 'Não foi possivel executar a operação!';
            return false;
        }
        echo 'Registro deletado com sucesso!';

        break;

}