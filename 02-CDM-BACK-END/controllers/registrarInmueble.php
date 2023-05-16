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
// $foto = $_POST['foto'];


if(strlen($categoria)>0 && strlen($tipo)>0 &&  $tamano>0 && $precio>0 && strlen($ciudad)>0 && strlen($barrio)){

    //  En esta variable definimos la ruta a guardar en la base de datos
    $foto = "../upload/".$_FILES['foto']['name'];
    //  Este es el codigo que mueve la imagen en la ruta definida en la variable foto
    $result = move_uploaded_file($_FILES['foto']['tmp_name'], $foto);
    $consulta = $objConsulta -> insertarInmueble($tipo, $categoria, $precio, $tamano, $ciudad, $barrio, $foto);
    echo '<script>alert("Inmueble registrado con exito")</script>")';
    echo '<script>location.href="../views/inmoApartamentos.php"</script>")';


} else{

    echo '<script>alert("rellene todos los campos")</script>")';
    echo '<script>location.href="inmoAdd.php"</script>")';

}