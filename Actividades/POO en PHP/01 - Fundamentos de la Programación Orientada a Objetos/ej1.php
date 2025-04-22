<?php
class Libro {
    public $titulo;
    public $autor;
}

$miLibro = new Libro();
$miLibro->titulo = "Cien años de soledad";
$miLibro->autor = "Gabriel García Márquez";

echo "Título: " . $miLibro->titulo . "<br>";
echo "Autor: " . $miLibro->autor;
?>
