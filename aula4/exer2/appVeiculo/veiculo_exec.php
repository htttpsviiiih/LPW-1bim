<?php
require_once "model/Veiculo.php";

    $Veiculo = new Veiculo($modelo,$marca,$combust);

    $Veiculo->setModelo($_POST["modelo"]);
    $Veiculo->setMarca($_POST["marca"]);
    $Veiculo->setCombust($_POST["combust"]);



    echo "<h1>Dados informados para o veículo</h1>";
    echo "Modelo: " .$Veiculo->getModelo(). "<br>";
    echo "Marca: " .$Veiculo->getMarca() . "<br>";
    echo "Combustível: ".$Veiculo->getCombustCompleto(). "<br>";
    echo "<br><br>";
    echo "<a href='veiculo_form.php'>Cadastrar outro veículo</a>";

  