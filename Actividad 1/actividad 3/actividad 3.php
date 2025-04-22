<?php
$edad = 20;

if ($edad >= 18) {
    echo "Mayor de edad\n";
} else {
    echo "Menor de edad\n";
}
echo "\n";

for ($i = 1; $i <= 20; $i++) {
    echo "$i ";
}
echo "\n\n";

$contador = 1;
$suma = 0;
while ($contador <= 50) {
    $suma += $contador;
    $contador++;
}
echo "La suma total es: $suma\n\n";

$nombres = ["Ana", "Bruno", "Carlos", "Delfina"];

echo "<ul>\n";
foreach ($nombres as $nombre) {
    echo "  <li>$nombre</li>\n";
}
echo "</ul>\n\n";

$dia = 3;

switch ($dia) {
    case 1:
        echo "Lunes\n";
        break;
    case 2:
        echo "Martes\n";
        break;
    case 3:
        echo "Miércoles\n";
        break;
    case 4:
        echo "Jueves\n";
        break;
    case 5:
        echo "Viernes\n";
        break;
    case 6:
        echo "Sábado\n";
        break;
    case 7:
        echo "Domingo\n";
        break;
    default:
        echo "Día inválido\n";
        break;
}
?>