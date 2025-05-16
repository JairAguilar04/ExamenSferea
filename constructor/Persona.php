<?php
class Persona {
    // Atributos
    private $nombre;
    private $edad;

    // Constructor con dos parametros (string y entero y entero)
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Metodo para mostrar su informacion de la persona
    public function obtenerInformacion() {
        return "===== Nombre y edad =====<br>Hola  $this->nombre, tienes $this->edad años.";
    }
}
?>