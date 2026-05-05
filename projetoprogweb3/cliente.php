<?php
class Cliente {
    private $nome;
    private $cpf;
    private $email;

    public function __construct($nome, $cpf, $email) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
    }

    public function getNome() {
        return $this->nome;
    }

    public function imprimir() {
    echo "<h3> Cliente</h3>";
    echo "Nome: " . $this->nome . "<br>";
    echo "CPF: " . $this->cpf . "<br>";
    echo "Email: " . $this->email . "<br><br>";
}
}