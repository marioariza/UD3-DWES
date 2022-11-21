<?php 
echo "<b>Valores SERVER: </b><br>";
echo $_SERVER["PHP_SELF"]."<br>"; 
echo $_SERVER["SERVER_SOFTWARE"]."<br>"; 
echo $_SERVER["SERVER_NAME"]."<br>";
echo $_SERVER["REQUEST_METHOD"]."<br>"; 
echo $_SERVER["REQUEST_URI"]."<br>";
echo $_SERVER["QUERY_STRING"]."<br>";
echo $_SERVER["HTTP_USER_AGENT"]."<br><br>"; 

echo "------------------------<br><br>";

echo "<b>Valores GET (pasando y no pasando parámetro): </b><br><br>";

// Creamos un ternario para comprobar si tenemos parámetro, después podemos meter el parámetro por URL y si tampoco es así pues podemos un parámetro por defecto.
$pasando_parametros = $_GET['pasando_parametros'] != null ? $_GET['pasando_parametros'] : 'Mario';
echo "Pasando parámetros: Nombre = ".$pasando_parametros."<br>";

// Pasamos la variable sin párametro y nos dará error ya que no estará definido el parámetro.
$no_pasando_parametros = $_GET['no_pasando_parametros'];
echo "Sin pasar parámetros: Nombre = ".$no_pasando_parametros;

echo "------------------------<br><br>";



echo "------------------------<br><br>";

// Mostramos el valor de HTTP_REFERER con '$SERVER[HTTP_REFERER]'
echo "<b>Comprobar valor HTTP_REFERER: </b><br>".$_SERVER["HTTP_REFERER"]."<br>"; 
?>