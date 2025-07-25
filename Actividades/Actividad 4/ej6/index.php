<?php
class Autoloader
{
    public static function register()
    {
        spl_autoload_register(function ($class) {
            $file = __DIR__ . '/' . str_replace('\\', '/', $class) .'.php';
            if (file_exists($file)) {
                require $file;
                return true;
            }
            return false;
        });
    }   
}
Autoloader::register();


use Controladores\ControladorUsuario;

$controlador = new ControladorUsuario();
echo $controlador->inicio();
