<?php
include("Usuario.php");

// Clase hija
class Administrador extends Usuario {
    // Atributo
    private $permisos;

    // Constructor con tres parametros
    public function __construct($nombre, $email, $permisos) {
         // Llama al constructor de la clase padre
        parent::__construct($nombre, $email);
        $this->permisos = $permisos;
    }

    public function obtenerInformacion() {
        // Obtienen el metodo de la clase padre
        $info = parent::obtenerInformacion();
        
        return "==== Información ==== <br>" . $info . "===== Permisos ===== <br> " . implode("<br>", $this->permisos ) . "<br><br>";
    }

    public function obtenerRol() {
        return "======= Rol ======= <br>" . "Administrador";
    }
}
?>