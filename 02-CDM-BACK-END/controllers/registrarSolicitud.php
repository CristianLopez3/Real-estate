<?php 

require_once ('../models/conexion.php');
require_once ('../models/consulta.php');
require_once ('../models/validarSesion.php');
// Anteiormente se trae tambien el documento de validar sesion para poder hacer uso de las variables de SESSION_STAR

$id_inm = $_GET['id'];

// para poder registrar el id del usuario del validar sesion, para eso es necesario invocar el sesion start 
session_start();

$id_user = $_SESSION['id'];
$fecha = date('Y-m-d');

$objConsultas = new Consulta();
$consulta = $objConsultas -> registrarSolicitud($id_inm, $id_user, $fecha);


?>