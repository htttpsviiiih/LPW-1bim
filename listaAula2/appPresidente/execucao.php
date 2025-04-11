<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once("/var/www/html/LPW-1bim/lista2/appPresidente/modelo/Presidente.php");


function getdados (array $dadosPresidente){

    echo "<tr>";
    echo "<td>";  "</td>"; 
    echo "</tr>";
}




$linha = array();

$p1 = new Presidente($nome, $numero, $anoInicio, $anoFim);
$p1 ->setNumero(20);
$p1 ->setNome("Eurico Gaspar Dutra");
$p1 ->setAnoInicio(1946);
$p1 ->setAnoFim(1951);

array_push($linha,$p1);


$p2 = new Presidente($nome, $numero, $anoInicio, $anoFim);
$p2 ->setNumero(16);
$p2 ->setNome("Getúlio Vargas");
$p2 ->setAnoInicio(1951);
$p2 ->setAnoFim(1956);

array_push($linha,$p2);

$p3 = new Presidente($nome, $numero, $anoInicio, $anoFim);
$p3 ->setNumero(17);
$p3 ->setNome("Café Filho");
$p3 ->setAnoInicio(1954);
$p3 ->setAnoFim(1955);

array_push($linha,$p3);

$p4 = new Presidente($nome, $numero, $anoInicio, $anoFim);
$p4 ->setNumero(18);
$p4 ->setNome("Nereu Ramos");
$p4 ->setAnoInicio(1955);
$p4 ->setAnoFim(1955);


array_push($linha,$p4);