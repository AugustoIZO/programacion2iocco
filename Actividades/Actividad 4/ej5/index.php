<?php

class Autoloader
{
    public static function register()
    {
        spl_autoload_register(function ($class) {
            $file = __DIR__ . '/src/' . str_replace('\\', '/', $class) .'.php';
            if (file_exists($file)) {
                require $file;
                return true;
            }
            return false;
        });
    }
}
Autoloader::register();

use Modelos\Usuario;

$usuario = new Usuario();
echo $usuario->getNombre();
