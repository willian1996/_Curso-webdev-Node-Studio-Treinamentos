<?php
abstract class Banco{
    protected $saldo;
    protected $limiteSaque;
    protected $juros;
    
    public function setSaldo($s){
        $this->saldo = $s;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    abstract protected function sacar($s);
    abstract protected function depositar($d);
    
}

class Itau extends Banco{
    public function sacar($s){
        $this->saldo -= $s;
        echo "<hr> Sacou: ".$s;
    }
    public function depositar($d){
        $this->saldo += $d;
        echo "<hr> Depositou: ".$d;
    }
}

class Bradesco extends Banco{
    public function sacar($s){
        $this->saldo -= $s;
        echo "<hr>Sacou: ".$s;
    }
    public function depositar($d){
        $this->saldo += $d;
        echo "<hr>Depositou: ".$d;
    }
}

$itau = new Itau();
$itau->setSaldo(1000);
echo "<hr>Saldo: ".$itau->getSaldo();
$itau->sacar(250);
echo "<hr>Saldo: ".$itau->getSaldo();
$itau->depositar(300);
echo "<hr>Saldo: ".$itau->getSaldo();
$itau->sacar(650);
echo "<hr>Saldo: ".$itau->getSaldo();





