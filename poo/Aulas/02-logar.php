<?php

class Login {
    // Só pode ser acessado pela classe
    private $email;
    private $senha;

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

    public function Logar() {
        if($this->email == "teste@teste.com" and $this->senha == "123"):
            echo "Usuário: ".$this->email." logado com sucesso!";
        else:
            echo "Dados inválidos.";
        endif;
    }
}

$logar = new Login();
$logar->setEmail("te()s/t/e@teste.com");
$logar->setSenha("123");
$logar->Logar();
echo "<br>";
echo $logar->getEmail();
echo "<br>";