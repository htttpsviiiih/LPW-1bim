<?php
require_once ('model/Pessoa.php');

$tipo = $_GET['tipo'];

if (! isset($_GET['tipo'])) {
    echo "O tipo de pessoa não foi informado, informe o tipo de pessoa! (C ou A)<br>";
    exit;
}else{

    if ($tipo == 'C') {
        $pessoa = array(
            'nome' => $_GET['nome'],
            'sobrenome' => $_GET['sobrenome'],
            'idade' => $_GET['idade']
        );
    } elseif ($tipo == 'A') {
        $pessoa = new Pessoa($_GET['nome'], $_GET['sobrenome'], $_GET['idade']);
    }

}

if (! isset($_GET['nome']) || ! isset($_GET['sobrenome']) || ! isset($_GET['idade'])) {
    echo "Alguma informação não foi informada, informe o nome, sobrenome e idade!<br>";
}else{
    if(($_GET['tipo']) && $tipo == 'C'){
        echo "Nome: " . $pessoa['nome'] . "<br>";
        echo "Sobrenome: " . $pessoa['sobrenome'] . "<br>";
        echo "Idade: " . $pessoa['idade'] . "<br>";
    }else{
        echo "Nome: " . $pessoa->getNome() . "<br>";
        echo "Sobrenome: " . $pessoa->getSobrenome() . "<br>";
        echo "Idade: " . $pessoa->getIdade() . "<br>";
    }
    
    
    
}


