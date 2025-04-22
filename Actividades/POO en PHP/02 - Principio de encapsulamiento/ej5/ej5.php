<?php
class Estudiante {
	private $calificaciones = [];

	public function agregarCalificacion($nota){
		if ($nota >=0 && $nota <= 10){
			$this->calificaciones[] = $nota;
		}
	}
	public function getPromedio() {
		if (count($this->calificaciones) === 0) return 0;
		return array_sum($this->calificaciones) / count($this->calificaciones);
	}
}

$estudiante = new Estudiante();
$estudiante->agregarCalificacion(8);
$estudiante->agregarCalificacion(5);
$estudiante->agregarCalificacion(10);
echo "Promedio: " . $estudiante->getPromedio();









?>
