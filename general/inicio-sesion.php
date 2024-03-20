<?php
    session_start();
    include('../components/conection.php'); 

    $usuario =$conexion->real_escape_string($_POST['usuario']); 
    $clave =$conexion->real_escape_string($_POST['clave']); 
    $sql = "SELECT * FROM users WHERE usuario = '$usuario' and clave = '$clave'";
    $resultado=mysqli_query($conexion,$sql);
    $filas=mysqli_fetch_array($resultado);

    $_SESSION['usuario'] = $usuario;
    $_SESSION['filas'] = $filas;
    if($filas['tipoUsuario']=='Maestro'){ //administrador
        echo '<script>;
        location.href = "../maestro.php";
        </script>';
        
    }else if($filas['tipoUsuario']=='Estudiante'){ //consultor
        echo '<script>;
        location.href = "../estudiante.php";
        </script>';
        
    }else{
        echo $usuario, $clave;
        echo '<script> alert("Error al iniciar sesi\u00F3n!");
        location.href = "../index.php";
        </script>';
        
    }

    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>