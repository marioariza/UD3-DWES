<?php
if ( isset( $_COOKIE['visitas'] ) ) {
    setcookie('visitas', $_COOKIE['visitas'] + 1, time() + 3600 * 24 );
    $mensaje = 'Numero de visitas a la página: '.$_COOKIE['visitas'];
    echo $mensaje;
}
else {
    setcookie( 'visitas', 1, time() + 3600 * 24 );
    $mensaje = 'Bienvenido por primera vez a nuesta web';
    echo $mensaje;
}
?>
