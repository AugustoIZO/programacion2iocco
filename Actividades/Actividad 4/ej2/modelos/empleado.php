<?php
namespace Modelos;

use Base\Persona;

class Empleado extends Persona {
    public function trabajar() {
        return "Estoy trabajando.";
    }
}
