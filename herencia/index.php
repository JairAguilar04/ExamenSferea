<?php
include("Administrador.php");
include("../includes/header.php");

// Instanciamos la clase hija pasandole los argumentos de nombre, email y permisos
$admin = new Administrador("Jair Aguilar", "aguilar.jair.2001@gmail.com", ["Crear", "Editar", "Eliminar"]);

// Accedemos a su metodo y al metodo heredado de la clase padre
echo  $admin->obtenerInformacion();
echo $admin->obtenerRol();
include("../includes/footer.php");
?>
<br><a class="btn btn-primary" href="../index.php">Regresar</a>