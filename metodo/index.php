<?php
require_once("Auto.php");
include("../includes/header.php");

// Intanciamos la clase Auto
$auto = new Auto("GOLF GTI");
// Llamamos su metodo y le pasamos el argumento
echo $auto->obtenerVelocidad(220);
include("../includes/footer.php");
?>

<br><a class="btn btn-primary" href="../index.php">Regresar</a>