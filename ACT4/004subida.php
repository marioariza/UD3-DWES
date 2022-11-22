<?php 

if (isset($_FILES['archivo'])) {
    $errors = array();
    $archivo_name = $_FILES['archivo']['name'];
    $archivo_size = $_FILES['archivo']['size'];
    $archivo_tmp = $_FILES['archivo']['tmp_name'];
    $archivo_type = $_FILES['archivo']['type'];
    $archivo_ext = strtolower(pathinfo($archivo_name, PATHINFO_EXTENSION));
    
    if ($archivo_size > 2097152) {
        $errors[] = 'El archivo no puede pesar más de 2MB.';
    }

    if (empty($errors) == true) {
        move_uploaded_file($archivo_tmp, "../files/".$archivo_name);
        echo "La imagen se ha guardado correctamente.";
    } else {
        print_r($errors);
    }
}

$ancho = $_POST['ancho'];
$alto = $_POST['alto'];

echo "<br><br>";
echo "<b>Archivo subido:</b> " .$archivo_name. "<br><br>";
echo "<b>Ancho:</b> " .$ancho. "<br><br>";
echo "<b>Alto:</b> " .$alto;

?>