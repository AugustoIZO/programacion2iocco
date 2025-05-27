<?php
namespace Vistas;

use Contratos\Renderable;

class Vistas implements Renderable {
    public function renderizar()
    {
        return "renderizando vista\n";
    }
}