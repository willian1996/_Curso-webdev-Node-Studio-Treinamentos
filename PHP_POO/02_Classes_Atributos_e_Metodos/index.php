<?php

class Pessoa{
    public $nome;
    public $idade;
    
    public function Falar(){
        echo $this->nome." de ".$this->idade." anos acabou de falar";
    }
    
    
}


$willian = new Pessoa();
var_dump($willian);

echo "<hr>";
$willian->nome = "Willian Sales Gabriel";
$willian->idade = 23;
$willian->falar();


