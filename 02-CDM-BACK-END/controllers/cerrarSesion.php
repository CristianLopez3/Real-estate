<?php

require_once ('../models/validarSesion.php');

$objSesion = new Sesion();
$result = $objSesion -> cerrarSesion();