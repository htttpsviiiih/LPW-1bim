<?php $n1 = $_GET['n1'];
$n2 = $_GET['n2'];

echo "Primeiro Numero: $n1 <br>";
echo "Segundo Numero: $n2 <br>";
if (! isset($_GET['n1']) && ! isset($_GET['n2'])) {
    echo "Nenhum parametro foi informado, informe um número diferente de zero";
} elseif (! isset($_GET['n2'])) {
    echo "O segundo número infiormado é zero, informe um número diferente de zero";
} elseif (! isset($_GET['n1'])) {
    echo "O primeiro número infiormado é zero, informe um número diferente de zero";
} else {
    echo "Resultado da soma: " . ($n1 + $n2) . "<br>";
    echo "Resultado da subtração: " . ($n1 - $n2) . "<br>";
    echo "Resultado da multiplicação: " . ($n1 * $n2) . "<br>";
    echo "Resultado da divisão: " . ($n1 / $n2) . "<br>";
    echo "Resto da divisão: " . ($n1 % $n2) . "<br>";
}
