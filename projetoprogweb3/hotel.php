<?php
class Hotel {
    private $nome;
    private $endereco;
    private $quartos = [];

    public function __construct($nome, $endereco) {
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function adicionarQuarto($quarto) {
        $this->quartos[] = $quarto;
    }

    public function getQuartos() {
        return $this->quartos;
    }

    public function getNome() {
        return $this->nome;
    }

    public function imprimir() {
    echo "<h3> Hotel </h3>";
    echo "Nome: " . $this->nome . "<br>";
    echo "Endereço: " . $this->endereco . "<br><br>";
    }
}