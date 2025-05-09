<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];

// Verifica se os campos estão vazios
if ($nome == "" && $idade == "") {
    echo "<script>alert('Volte e preencha os campos corretamente!');</script>";
    echo "<a href='exer1.php'>Voltar</a>";
}elseif ($nome == "") {
    echo "<script>alert('Volte e preencha o campo nome!');</script>";
    echo "<a href='exer1.php'>Voltar</a>";
}elseif ($idade == "") {    
    echo "<script>alert('Volte e preencha o campo idade!');</script>";
    echo "<a href='exer1.php'>Voltar</a>";
} else {
    echo "<script>alert('Cadastro realizado com sucesso!');</script>";
    echo "<h3>Cadastro de Pessoa</h3>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Idade: $idade</p>";
    echo "<a href='exer1.php'>Voltar</a>";
}