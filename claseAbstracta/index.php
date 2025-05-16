<?php
include("../includes/header.php");
// Clase abstracta
abstract class Figura {
    // Atributo
    protected $color;

    // Constructor con un parametro
    public function __construct($color) {
        $this->color = $color;
    }

    // Metodo para obtener el color de la figura
    public function obtenerColor() {
        return $this->color;
    }

    // Método abstracto, que sera implementado en las clases hijas
    abstract public function calcularArea();
}

// Clase que hereda de la clase abstracta Figura
class Cuadrado extends Figura {
    // Atributo
    private $lado;

    // Constructor con dos parametros
    public function __construct($color, $lado) {
        // Llama al constructor de la clase padre
        parent::__construct($color);
        $this->lado = $lado;
    }

    // Metodo para calcular el area del cuadrado
    public function calcularArea() {
        return $this->lado * $this->lado;
    }
}

// Esta clase igual hereda de la clase abstracta
class Circulo extends Figura {
    // Atributo
    private $radio;

    public function __construct($color, $radio) {
        // Llama al constructor de la clase padre
        parent::__construct($color);
        $this->radio = $radio;
    }

    // Metodo para calcular el area del circulo
    public function calcularArea() {
        return pi() * pow($this->radio, 2);
    }
}

// Instanciamos la clase cuadrado
$cuadrado = new Cuadrado("negro", 5);
// Mostramos su informacion del cuadrado
echo "===== Cuadrado =====<br> Color: " . $cuadrado->obtenerColor() . "<br>Área: " . $cuadrado->calcularArea() . " m²<br><br>";

include("../includes/footer.php");
?>

<a class="btn btn-primary" href="../index.php">Regresar</a>