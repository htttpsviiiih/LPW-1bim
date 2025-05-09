<?php
$retangulos = array(
    array("base" => 5, "altura" => 10),
    array("base" => 3, "altura" => 7),
    array("base" => 8, "altura" => 6)
);

foreach ($retangulos as $i =>  $retangulo) {
    $area = $retangulo["base"] * $retangulo["altura"];
    echo "<p>Área do " . $i+1 ."° retângulo: " . $area . "</p>";
 }