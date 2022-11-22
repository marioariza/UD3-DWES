<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Actividad 2 - UD3 - DWES</title>
</head>
<body>
    <form action="010index.php" method="get">
        <div class="mb-3 w-50">
            <label for="usuario" class="form-label">Usuario:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="usuario" placeholder="Usuario...">
        </div>
        <div class="mb-3 w-50">
            <label for="contraseña" class="form-label">Contaseña:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="contraseña" placeholder="Contraseña...">
        </div>
        <div class="mb-3 w-50">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="nombre@ejemplo.com">
        </div>
        <div class="mb-3 w-50">
            <button type="submit" class="btn btn-primary">Iniciar sesión</button>
        </div>
    </form>
</body>
</html>

<?php 
$user = $_GET['usuario'];
$password = $_GET['contraseña'];
$email = $_GET['email'];

echo "Bienvenido usuario con nombre " .$user. " y email " .$email;


?>