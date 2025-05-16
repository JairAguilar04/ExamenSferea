<?php
// Clase padre
class Usuario {
    // Atributos
    private $nombre;
    private $email;

    // Constructor con dos parametros
    public function __construct($nombre, $email) {
        $this->nombre = $nombre;
        $this->email = $email;
    }

    // Metodo para obtener la informacion del usuario
    public function obtenerInformacion() {
        return "Nombre: $this->nombre <br>Email: $this->email<br><br>";
    }
}
?>