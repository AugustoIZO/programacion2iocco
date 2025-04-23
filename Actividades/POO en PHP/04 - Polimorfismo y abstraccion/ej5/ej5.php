<?php
interface Reproducible {
    public function reproducir();
}

class Pelicula implements Reproducible {
    public function reproducir() {
        echo "Reproduciendo pelicula\n";
    }
}

class Podcast implements Reproducible {
    public function reproducir() {
        echo "Reproduciendo podcast\n";
    }
}

$media = [new Pelicula(), new Podcast()];
foreach ($media as $m) {
    $m->reproducir();
}
?>