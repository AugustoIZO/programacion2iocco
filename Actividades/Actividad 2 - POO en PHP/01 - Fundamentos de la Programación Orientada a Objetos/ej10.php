<?php
class Triangulo {
    public $base;
    public $altura;

    public function area() {
        return ($this->base * $this->altura) / 2;
    }
}

$tri = new Triangulo();
$tri->base = 6;
$tri->altura = 4;
echo "El area del triangulo es: " . $tri->area();
?>
