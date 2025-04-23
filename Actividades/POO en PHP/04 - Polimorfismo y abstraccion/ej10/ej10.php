<?php
abstract class Animal {
    abstract public function alimentarse();
}

class Leon extends Animal {
    public function alimentarse() {
        echo "El leon caza para alimentarse\n";
    }
}

class Pajaro extends Animal {
    public function alimentarse() {
        echo "El pajaro come semillas\n";
    }
}

$animales = [new Leon(), new Pajaro()];
foreach ($animales as $a) {
    $a->alimentarse();
}
