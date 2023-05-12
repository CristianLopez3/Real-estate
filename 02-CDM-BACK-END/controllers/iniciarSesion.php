<?php

// require_once('../model/consultas.php');
require_once('../models/validarSesion.php');
require_once('../models/conexion.php');

$email = $_POST['correo'];
$clave = md5($_POST['clave']);

$objSesion = new Sesion();
$result = $objSesion -> iniciarSesion($email, $clave);