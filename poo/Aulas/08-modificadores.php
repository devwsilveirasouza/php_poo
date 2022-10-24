<?php
/** MODIFICADORES DE ACESSO NOS MÉTODOS */

class Veiculo {
    public $modelo;
    public $cor;
    public $ano;
    // só é possível acessar dentro da própria classe, 
    //      não pode ser acessado dentro da classe herdeira
    private function Andar() { 
        echo "Andou";
    }

    public function Parar() {
        echo "Parou";
    }
    // pode ser acessado dentro da classe herdeira
    protected function ligarFarol() {
        echo "Acender farol em 3 2 1...";
    }

    public function mostrarAcao() {
        $this->Andar();
    }

}

class Carro extends Veiculo {

    public function LigarLimpador() {
        echo "Limpando em 3 2 1...";
    }

}

class Moto extends Veiculo { 

    public function Farol() {
        $this->ligarFarol();
    }
}

$carro = new Veiculo();
$carro->mostrarAcao();// acesso public

echo "<br>";
echo "<hr>";

$moto = new Moto();
$moto->Farol();
