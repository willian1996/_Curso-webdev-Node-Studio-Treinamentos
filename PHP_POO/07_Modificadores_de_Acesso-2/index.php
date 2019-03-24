<?php

class Veiculo{
    private $modelo;
    public $cor;
    public $ano;
    
    protected function andar(){
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
    public function mostrarAcao(){
        $this->andar();
    }
    
    
    
}

$carro = new Carro();
$carro->mostrarAcao();





