<?php

    function mediaAlunos($a,$b,$c){

    $media = $a + $b + $c / 3;

    return $media;
    };

    $aluno1 = 8;
    $aluno2 = 4;
    $aluno3 = 9;
    $aluno4 = 10;
    $aluno5 = 0;
    $aluno6 = 3;
    $aluno7 = 7;
    $aluno8 = 4;
    $aluno9 = 8;
 

    echo "a soma entre as médias dos alunos é: ". mediaAlunos($aluno1,$aluno3,$aluno3) . "<br>";
    echo "a soma entre as médias dos alunos é: ". mediaAlunos($aluno4,$aluno5,$aluno6) . "<br>";
    echo "a soma entre as médias dos alunos é: ". mediaAlunos($aluno7,$aluno8,$aluno9) . "<br>";
     
