<?php
class Vehiculo {
    protected $velocidad;

    public function __construct($velocidad = 0) {
        $this->velocidad = $velocidad;
    }

    public function acelerar() {
        $this->velocidad += 5;
    }

    public function getVelocidad() {
        return $this->velocidad;
    }
}

class Camion extends Vehiculo {
    public function acelerar() {
        $this->velocidad += 80;
    }
}


$camion = new Camion();
$camion->acelerar();
echo "Velocidad del camión: " . $camion->getVelocidad() . " km/h\n";
?>