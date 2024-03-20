<?php
// Configuración de la base de datos
$servername = "db";
$username = "adm";
$password = "adm123";
$dbname = "mi_sitio_DB";

$conexion = mysqli_connect( $servername, $username, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
$db = mysqli_select_db( $conexion, $dbname ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
mysqli_set_charset($conexion, 'utf8');
?>
    

