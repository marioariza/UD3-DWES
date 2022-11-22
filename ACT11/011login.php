<?php
if (isset($_POST['enviar'])) {
    $usuario = $_POST['meter_user'];
    $password = $_POST['meter_password'];

    if (empty($usuario) || empty($password)) {
        echo $error = "Debes introducir un usuario y contraseña";
        include "../ACT10/010index.php";
    } else {
        if ($usuario == "usuario" && $password == "usuario") {
            session_start();
            $_SESSION['user'] = $usuario;
            include "../ACT12/012peliculas.php";
        } else {
            echo $error = "Usuario o contraseña no válidos!";
            include "../ACT10/010index.php";
        }
    }
}
?>