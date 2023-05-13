<?php 

require_once('../models/conexion.php');
require_once('../models/consulta.php');

$id = $_GET['id'];
$objConsulta = new Consulta();
$consulta = $objConsulta -> eliminarInmueble($id);