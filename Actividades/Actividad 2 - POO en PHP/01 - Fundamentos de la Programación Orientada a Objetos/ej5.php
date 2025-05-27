<?php
class Persona {
    public $nombre;
    public $edad;

    public function esAdulto() {
        return $this->edad >= 18;
    }
}

$p = new Persona();
$p->nombre = "Santiago";
$p->edad = 27;
echo $p->nombre . " es adulto: " . ($p->esAdulto() ? "Si" : "No");
?>