<?php
abstract class Vehiculo {
    abstract public function desplazarse();
}

class Bicicleta extends Vehiculo {
    public function desplazarse() {
        echo "La bicicleta se desplaza por la calle\n";
    }
}

class Avion extends Vehiculo {
    public function desplazarse() {
        echo "El avion se desplaza por el aire\n";
    }
}

$vehiculos = [new Bicicleta(), new Avion()];
foreach ($vehiculos as $v) {
    $v->desplazarse();
}
?>