<?php

class Login {

    public static $user;

    public static function verificaLogin() {
        /** $this não funciona com parâmetros státicos 
         * somente o self::$user funciona com parâmetros státicos
        */
        echo "O usuário ".self::$user." está logado!";
    }

    public function sairSistema() {
        echo "O usuário deslogou!";
    }
}
/** Quando utilizamos métodos estáticos não é preciso mais instânciar a classe 
 * Basta declarar o nome da classe + :: e o método
*/

Login::$user = "Admin";
Login::verificaLogin();

echo "<hr>";

$login = new Login();
$login->sairSistema();