<?php
/** Agregação
 * Na agregação, uma classe precisa da outra para executar sua ação, ou seja,
 * uma classe utiliza a outra comomparte de si própria
 */
class Produtos {
    public $nome;
    public $valor;

    function __construct($nome, $valor) {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho {
    public $produtos;

    public function adiciona(Produtos $produto) { // Agregação
        $this->produtos[] = $produto;
    }

    public function exibeProduto() {
        foreach ($this->produtos as $produto) {
            echo "Produto: ".$produto->nome."<br>";
            echo "Valor: R$ ".number_format($produto->valor,2)."<hr>";
        }
    }
}

$produto1 = new Produtos("Notebook","1500");
$produto2 = new Produtos("Micro System","985");
$produto3 = new Produtos("Home Theater","1900");
$produto4 = new Produtos("Tablet","750");
$produto5 = new Produtos("Smartphone","999");

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);
$carrinho->adiciona($produto3);
$carrinho->adiciona($produto4);
$carrinho->adiciona($produto5);

$carrinho->exibeProduto();