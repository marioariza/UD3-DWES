<?php 

$nombre = $_GET['nombre']."<br>";
$apellidos = $_GET['apellidos']."<br>";
$email = $_GET['email']."<br>";
$url = $_GET['url']."<br>";
$familia = $_GET['familia']."<br>";

$sexos = $_GET['sexo'];
foreach ($sexos as $sex) {
    echo $sex."<br>";
}

$aficiones = $_GET['aficion'];
foreach ($aficiones as $afi) {
    echo $afi."<br>";
}

$menus = $_GET['menus'];
foreach ($menus as $me) {
    echo $me."<br>";
}

?>