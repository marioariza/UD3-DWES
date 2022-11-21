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

echo "<table class='table'>
<thead>
  <tr>
    <th scope='col'>Nombre</th>
    <th scope='col'>Apellidos</th>
    <th scope='col'>Email</th>
    <th scope='col'>URL</th>
    <th scope='col'>Sexo</th>
    <th scope='col'>Afición</th>
    <th scope='col'>Menús</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td scope='row'>".$nombre."</td>
    <td>".$apellidos."</td>
    <td>".$email."</td>
    <td>".$url."</td>
  </tr>
</tbody>
</table>"

?>