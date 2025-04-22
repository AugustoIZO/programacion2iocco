<?php
class Producto {
    public $nombre;
    public $precio;
    public $stock;

    public function valorInventario() {
        return $this->precio * $this->stock;
    }
}

$prod = new Producto();
$prod->nombre = "Zapatillas";
$prod->precio = 150000;
$prod->stock = 10;
echo "Valor del inventario: " . $prod->valorInventario();
?>
