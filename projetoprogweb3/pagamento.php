<?php
class Pagamento {
    private $formaPagamento;
    private $status;
    private $data;

    public function __construct($formaPagamento) {
        $this->formaPagamento = $formaPagamento;
        $this->status = "pendente";
        $this->data = date("Y-m-d");
    }

    public function pagar() {
        $this->status = "pago";
    }

    public function getStatus() {
        return $this->status;
    }

    public function imprimir() {
    echo "<h3>Pagamento</h3>";
    echo "Forma: " . $this->formaPagamento . "<br>";
    echo "Status: " . $this->status . "<br>";
    echo "Data: " . $this->data . "<br><br>";
    }
}