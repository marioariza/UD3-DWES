<?php 
echo "<b>Valores SERVER: </b><br>";
echo $_SERVER["PHP_SELF"]."<br>"; // El nombre del archivo de script ejecutándose actualmente
echo $_SERVER["SERVER_SOFTWARE"]."<br>"; // Cadena de identificación del servidor dada en las cabeceras de respuesta a las peticiones.
echo $_SERVER["SERVER_NAME"]."<br>"; // El nombre del host del servidor donde se está ejecutando actualmente el script.
echo $_SERVER["REQUEST_METHOD"]."<br>"; // Método de petición empleado para acceder a la página, por ejemplo 'GET', 'HEAD', 'POST', 'PUT'.
echo $_SERVER["REQUEST_URI"]."<br>"; // La URI que se empleó para acceder a la página.
echo $_SERVER["QUERY_STRING"]."<br>"; // Si existe, la cadena de la consulta de la petición de la página.
echo $_SERVER["HTTP_USER_AGENT"]."<br><br>"; // Contenido de la cabecera User-Agent: de la petición actual, si existe. 

echo "------------------------<br><br>";

echo "<b>Valores GET (pasando y no pasando parámetro): </b><br><br>";

// Creamos un ternario para comprobar si tenemos parámetro, después podemos meter el parámetro por URL y si tampoco es así pues podemos un parámetro por defecto.
$pasando_parametros = $_GET["nombre"] != null ? $_GET["nombre"] : "Mario";
echo "Pasando parámetros: Nombre = ".$pasando_parametros."<br>";

// Pasamos la variable sin párametro y nos dará error ya que no estará definido el parámetro.
$no_pasando_parametros = $_GET[''];
echo "Sin pasar parámetros: Nombre = ".$no_pasando_parametros."<br><br>";

echo "------------------------<br><br>";

echo "<b>Valores POST (mediante formulario): </b><br><br>";

echo "Nombre: ".$_POST["nombre"]."<br>";
echo "Apellidos: ".$_POST["apellidos"]."<br>";
echo "Email: ".$_POST["email"]."<br><br>";

echo "------------------------<br><br>";

// Mostramos el valor de HTTP_REFERER con '$SERVER[HTTP_REFERER]'
echo "<b>Comprobar valor HTTP_REFERER: </b><br>".$_SERVER["HTTP_REFERER"]."<br>"; 
?>