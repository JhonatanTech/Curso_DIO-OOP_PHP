<?php
//Conexão
$pdo = require 'connect.php';

//Exclusão de conteudo na base de dados
//produtos == nome da tabela
//? é o parametro
$sql = 'delete from produtos where id = ?';

//preparo
$prepare = $pdo->prepare($sql);

//Faz a atribuição atravez do 'bindParam'
//O '1' se refere ao parametro, que no caso seria o 'descricao'
$prepare->bindParam(1, $_GET['id']);
$prepare->execute();

//'rowCount' exibe o número de linhas afetadas
echo $prepare->rowCount();