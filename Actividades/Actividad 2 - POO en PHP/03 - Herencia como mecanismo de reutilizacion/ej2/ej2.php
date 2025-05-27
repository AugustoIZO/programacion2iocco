<?php
class Animal{
	public $especie;

	public function __construct($especie) {
		$this->especie = $especie;
	}
	public function emitirSonido() {
		echo "Sonido generico\n";
	}
}

class Gato extends Animal {
	public function emitirSonido() {
		echo "Miau\n";
	}
}

$gato = new Gato("Felino");
$gato->emitirSonido();




?>
