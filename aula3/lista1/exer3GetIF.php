<?php

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];

echo "Primeiro Numero: $n1 <br>";
echo "Segundo Numero: $n2 <br>";
if ($n1 == 0 && $n2 == 0) {
    echo "Os dois números informados são zero, informe um número diferente de zero";
} elseif ($n1 == 0) {
    echo "O primeiro número informado é zero, informe um número diferente de zero";
} elseif ($n2 == 0) {
    echo "O segundo número informado é zero, informe um número diferente de zero";
}else {
    echo "Resultado da soma: " . ($n1 + $n2) . "<br>";
    echo "Resultado da subtração: " . ($n1 - $n2) . "<br>";
    echo "Resultado da multiplicação: " . ($n1 * $n2) . "<br>";
    echo "Resultado da divisão: " . ($n1 / $n2) . "<br>";
    echo "Resto da divisão: " . ($n1 % $n2) . "<br>";
}