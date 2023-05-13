<?php 

require_once('../models/conexion.php');
require_once('../models/consulta.php');

$objConsulta = new Consulta();
$tipo = $_POST['tipo'];
$categoria = $_POST['categoria'];
$tamano = $_POST['tamano'];
$precio = $_POST['precio'];
$ciudad = $_POST['ciudad'];
$barrio = $_POST['barrio'];
$id = $_POST['id'];
// $foto = $_POST['foto'];


if(strlen($categoria)>0 && strlen($tipo)>0 &&  $tamano>0 && $precio>0 && strlen($ciudad)>0 && strlen($barrio)){

    $consulta = $objConsulta -> modificarInmueble($id, $tipo, $categoria, $precio, $tamano, $ciudad, $barrio);
    echo '<script>alert("Inmueble eliminado con exito")</script>")';
    echo '<script>location.href="../views/inmoApartamentos.php"</script>")';


} else{

    echo '<script>alert("rellene todos los campos")</script>")';
    echo '<script>location.href="inmoAdd.php"</script>")';

}