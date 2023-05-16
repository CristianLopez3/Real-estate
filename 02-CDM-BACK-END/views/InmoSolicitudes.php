<?php 
require_once('../models/conexion.php');
require_once('../models/consulta.php');
require_once('../controllers/mostrarInfo.php');
 
require_once('../models/validarSesion.php');
require_once('../models/permisosInmo.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Solicitudes || Tu Inmueble Ideal</title>
    <link rel="stylesheet" href="css/master.css">
</head>

<body>
    <main class="dashboard solicitudes">
        <header>
            <h2>Administrar Solicitudes</h2>
            <a href="InmoDashboard.php" class="back"></a>
            <a href="../controllers/cerrarSesion.php" class="close"></a>
        </header>
        <table>
           <?php 
             showSolicitudes();
           ?>
        </table>
    </main>
</body>

</html>