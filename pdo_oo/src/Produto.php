<?php

class Produto{

    /**
     * @var PDO
     */
    private $conexao;

    public function __construct()
    {
        try {
            $this->conexao = new PDO('mysql:host=mysql;dbname=exemplo', 'root', '1234');      
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    // ': array' informa que a funçao esta retornando um array
    public function list() : array
    {
        //Buscando todos os registros da tabela 'produto' 
        $sql = 'select * from produtos';

        $produtos = [];


        //'query' é um método da classe PDO
        foreach ($this->conexao->query($sql) as $key => $value) {

            //funçaõ nativa do php
            array_push($produtos, $value);
        }

        return $produtos;
    }

    // ': int' informa que a funçao esta retornando um inteiro
    public function insert(string $descricao) : int
    {
        //Inserção de conteudo na base de dados
        //produtos == nome da tabela
        //? é o parametro
        $sql = 'insert into produtos(descricao) values(?)';

        //preparo
        $prepare = $this->conexao->prepare($sql);

        //Faz a atribuição atravez do 'bindParam'
        //O '1' se refere ao parametro, que no caso seria o 'descricao'
        $prepare->bindParam(1, $descricao);
        $prepare->execute();

        //'rowCount' exibe o número de linhas afetadas
        return $prepare->rowCount();
    }

    // ': int' informa que a funçao esta retornando um inteiro
    public function update(string $descricao, int $id) : int
    {
        //Instrução de Update do SQL
        //? é o parametro
        $sql = 'update produtos set descricao = ? where id = ?';

        //Preparo
        $prepare = $this->conexao->prepare($sql);

        //Faz a atribuição atravez do 'bindParam'
        //O '1' se refere ao parametro, que no caso seria o 'descricao'
        $prepare->bindParam(1, $descricao);
        $prepare->bindParam(2, $id);

        $prepare->execute();

        return $prepare->rowCount();
    }

    // ': int' informa que a funçao esta retornando um inteiro
    public function delete(int $id) : int
    {
        //Exclusão de conteudo na base de dados
        //produtos == nome da tabela
        //? é o parametro
        $sql = 'delete from produtos where id = ?';

        //preparo
        $prepare = $this->conexao->prepare($sql);

        //Faz a atribuição atravez do 'bindParam'
        //O '1' se refere ao parametro, que no caso seria o 'descricao'
        $prepare->bindParam(1, $id);
        $prepare->execute();

        //'rowCount' exibe o número de linhas afetadas
        return $prepare->rowCount();
    }
}