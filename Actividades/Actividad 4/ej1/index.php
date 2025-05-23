<?php
require_once 'modelos/usuario.php';

use Modelos\Usuario;

$usuario = new Usuario();
echo $usuario->decirHola();
