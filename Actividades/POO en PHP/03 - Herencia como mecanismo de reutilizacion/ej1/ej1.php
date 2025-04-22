<?php
class Vehiculo {
	public $marca;

	public function __construct($marca) {
		$this->marca = $marca;
	}
	public function mover() {
		echo "El vehiculo {$this->marca} se esta moviendo\n";
	}
}
class Coche extends Vehiculo {
	public $puertas;

	public function __construct($marca, $puertas){
		parent::__construct($marca);
		$this->puertas = $puertas;
	}
	public function mover() {
<<<<<<< HEAD
		echo "El coche {$this->marca} con {this->puertas} puertas se mueve rapido.";
=======
		echo "El coche {$this->marca} con {$this->puertas} puertas se mueve rapido.";
>>>>>>> parent of cd47aba (Delete Actividades/POO en PHP directory)
	}
}

$coche = new Coche("Ford", 4);
$coche->mover();


?>
