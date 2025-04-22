<?php
class Persona {
	public $nombre;
	public $edad;

	public function __construct($nombre, $edad) {
		$this->nombre = $nombre;
		$this->edad = $edad;
	}
	public function saludar() {
		echo "Hola, soy $this->nombre\n";
	}
}

class Profesor extends Persona {
	public $materia;

	public function __construct($nombre, $edad, $materia) {
		parent::__construct($nombre, $edad);
		$this->materia = $materia;
	}
	public function saludar() {
		echo "Hola soy el profesor $this->nombre de $this->materia\n";
	}
}

$prof = new Profesor("Augusto", 20, "Musica");
$prof->saludar();




?>
