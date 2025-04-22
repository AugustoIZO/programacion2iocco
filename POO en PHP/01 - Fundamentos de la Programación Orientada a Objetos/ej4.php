<?php
class Coche {
    public $marca;
    public $modelo;
    public $color;

    public function detalles() {
        echo "Coche: $this->marca $this->modelo, Color: $this->color";
    }
}

$c = new Coche();
$c->marca = "Fiat";
$c->modelo = "Cronos";
$c->color = "Gris";
$c->detalles();
?>
