<?php

//As classes são representações de um objeto

class ContaBancaria{

    //Modificadores de acesso:
        //public    - Qualquer elemento pode acessar o atributo
        //private   - Acesso fica restrito a própria classe
        //protected - Semelhante ao 'private', tendo a difereneça que pode ser acessado por herança

    //Atributos/Propriedades

    /**
     * @var string
     */
    private $banco;

     /**
     * @var string
     */
    private $nomeTitular;

     /**
     * @var string
     */
    private $numeroAgengia;

     /**
     * @var string
     */
    private $numeroConta;

     /**
     * @var float
     */
    private $saldo;

    //Esse método é executado assim que é criado o objeto($conta = new ContaBancaria)
    public function __construct(
        string $banco, 
        string $nomeTitular, 
        string $numeroAgencia, 
        string $numeroConta, 
        string $saldo){
        
        //$this serve para acessar um atributo/metodo dentro da própria classe
        $this->banco            = $banco;
        $this->nomeTitular      = $nomeTitular;
        $this->numeroAgencia    = $numeroAgencia;
        $this->numeroConta      = $numeroConta;
        $this->saldo            = $saldo;
    }

    //Métodos: são funções de uma classe
    public function obterSaldo(){
        return '<br>-Seu saldo é: R$' . $this->saldo . '<br>';
    }
    
    public function depositar(float $valor){
        $this->saldo += $valor;
        return '<br>-Deposito realizado de R$' . $valor . '<br>';
    }

    public function sacar(float $valor){
        $this->saldo -= $valor;
        return '<br>-Saque realizado de R$' . $valor . '<br>';
    }


}

//Atribuimos a classe á uma váriavel e isso faz com que ela seja um objeto
//Objeto: $conta
$conta = new ContaBancaria(
    //passando parametros ao metodo construct, pois ele é executado com a criação do objeto
    'Nubank',           //banco
    'Jhonatan Torres',  //nomeTitular
    '0010',             //numeroAgencia
    '85247-63',         //numeroConta
    0.00                //saldo
); 

//$conta->$banco - Acessando a propridade da classe
//var_dump($conta);

//Chamando o método da classe
echo $conta->obterSaldo(); //0

echo $conta->depositar(300);

echo $conta->obterSaldo(); //300

echo $conta->sacar(20);

echo $conta->obterSaldo(); //280
?>