<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['user'])) {
    die("<a href='../ACT10/010index.php'>Error, debe identificarse</a>.<br />");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de productos</title>
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <h1>Bienvenido <?= $_SESSION['user'] ?>
            </h1>
            <p class="ml-5"><a href="../ACT13/013logout.php">Pulse aquí para salir </a> </p>
            <p class="ml-5">
                <a href="012peliculas.php">Volver al Inicio <i class="bi bi-house"></i></a></p>
            <h2>Listado de películas<i class="bi bi-cart2"></i></h2>
            <ul class="m-4">
                <li>Harry Potter y la piedra filosofal</li>
                <li>Solo en casa 2</li>
                <li>Titanic</li>
            </ul>
        </div>
    </div>
</body>

</html>