<?php
include("Persona.php");
include("../includes/header.php");

// Instanciamos la clase Persona, pasandole los argumentos nombre y edad
$persona = new Persona("Jair", 24);
// Accedemos a sus metodo
echo $persona->obtenerInformacion();

include("../includes/footer.php");
?>
<br><br><a class="btn btn-primary" href="../index.php">Regresar</a>