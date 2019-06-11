<?php 
require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();
$produto->setId(2);
$produto->setNome('Cadeira ');
$produto->setDescricao('Cadeira Gamer');

$produtoDao = new \App\Model\ProdutoDao();
//$produtoDao->create($produto);
//$produtoDao->update($produto);
$produtoDao->delete(1);
$produtoDao->read();

foreach($produtoDao->read() as $produto){
    echo $produto['nome'];
    echo "<br>";
    echo $produto['descricao'];
    echo "<hr>";
}
