<?php
require_once "hotel.php";
require_once "quarto.php";
require_once "cliente.php";
require_once "pagamento.php";
require_once "reserva.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $hotel = new Hotel("Hotel Central", "Av. Principal");

    $quarto = new Quarto();
    $quarto->setNumero(101);
    $quarto->setAndar(1);
    $quarto->setCapacidade(2);
    $quarto->setPreco(200);

    $hotel->adicionarQuarto($quarto);

    $cliente = new Cliente($_POST['nome'], $_POST['cpf'], $_POST['email']);

    $pagamento = new Pagamento($_POST['pagamento']);

    $reserva = new Reserva();
    $reserva->setCliente($cliente);
    $reserva->setQuarto($quarto);
    $reserva->setPagamento($pagamento);
    $reserva->setCheckin($_POST['checkin']);
    $reserva->setCheckout($_POST['checkout']);
    $reserva->setStatus("reservado");

    $reserva->confirmarReserva();

    echo "<h1> Reserva Realizada</h1>";

    $hotel->imprimir();
    $cliente->imprimir();
    $quarto->imprimir();
    $pagamento->imprimir();
    $reserva->imprimir();

    } else {
        echo "<h2> Acesse pelo formulário!</h2>";
    }

?>

    <a href="formReserva.php">
        <button>Nova Reserva</button>
    </a>