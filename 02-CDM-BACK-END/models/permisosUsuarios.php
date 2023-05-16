<?php

session_start();

if(!isset($_SESSION['autenticado'])){

    echo '<script>alert("No tienes permisos para acceder a este vista")</script>';
    echo '<script>location.href="../views/login.php"</script>';

} 


if($_SESSION['rol'] != 'usuarios'){
    
    echo '<script>alert("Tu rol no tiene permisos para acceder a este vista")</script>';
    echo '<script>location.href="../views/login.php"</script>';

}