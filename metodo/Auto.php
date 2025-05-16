<?php
class Auto {
    // Atributos
    private $modelo;

    // Constructor con un parametro
    public function __construct($modelo)
    {
        $this->modelo = $modelo;
    }

    // Metodo para ver la velocidad del auto, con un parametro
    public function obtenerVelocidad($velocidad){
        if($velocidad > 0){
            $velocidadAuto = "El auto $this->modelo va a una velocidad de $velocidad km/h";
            return $velocidadAuto;
        }
        
        return "El auto esta detenido";
    }
}
?>