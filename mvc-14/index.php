<?php

require 'classes/produto.php';
require 'models/produto.php';

use classes\Produto as productClass;
use models\Produto as productModel;

// $produto = new \classes\Produto();
$produto = new productClass();
$produto->mostrarDetalhes();

echo "<hr>";

$produto2 = new productModel();
$produto2->mostrarDetalhes();