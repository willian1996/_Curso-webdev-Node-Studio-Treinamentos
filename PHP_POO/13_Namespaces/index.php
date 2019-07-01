<?php

require 'classes/produto.php';
require 'models/produto.php';

use models\Produto as productModel;
use classes\Produto as productClass;

$produto = new productModel();
$produto->mostrarDetalhes();

$produto2 = new productClass();
echo "<br>";
$produto2->mostrarDetalhes();