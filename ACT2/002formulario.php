<?php 

echo $_GET['nombre']."<br>";
echo $_GET['apellidos']."<br>";
echo $_GET['email']."<br>";
echo $_GET['url']."<br>";
echo $_GET['familia']."<br>";

$sexos = $_GET['sexo'];
foreach ($sexos as $sex) {
    echo $sex."<br>";
}

$aficiones = $_GET['aficion'];
foreach ($aficiones as $afi) {
    echo $afi."<br>";
}


?>