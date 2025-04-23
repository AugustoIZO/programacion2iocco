<?php
interface Comunicable {
    public function enviarMensaje();
}

class Correo implements Comunicable {
    public function enviarMensaje() {
        echo "Enviando correo\n";
    }
}

class Texto implements Comunicable {
    public function enviarMensaje() {
        echo "Enviando mensaje\n";
    }
}

$mensajes = [new Correo(), new Texto()];
foreach ($mensajes as $m) {
    $m->enviarMensaje();
}
?>