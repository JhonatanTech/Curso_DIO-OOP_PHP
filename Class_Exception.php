<?php

//Lançamento de uma exceção
//throw - lançamento
throw new Exception("Essa é uma exceção!");

echo "\n... executando ...";

//---------------------------------------------------------
//Sem o uso da classe de exceção 

//Função para verificar se o codigo,nome e idade tem conteudo
function validarUsuario(array $usuario){
    //Verifica se estão vazia
    if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
        return false;
    }

    return true;

}

//array
$usuario = [
    'codigo'    => 1,
    'nome'      => '',
    'idade'     => 57,
];

//Chamando a funçaõ
$usuarioValido = validarUsuario($usuario);

//Se retornar falso, cai dentro da condição
if (!$usuarioValido) {
    echo "Usuário Inválido!";
    return false;
}

//---------------------------------------------------------
//Uso com a classe de exceção

function validarUsuario2(array $usuario)
{
    //Verifica se estão vazias
    if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
        throw new Exception("Campos obrigatórios não foram preenchidos!");
    }

    return true;
}

//array
$usuario2 = [
    'codigo'    => 1,
    'nome'      => '',
    'idade'     => 57,
];

try {
    //Chamando a funçaõ
    $usuarioValido = validarUsuario($usuario2);
}
//Exceção
catch (Exception $e) {
    //Informa a mensagem de erro
    //getMessage é um método da classe Exception
    echo $e->getMessage();
}
//É executado após o try/catch
finally{
    echo "Status da Operação: " . (int)$status; //cast
}

