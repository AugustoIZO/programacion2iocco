<?php
class Trabajador {
    public $nombre;
    public $cargo;
    public $salario;

    public function informacion() {
        echo "Nombre: $this->nombre, Cargo: $this->cargo, Salario: $this->salario";
    }
}

$t = new Trabajador();
$t->nombre = "Mauro";
$t->cargo = "Contador";
$t->salario = 900000;
$t->informacion();
?>
