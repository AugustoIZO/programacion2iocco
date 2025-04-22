<?php
class Libro {
	private $numeroPaginas;

	public function __construct($paginas) {
		$this->setPaginas($paginas);
	}
	public function getPaginas() {
		return $this->numeroPaginas;
	}
	public function setPaginas($paginas){
		if($paginas > 0) {
			$this->numeroPaginas = $paginas;
		}
	}
}

$libro = new Libro(299);
$libro->setPaginas(350);
echo "Paginas: " . $libro->getPaginas();



?>
