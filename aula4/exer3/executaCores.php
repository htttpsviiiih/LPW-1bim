<?php

$corPagina = $_POST['corPagina'];
echo $corPagina;

if ($corPagina != "") {
    echo "<style>body { background-color: $corPagina; }</style>";
} else {
    echo "nenhuma cor selecionada";
    echo "<style>body { background-color: white; }</style>";
}
