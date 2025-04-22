<?php
$num1 = 10;
$num2 = 20;

echo "Suma $num1 + $num2 = " . ($num1 + $num2) . "\n";
echo "Resta $num1 - $num2 = " . ($num1 - $num2) . "\n";
echo "Multiplicacion $num1 * $num2 = " . ($num1 * $num2) . "\n";
echo "Division $num1 / $num2 = " . ($num1 / $num2) . "\n";

$a = 12;
$b = 20;

if ($a > $b) {
    echo "$a es mayor que $b\n";
} elseif ($a < $b) {
    echo "$b es mayor que $a\n";
} else {
    echo "$a y $b son iguales\n";
}

echo "\n";


$texto1 = "Hola";
$texto2 = "Messi";

$frase = $texto1 . " " . $texto2;
echo "Resultado: $frase\n";
?>