<?php
require_once 'vendor/autoload.php';

use  Cocur\Slugify\Slugify;
// Gerar url amigáveis
$slug = new  Slugify();
// Regra de substituição de parâmetros
$slug->addRule('ção', 'cao');
echo  $slug-> slugify( 'Teste com acentuação para geração de slug', '_' ); // Olá Mundo