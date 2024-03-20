<?php
    session_start();
    $user = $_SESSION['usuario'];
    if (!isset($_SESSION['usuario'])) {
    
        echo '<script>;
            alert("Inicia sesión!");
            location.href = "../login.php";
            </script>';
    }
?>