<?php

class Login{
    private $email;
    private $senha;
    private $nome;
    
    public function __construct($email, $senha, $nome){
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->setNome($nome);
    }
    
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($e){
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($s){
        $this->senha = $s;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
        $this->nome = $n;
    }
    
    public function logar(){
        if($this->email == "teste@teste.com" and $this->senha=="123456"){
            echo "Logado com sucesso";
        }else{
            echo "Dados invalidos";
        }
    }
}

$logar = new Login("teste@teste.com", "123456", "Willian Sales");

$logar->logar();
$logar->getEmail();