<?php

require_once('../models/conexion.php');
require_once('../models/consulta.php');

$objConsulta = new Consulta();
$id = $_POST['id'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$clave = $_POST['clave'];
$rol = $_POST['rol'];
$correo = $_POST['correo'];

if(strlen($nombres)>0 && strlen($apellidos)>0 &&  $telefono>0 && strlen($clave)>0 && strlen($rol)>0 && strlen($correo)){

    $clavemd = md5($clave);
    echo $clavemd;
    $consulta = $objConsulta -> insertar($id, $nombres, $apellidos, $telefono, $correo, $clavemd, $rol);
    echo '<script>alert("Usuario registrado con exito")</script>")';
    echo '<script>location.href="../views/login.php"</script>")';


} else{

    echo '<script>alert("rellene todos los campos")</script>")';
    echo '<script>location.href="register.php"</script>")';
}