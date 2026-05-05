<?php
class Reserva {
    private $cliente;
    private $quarto;
    private $pagamento;
    private $checkin;
    private $checkout;
    private $status;

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function setQuarto($quarto) {
        $this->quarto = $quarto;
    }

    public function setPagamento($pagamento) {
        $this->pagamento = $pagamento;
    }

    public function setCheckin($checkin) {
        $this->checkin = $checkin;
    }

    public function setCheckout($checkout) {
        $this->checkout = $checkout;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function confirmarReserva() {
        $this->status = "confirmado";
        $this->quarto->reservar();
    }

    public function imprimir() {
    echo "<h3> Reserva</h3>";
    echo "Cliente: " . $this->cliente->getNome() . "<br>";
    echo "Quarto: " . $this->quarto->getNumero() . "<br>";
    echo "Check-in: " . $this->checkin . "<br>";
    echo "Check-out: " . $this->checkout . "<br>";
    echo "Status: " . $this->status . "<br>";
    echo "Pagamento: " . $this->pagamento->getStatus() . "<br><br>";
    }
}