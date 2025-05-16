<?php
require_once 'Person.php';

class Empleado implements Person {
    // Atributos
    private $nombre;
    private $puesto;

    // Constructor con dos parametros
    public function __construct($nombre, $puesto) {
        // Inicializamos los atributos
        $this->nombre = $nombre;
        $this->puesto = $puesto;
    }

    // Implementamos el metodo de la interfaz
    public function obtenerInformacion() {
        return "Nombre: $this->nombre<br>Puesto: $this->puesto";
    }
}
?>