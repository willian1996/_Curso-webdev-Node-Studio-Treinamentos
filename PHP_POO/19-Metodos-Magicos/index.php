<?php

class Pessoa{
    private $dados = array();
    
    
    public function __set($nome, $valor){
        $this->dados[$nome] = $valor;
    }
    public function __get($nome){
        return $this->dados[$nome];
    }
    public function __tostring(){
        return "Tentei imprimir o objeto";
    }
    public function __invoke(){
        return "Objeto como função";
    }
    
}



$pessoa = new Pessoa();
$pessoa->nome = "Willian";
$pessoa->idade = 50;
$pessoa->sexo = "Masculino";

//echo $pessoa->nome."<br>";
//echo $pessoa->idade."<br>";
//echo $pessoa->sexo."<br>";

echo $pessoa();

echo "<hr>";
var_dump($pessoa);




