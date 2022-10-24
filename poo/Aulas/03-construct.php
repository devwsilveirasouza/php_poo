<?php

class Login {
    // Só pode ser acessado pela classe
    private $email;
    private $senha;
    private $nome;

    // Método constructor
    public function __construct($email, $senha, $nome) {
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    // função para acessar os atributos
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($e) {
        // Aplicando o filtro no envio
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function Logar() {
        if($this->email == "teste@teste.com" and $this->senha == "123"):
            echo "Usuário: ".$this->email." logado com sucesso!";
        else:
            echo "Dados inválidos.";
        endif;
    }
}

$logar = new Login("teste@teste.com", "123", "Wellington");
$logar->Logar();
echo "<br>";
echo $logar->getNome();