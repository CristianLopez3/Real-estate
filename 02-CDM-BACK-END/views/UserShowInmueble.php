
<?php 

require_once('../models/conexion.php');
require_once('../models/consulta.php');
require_once('../controllers/mostrarInfo.php');
require_once('../models/validarSesion.php');
require_once('../models/permisosUsuarios.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Inmueble - Tu Inmueble Ideal</title>
    <link rel="stylesheet" href="css/master.css">
</head>
<body>
    <main class="show">
        <header>
            <h2>Consultar Inmueble</h2>
            <a href="UserDashboard.php" class="back"></a>
            <a href="../controllers/cerrarSesion.php" class="close"></a>
        </header>
        <?php 
     
        userShowInmueble();
        
        ?>
        
    </main>
</body>
</html>