<?php
class Producto {
	private $precio;
	public function __construct($precio){
		$this->setPrecio($precio);
	}
	public function getPrecio(){
		return $this->precio;
	}
	public function setPrecio($nuevoPrecio){
		if ($nuevoPrecio > 0){
			$this->precio = $nuevoPrecio;
		}
	}
}
$producto = new Producto(100);
$producto->setPrecio(150);
echo "Precio: " . $producto->getPrecio();

?>
