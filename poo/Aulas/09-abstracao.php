<?php

/** Server como modelo para as classes que extenderem a classe banco 
 * Não podem ser instanciadas
 */
abstract class Banco
{
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    /** Métodos abstratos => são obrigatório em todas as classe que extenderem a classe banco
     * 
     * */
    public function setSaldo($s) {
        $this->saldo = $s;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    abstract protected function Sacar($s);
    abstract protected function Depositar($d);
}

class Itau extends Banco
{
    public function Sacar($s) {
        $this->saldo -= $s;
        echo "<hr> Sacou: R$ ".$s.".";
    }

    public function Depositar($d) {
        $this->saldo += $d;
        echo "<hr> Depositou: R$ ".$d.".";
    }
}

$itau = new Itau();
$itau->setSaldo(12000);
echo "<hr>";
echo "<br> Saldo: R$ ".$itau->getSaldo().".";

$itau->Sacar(3750);
echo "<hr>";
echo "<br> Saldo: R$ ".$itau->getSaldo().".";
$itau->Depositar(15000);
echo "<hr>";
echo "<br> Saldo: R$ ".$itau->getSaldo().".";
echo "<br>";
var_dump($itau);
echo "<br>";
