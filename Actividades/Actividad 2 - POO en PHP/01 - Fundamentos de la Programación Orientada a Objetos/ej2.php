<?php
class Rectangulo {
    public $largo;
    public $ancho;

    public function calcularArea() {
        return $this->largo * $this->ancho;
    }
}

$r = new Rectangulo();
$r->largo = 10;
$r->ancho = 8;
echo "El area del rectangulo es: " . $r->calcularArea() ."\n";
?>
