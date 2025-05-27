<?php
require_once 'base/persona.php';
require_once 'modelos/empleado.php';

use Modelos\Empleado;

$empleado = new Empleado();
echo $empleado->saludar() . "\n";   // Heredado
echo $empleado->trabajar() . "\n";         // Propio
