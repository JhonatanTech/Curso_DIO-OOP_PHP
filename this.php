<?php

//Criação da classe
class Animal{

    //Propridade/Atributo
    public $nome;

    //Método
    function escolherNome($nome){
        $this->nome = $nome;
    }

    function latir(){
        return "Au au<br>";
    }

    function latirForte(){
        return strtoupper($this->latir());
    }
}

//Objeto
$frida = new Animal;

//Atribuindo valor
$frida->escolherNome("Frida");

echo "O nome do animal é: $frida->nome <br>";

echo $frida->latir();
echo $frida->latirForte();

?>