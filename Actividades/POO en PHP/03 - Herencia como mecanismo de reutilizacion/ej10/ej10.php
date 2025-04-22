<?php
class Animal {
    public $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function moverse() {
        echo "$this->nombre se mueve\n";
    }
}

class Pez extends Animal {
    public $tipoAgua;

    public function __construct($nombre, $tipoAgua) {
        parent::__construct($nombre);
        $this->tipoAgua = $tipoAgua;
    }

    public function moverse() {
        echo "$this->nombre nada en agua $this->tipoAgua\n";
    }
}


$pez = new Pez("Nemo", "salada");
$pez->moverse();
?>