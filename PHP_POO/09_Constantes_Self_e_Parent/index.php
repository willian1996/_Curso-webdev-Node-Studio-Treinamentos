<?php

class Pessoa{
    const NOME = "willian";
    
    public function exibirNome(){
        echo self::NOME;
    }
}

class Willian extends Pessoa{
    const NOME = "Sales";
    
    public function exibirNome(){
        echo parent::NOME;
    }
}


//$pessoa = new Pessoa();
//
//$pessoa->exibirNome();

$willian = new Willian();
$willian->exibirNome();