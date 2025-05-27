<?php
interface Nadador {
    public function nadar();
}

class Pez implements Nadador {
    public function nadar() {
        echo "El pez nada en el agua\n";
    }
}

class Persona implements Nadador {
    public function nadar() {
        echo "La persona nada en la piscina\n";
    }
}

$nadadores = [new Pez(), new Persona()];
foreach ($nadadores as $n) {
    $n->nadar();
}
?>