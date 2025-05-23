<?php
require_once 'contratos/renderable.php';
require_once 'vistas/vista.php';

use Vistas\Vistas;

$vista = new Vistas();
echo $vista->renderizar();
