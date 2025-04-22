<?php
class Estudiante {
    public $nombre;
    public $edad;
    public $matricula;

    public function mostrarDatos() {
        echo "Nombre: $this->nombre, Edad: $this->edad, Matrícula: $this->matricula";
    }
}

$e = new Estudiante();
$e->nombre = "Agustina";
$e->edad = 20;
$e->matricula = "20242025";
$e->mostrarDatos();
?>
