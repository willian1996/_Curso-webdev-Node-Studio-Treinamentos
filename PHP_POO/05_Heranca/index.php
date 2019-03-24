<?php

class Veiculo{
    public $modelo;
    public $cor;
    public $ano;
    
    public function andar(){
        echo "Andou<br>";
    }
    public function parar(){
        echo "Parou<br>";
    }
}

class Carro extends Veiculo{
    public function ligarLimpador(){
        echo "Limpando...<br>";
    }
    
    
}
class Moto extends Veiculo{
    public function chamarNoGrau(){
        echo "Chamando no grau...<br>";
    }
}

$carro = new Carro();
$carro->modelo = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->ligarLimpador();
$carro->andar();


var_dump($carro);

echo "<hr>";

$moto = new Moto();
$moto->modelo = "CG FAN";
$moto->cor = "Prata";
$moto->ano = 2016;
$moto->chamarNoGrau();
$moto->andar();

var_dump($moto);
