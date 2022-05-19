<?php
    // datos para la coneccion a mysql
    define('DB_SERVER','basemamalona-db:3306'); //nombre o ip del servidor, esta ok con localhost
    define('DB_NAME','basemamalona'); //nombre de la base de datos
    define('DB_USER','usuariopedorro'); //nombre de usuario de la base de datos
    define('DB_PASS','passwordmamalon'); //contraseña del usuario de la base de datos
    $enlace = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    if (!$enlace) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
    echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;
    mysqli_close($enlace);
    ?>