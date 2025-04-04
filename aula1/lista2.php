<?php


$carro1 = [
    "modelo" => "Polo",
    "marca" => "Volkswagen",
    "foto" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT332NOW_ASk-wAM2vala-bbCGC16opLn0r-A&s"
];

$carro2 = [
    "modelo" => "Civic",
    "marca" => "Honda",
    "foto" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROOtqVpEGipCxijwmhPeLBcbShHLkxe4IHXQ&s"
];

$carro3 = [
    "modelo" => "Corolla",
    "marca" => "Toyota",
    "foto" => "https://www.euroequipamentos.com.br/imagens/equipamentos/b3.jpg"
];

$carro4 = [
    "modelo" => "Onix",
    "marca" => "Chevrolet",
    "foto" => "https://cdn.autopapo.com.br/box/uploads/2019/02/05151359/chevrolet-onix-ltz-3.jpg"
];

$carro5 = [
    "modelo" => "HB20",
    "marca" => "Hyundai",
    "foto" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCKm-Z5-cI6o_rM3g3f3wQEEQTQZswkqeJrA&shttps://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCKm-Z5-cI6o_rM3g3f3wQEEQTQZswkqeJrA&s"
];


$carro = [$carro1, $carro2, $carro3, $carro4, $carro5];


foreach ($carros as $carro) {
    echo "<div style='border: solid 1px; width: 300px; margin-top: 20px; padding: 10px;'>";
    echo $carro["modelo"] . "<br>";
    echo $carro["marca"] . "<br>";
    echo "<img style='width: 100%; height: auto;' src='" . $carro["foto"] . "' /><br>";
    echo "</div>";
}
