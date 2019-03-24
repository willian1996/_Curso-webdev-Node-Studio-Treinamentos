<?php

class Veiculo{
    private $modelo;
    public $cor;
    public $ano;
    
    public function andar(){
        echo "Andou<br>";
    }
    public function parar(){
        echo "Parou<br>";
    }
    public function setModelo($m){
        $this->modelo = $m;
    }
    public function getModelo(){
        return $this->modelo;
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




$carro = new Veiculo();
$carro->setModelo("GOLF");


echo $carro->getModelo();


var_dump($carro);



