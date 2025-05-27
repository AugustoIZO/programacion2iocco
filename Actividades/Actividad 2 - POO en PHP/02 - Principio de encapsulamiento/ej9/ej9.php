<?php
class Circulo {
	private $radio;

	public function __construct($radio){
		$this->setRadio($radio);
	}
	public function getRadio() {
		return $this->radio;
	}
	public function setRadio($radio) {
		if ($radio > 0) {
			$this->radio = $radio;
		}
	}
}

$circulo = new Circulo(20);
$circulo->setRadio(10);
echo "Radio: " . $circulo->getRadio();





?>
