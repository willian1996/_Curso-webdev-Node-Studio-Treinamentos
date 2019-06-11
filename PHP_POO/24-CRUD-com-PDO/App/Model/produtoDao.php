<?php
namespace App\Model;

class ProdutoDao{
    public function create(Produto $p){
        $sql = "INSERT INTO produtos (nome, descricao) VALUES (:nome, :descricao)";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(":nome", $p->getNome());
        $stmt->bindValue(":descricao", $p->getDescricao());
        $stmt->execute();
        
    }
    public function read(){
        $sql = "SELECT * FROM produtos";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
        
        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else{
            return [];
        }
    }
    public function update(Produto $p){
        $sql = "UPDATE produtos SET nome = :nome, descricao = :descricao WHERE id = :id";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(":nome", $p->getNome());
        $stmt->bindValue(":descricao", $p->getDescricao());
        $stmt->bindValue(":id", $p->getId());
        $stmt->execute();
        
        
        
    }
    public function delete($id){
        $sql = "DELETE FROM produtos WHERE id = :id";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        
    }
}