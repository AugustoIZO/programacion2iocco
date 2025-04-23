<?php
abstract class Trabajador {
    abstract public function calcularIngreso();
}

class Fijo extends Trabajador {
    public $salario;
    public function __construct($salario) {
        $this->salario = $salario;
    }
    public function calcularIngreso() {
        return $this->salario;
    }
}

class Temporal extends Trabajador {
    public $horas, $pagoPorHora;
    public function __construct($horas, $pagoPorHora) {
        $this->horas = $horas;
        $this->pagoPorHora = $pagoPorHora;
    }
    public function calcularIngreso() {
        return $this->horas * $this->pagoPorHora;
    }
}

$trabajadores = [new Fijo(800000), new Temporal(40, 2000)];
foreach ($trabajadores as $t) {
    echo $t->calcularIngreso() . "\n";
}
?>