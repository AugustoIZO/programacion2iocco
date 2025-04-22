<?php
class Rectangulo {
	private $largo;
	private $ancho;
	
	public function __construct($largo, $ancho) {
		$this->setDimensiones($largo, $ancho);
	}
	public function getLargo() {
		return $this->largo;
	}
	public function getAncho() {
		return $this->ancho;
	}
	public function setDimensiones($largo, $ancho) {
		if ($largo > 0 && $ancho > 0) {
			$this->largo = $largo;
			$this->ancho = $ancho;
		}
	}
}

$rectangulo = new Rectangulo(5, 10);
echo "Largo: " . $rectangulo->getLargo() . ", Ancho: " . $rectangulo->getAncho();


?>
