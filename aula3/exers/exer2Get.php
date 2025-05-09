<?php

echo "Página Aberta!";
echo "<br>";
echo "Bem Vindo!";
echo "<br>";

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$n3 = $_GET['n3'];

echo "<br>";
echo "Número 1: $n1";
echo "<br>";
echo "Número 2: $n2";
echo "<br>";
echo "Número 3: $n3";
echo "<br>";
echo "A média aritimética dos números é: " . (($n1 + $n2 + $n3) / 3);