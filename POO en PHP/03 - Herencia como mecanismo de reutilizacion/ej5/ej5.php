<?php
class Producto {
    public $nombre;
    public $precio;

    public function __construct($nombre, $precio) {
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function detalle() {
        echo "Producto: $this->nombre, Precio: $this->precio\n";
    }
}

class ProductoOferta extends Producto {
    public $descuento;

    public function __construct($nombre, $precio, $descuento) {
        parent::__construct($nombre, $precio);
        $this->descuento = $descuento;
    }

    public function detalle() {
        $precioFinal = $this->precio - ($this->precio * $this->descuento / 100);
        echo "Producto: $this->nombre, Precio con descuento: $precioFinal\n";
    }
}


$oferta = new ProductoOferta("Zapatillas", 190000, 20);
$oferta->detalle();
?>