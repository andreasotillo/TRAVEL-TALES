<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Restaurantes</title>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>

<div class="container">
    <h1>Reserva de Restaurantes</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = htmlspecialchars($_POST['nombre']);
        $fecha = htmlspecialchars($_POST['fecha']);
        $hora = htmlspecialchars($_POST['hora']);
        $personas = htmlspecialchars($_POST['personas']);
        $telefono = htmlspecialchars($_POST['telefono']);

        echo "<h2>Reserva Confirmada</h2>";
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Fecha: $fecha</p>";
        echo "<p>Hora: $hora</p>";
        echo "<p>Número de Personas: $personas</p>";
        echo "<p>Teléfono: $telefono</p>";
    } else {
    ?>

    <form id="reservationForm" method="post" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required>

        <label for="hora">Hora:</label>
        <input type="time" id="hora" name="hora" required>

        <label for="personas">Número de Personas:</label>
        <input type="number" id="personas" name="personas" min="1" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required>

        <button type="submit">Reservar</button>
    </form>

    <?php
    }
    ?>
</div>

</body>
</html>
