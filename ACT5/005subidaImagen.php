<?php 

if (isset($_FILES['archivo'])) {
    $errors = array();
    $ancho = $_POST['ancho'];
    $alto = $_POST['alto'];
    $archivo_name = $_FILES['archivo']['name'];
    $archivo_size = $_FILES['archivo']['size'];
    $archivo_tmp = $_FILES['archivo']['tmp_name'];
    $archivo_type = $_FILES['archivo']['type'];
    $archivo_ext = strtolower(pathinfo($archivo_name, PATHINFO_EXTENSION));
    $extensiones = array("jpeg", "jpg", "png");

    if (in_array($archivo_ext,$extensiones) === false) {
        $errors[] = 'Extensión no permitida. Prueba con imágenes jpeg, jpg o png.';
    }

    if ($archivo_size > 2097152) {
        $errors[] = 'El archivo no puede pesar más de 2MB.';
    }

    // $destino = "../images/";
    // $imagen_original = $archivo_name;
    // $img_original = imagecreatefromjpeg($imagen_original);
    // $ancho_original = imagesx($img_original);
    // $alto_original = imagesy($img_original);

    // $tmp = imagecreatetruecolor($ancho,$alto);
    // imagecopyresized($tmp, $img_original, 0, 0, 0, 0, $ancho, $alto, $ancho_original, $alto_original);
    // imagejpeg($tmp, $destino, 100);

    // list($width, $height) = getimagesize($archivo_tmp);
    // $thumb = imagecreatetruecolor($ancho,$alto);
    // $source = imagecreatefromjpeg($archivo_name);
    // imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $ancho, $alto, $height);
    
    if (empty($errors) == true) {
        move_uploaded_file($archivo_tmp, "../images/".$archivo_name);
        echo "La imagen se ha guardado correctamente.";
        echo "<br><br>";
        echo "<b>Archivo subido:</b><br><img src='../images/" .$archivo_name."' width='".$ancho."' height='".$alto."'></img><br><br>";
        echo "<b>Ancho:</b> " .$ancho. "<br><br>";
        echo "<b>Alto:</b> " .$alto;
    } else {
        echo"
        <!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='../css/custom.css'>
            <link rel='stylesheet' href='../css/bootstrap.css'>
            <title>Actividad 2 - UD3 - DWES</title>
        </head>
        <body>
            <form action='005subidaImagen.php' enctype='multipart/form-data' method='post'>
                <div class='mb-3 w-50'>
                        <label for='archivo' class='form-label'>Archivo imagen:</label>
                        <input type='file' class='form-control' id='exampleFormControlInput1' name='archivo'>
                </div>
                <div class='mb-3 w-50'>
                    <label for='ancho' class='form-label'>Ancho:</label>
                    <input type='number' class='form-control' id='exampleFormControlInput1' name='ancho' min='1' value='1'>
                </div>
                <div class='mb-3 w-50'>
                    <label for='alto' class='form-label'>Alto:</label>
                    <input type='number' class='form-control' id='exampleFormControlInput1' name='alto' min='1' value='1'>
                </div>
                <div class='mb-3 w-50'>
                    <button type='submit' class='btn btn-primary'>Enviar datos</button>
                </div>
            </form>
        </body>
        </html>";
        print_r('Archivo seleccionado no válido. Suba ímagenes (.jpeg, .jpg, .png).');
    }
}
?>