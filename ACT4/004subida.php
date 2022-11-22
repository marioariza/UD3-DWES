<?php 

$archivo = $_POST['archivo'];
$ancho = $_POST['ancho'];
$alto = $_POST['alto'];

echo "<b>Archivo subido:</b> " .$_FILES['archivo']. "<br><br>";
echo "<b>Ancho:</b> " .$ancho. "<br><br>";
echo "<b>Alto:</b> " .$alto;

?>