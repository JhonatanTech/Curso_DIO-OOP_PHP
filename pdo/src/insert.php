<?php


//!O 'id' é auto incremento, por isso não necessita de ser passado o valor

//Conexão
$pdo = require 'connect.php';

//Inserção de conteudo na base de dados
//produtos == nome da tabela
//? é o parametro
$sql = 'insert into produtos(descricao) values(?)';

//preparo
$prepare = $pdo->prepare($sql);

//Faz a atribuição atravez do 'bindParam'
//O '1' se refere ao parametro, que no caso seria o 'descricao'
$prepare->bindParam(1, $_GET['descricao']);
$prepare->execute();

//'rowCount' exibe o número de linhas afetadas
echo $prepare->rowCount();
