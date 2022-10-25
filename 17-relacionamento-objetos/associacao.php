<?php
// Relacionamento de objetos: Associação
class Pedido {
    public $numero;
    public $cliente;
}

class Cliente {
    public $nome;
    public $endereço;
}

$cliente = new Cliente();
$cliente->nome = "Wellington";
$cliente->endereco = "Rua XV novembro, Número: 1500";

$pedido = new Pedido();
$pedido->numero = "123";
$pedido->cliente = $cliente; // Associando o cliente ao pedido

$pedidos = array(
    'numero'            => $pedido->numero,
    'nomeCliente'       => $pedido->cliente->nome, // Acessando os atributos do cliente
    'enderecoCliente'   => $pedido->cliente->endereco,// Acessando os atributos do cliente
);

echo "<hr>";
var_dump($pedidos);
echo "<hr>";

echo "<br>";
echo "Pedido: " . $pedido->numero."<br>";
echo "Cliente: " . $pedido->cliente->nome."<br>";
echo "Endereço: " . $pedido->cliente->endereco."<br>"; 

echo "<hr>";



