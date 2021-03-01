<?php

//Efetuando a conexão com o banco de dados
$pdo = require'connect.php';

//Instrução de Update do SQL
//? é o parametro
$sql = 'update produtos set descricao = ? where id = ?';

//Preparo
$prepare = $pdo->prepare($sql);

//Faz a atribuição atravez do 'bindParam'
//O '1' se refere ao parametro, que no caso seria o 'descricao'
$prepare->bindParam(1 ,$_GET['descricao']);
$prepare->bindParam(2, $_GET['id']);

$prepare->execute();

echo $prepare->rowCount();