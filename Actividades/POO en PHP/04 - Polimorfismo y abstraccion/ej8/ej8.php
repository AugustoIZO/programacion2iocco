<?php
abstract class Instrumento {
    abstract public function tocar();
}

class Violin extends Instrumento {
    public function tocar() {
        echo "Tocando el violin\n";
    }
}

class Bateria extends Instrumento {
    public function tocar() {
        echo "Tocando la bateria\n";
    }
}

$instrumentos = [new Violin(), new Bateria()];
foreach ($instrumentos as $i) {
    $i->tocar();
}
