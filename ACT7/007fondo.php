<?php 

if (isset($_POST['color'])) {
    $color = $_POST['color'];
    setcookie('color', $color, time()+8000000);
} else {
    if (isset($_COOKIE['color'])) {
        $color = $_COOKIE['color'];
    } else {
        $color = 'white';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Actividad 7 - UD3 - DWES</title>
</head>
<body <?php echo "style= 'background-color:$color'";?>>
    <form action="007fondo.php" method="post">
        <div class="mb-3 w-50">
            <label for="color">Escoge color de fondo:</label>
            <select name="color">
                <option value="red">Rojo</option>
                <option value="blue">Azul</option>
                <option value="green">Verde</option>
                <option value="yellow">Amarillo</option>
                <option value="silver">Gris</option>
                <option value="black">Negro</option>
            </select>
        </div>
        <div class="mb-3 w-50">
            <button type="submit" class="btn btn-primary">Enviar color</button>
        </div>
    </form>
</body>
</html>