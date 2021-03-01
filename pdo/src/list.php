<?php

//Conexão
$pdo = require 'connect.php';

//Buscando todos os registros da tabela 'produto' 
$sql = 'select * from produtos';

echo '<h3>Produtos: </h3>';

//'query' é um método da classe PDO
foreach ($pdo->query($sql) as $key => $value) {
    echo 'Id: ' . $value['id'] . '<br> Descrição: ' . $value['descricao'] . '<hr>';
}