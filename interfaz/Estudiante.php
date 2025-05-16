<?php
require_once 'Person.php';

class Estudiante implements Person {
    // Atributos
    private $nombre;
    private $carrera;

    // Constructor con dos parametros
    public function __construct($nombre, $carrera) {
        // Inicializamos los atributos
        $this->nombre = $nombre;
        $this->carrera = $carrera;
    }

    // Implementamos el metodo de la interfaz
    public function obtenerInformacion() {
        return "Nombre: $this->nombre<br>Carrera: $this->carrera<br>";
    }
}

?>