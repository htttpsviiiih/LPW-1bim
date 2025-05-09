<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selecionando Cores</title>
</head>

<body>
    <form action="executaCores.php" method="POST">
        <p>Selecione a cor:</p>
        <select name="corPagina">
            <option value=""></option>
            <option value="#ff9494" style="background-color: #ff9494; color: white;">Vermelho</option>
            <option value="#aaf7aa" style="background-color: #aaf7aa;">Verde</option>
            <option value="#7878ff" style="background-color: #7878ff; color: white;">Azul</option>
            <option value="#ffffbe" style="background-color: #ffffbe;">Amarelo</option>
            <option value="#ffe1ab" style="background-color: #ffe1ab;">Laranja</option>
            <option value="#e798e7" style="background-color: #e798e7; color: white;">Roxo</option>
        </select><br>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>