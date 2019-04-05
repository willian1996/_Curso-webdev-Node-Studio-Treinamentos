<?php
require_once 'classes/produto.php';
require_once 'models/produto.php';

use models\Produto as productModel;
use classes\Produto as productClass;


$produto = new productModel();
$produto->mostrarDetales();

echo "<hr>";

$produto2 = new productClass();
$produto2->mostrarDetales();