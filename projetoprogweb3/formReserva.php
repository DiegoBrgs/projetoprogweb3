<h2> Fazer Reserva</h2>

<form method="POST" action="index.php">
    Nome: <input type="text" name="nome" required><br><br>
    CPF: <input type="text" name="cpf" required><br><br>
    Email: <input type="email" name="email" required><br><br>

    Check-in: <input type="date" name="checkin" required><br><br>
    Check-out: <input type="date" name="checkout" required><br><br>

    Forma de Pagamento:
    <select name="pagamento">
        <option>PIX</option>
        <option>Cartão</option>
    </select><br><br>

    <button type="submit">Reservar</button>
</form>