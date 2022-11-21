<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Document</title>
</head>
<body>

    <?php 
        $nombre = $_GET['nombre']."<br>";
        $apellidos = $_GET['apellidos']."<br>";
        $email = $_GET['email']."<br>";
        $url = $_GET['url']."<br>";
        $familia = $_GET['familia']."<br>";
        $sexos = $_GET['sexo'];
        $aficiones = $_GET['aficion'];
        $menus = $_GET['menus'];
    ?>

    <table class='table'>
        <thead>
            <tr>
                <th scope='col'>Nombre</th>
                <th scope='col'>Apellidos</th>
                <th scope='col'>Email</th>
                <th scope='col'>URL</th>
                <th scope='col'>Familia</th>
                <th scope='col'>Sexo</th>
                <th scope='col'>Afición</th>
                <th scope='col'>Menús</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope='row'><?=$nombre?></td>
                <td><?=$apellidos?></td>
                <td><?=$email?></td>
                <td><?=$url?></td>
                <td><?=$familia?></td>
                <td><?php foreach ($sexos as $sex) {
                            echo $sex;
                    }
                    ?>
                </td>
                <td><?php foreach ($aficiones as $afi) {
                            echo $afi."<br>";
                    }
                    ?>
                </td>
                <td><?php foreach ($menus as $men) {
                            echo $men;
                    }
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
