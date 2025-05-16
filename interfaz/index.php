<?php
require_once 'Empleado.php';
include("../includes/header.php");

// Instanciamos la clase Empleado y le pasamos los argumentos
$empleado = new Empleado("Mark Zuckerberg", "Desarrollador");
// Llamamos su metodo
echo "===== Empleado =====<br>" . $empleado->obtenerInformacion();
include("../includes/footer.php");
?>
<br><a class="btn btn-primary" href="../index.php">Regresar</a>