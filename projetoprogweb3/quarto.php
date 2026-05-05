<?php
class Quarto {
    private $numero;
    private $andar;
    private $capacidade;
    private $preco;
    private $disponivel = true;

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setAndar($andar) {
        $this->andar = $andar;
    }

    public function getAndar() {
        return $this->andar;
    }

    public function setCapacidade($capacidade) {
        $this->capacidade = $capacidade;
    }

    public function getCapacidade() {
        return $this->capacidade;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setDisponivel($disponivel) {
        $this->disponivel = $disponivel;
    }

    public function getDisponivel() {
        return $this->disponivel;
    }

    public function reservar() {
        $this->disponivel = false;
    }

    public function imprimir() {
    echo "<h3> Quarto </h3>";
    echo "Número: " . $this->numero . "<br>";
    echo "Andar: " . $this->andar . "<br>";
    echo "Capacidade: " . $this->capacidade . "<br>";
    echo "Preço: R$ " . $this->preco . "<br>";
    echo "Disponível: " . ($this->disponivel ? "Sim" : "Não") . "<br><br>";
    }
}