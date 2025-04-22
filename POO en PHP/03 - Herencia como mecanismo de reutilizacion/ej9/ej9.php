<?php
class Empleado {
    public $nombre;
    public $salario;

    public function __construct($nombre, $salario) {
        $this->nombre = $nombre;
        $this->salario = $salario;
    }

    public function calcularPago() {
        return $this->salario;
    }
}

class Freelancer extends Empleado {
    private $horas;

    public function __construct($nombre, $salario, $horas) {
        parent::__construct($nombre, $salario);
        $this->horas = $horas;
    }

    public function calcularPago() {
        return $this->salario * $this->horas;
    }
}


$freelancer = new Freelancer("Tito", 2000, 8);
echo "Pago del freelancer: " . $freelancer->calcularPago() . "\n";
?>