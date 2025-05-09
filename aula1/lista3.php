<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function desenhaLinha (array $dadosCidade){

echo "<tr>";
echo "<td>".$dadosCidade["nome"]. "</td>";
echo "<td>".$dadosCidade["habitantes"]. "</td>";
echo "<td>".$dadosCidade["area"]. "</td>";
echo "<td>".$dadosCidade["altitude"]. "</td>";
echo "<td>".$dadosCidade["estado"]. "</td>";
}

$linha = array();

$foz = array("nome" => "Foz do Iguaçu",
"habitantes" => 250000,
"area" => 500,
"altitude" => 145,
"estado" => "Paraná-PR"
);

array_push($foz,$linha);

$cascavel = array("nome" => "Cascavel",
"habitantes" => 300000,
"area" => 420,
"altitude" => 320,
"estado" => "Paraná-PR"
);

array_push($cascavel, $linha);

$chapeco = array("nome" => "Chápeco",
"habitantes" => 240000,
"area" => 120,
"altitude" => 620,
"estado" => "Santa Catarina-SC"
);

array_push($chapeco,$linha);

$blumenau = array("nome" => "Blumenau",
"habitantes" => 330000,
"area" => 200,
"altitude" => 85,
"estado" => "Santa Catarina-SC"
);

array_push($blumenau,$linha);




echo "<table border = '1'>";
//linha de cabecario

echo "<tr>";
echo "<td> Nome </td>";
echo "<td> Habitantes </td>";
echo "<td> Área </td>";
echo "<td> Altitude </td>";
echo "<td> Estado </td>";
echo "</tr>";

desenhaLinha($foz);
desenhaLinha($cascavel);
desenhaLinha($blumenau);
desenhaLinha($chapeco);



echo "</table>";
