<?php
class Usuario{
	private $edad;
	public function __construct($edad) {
		$this->setEdad($edad);
	}
	public function getEdad() {
		return $this->edad;
	}
	public function setEdad($nuevaEdad) {
		if ($nuevaEdad > 0) {
			$this->edad = $nuevaEdad;
		}
	}
}
$usuario = new Usuario(26);
$usuario->setEdad(30);
echo "Edad: " . $usuario->getEdad();


?>
