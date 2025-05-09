<?php

$par = 0;
$impar = 0;


for ($i = 20; $i < 70; $i++) {
    if ($i % 2 == 0) {
        $par = $par + $i;
    } else {
        $impar = $impar + $i;
    }
}

echo "A soma dos números pares entre 20 e 70 é igual a ". $par . " e a soma de números ímpares entre 20 e 70 é igual a ". $impar . "<br>";

echo "A soma entre a quantidade de números pares e impares desses dois números é: ". $par + $impar . "<br>"; 