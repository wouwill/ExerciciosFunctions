<?php

    if(isset($_POST['btnEnviar'])){
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        $ano = $_POST['ano'];

        echo 'Londrina, dia ' . $dia . ', de ' . $mes . ' de ' . $ano . '.<br>';
        echo $dia . '/' . $mes . '/' . $ano . '.<br>';

        echo "Londrina, dia $dia, de $mes de $ano.<br>";
        echo "$dia/$mes/$ano.<hr>";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body>
    <form action="atividade_4.php" method="POST">
        <label>Data de Hoje:</label>
        <input type="number" name="dia">
        <br>
        <label>Mês atual:</label>
        <!-- <input type="number" name="mes"> -->
        <select name="mes">
            <option value="">Selecione</option>
            <option value="Janeiro">Janeiro</option>
            <option value="Fevereiro">Fevereiro</option>
            <option value="Marco">Março</option>
            <option value="Abril">Abril</option>
            <option value="Maio">Maio</option>
            <option value="Junho">Junho</option>
            <option value="Julho">Julho</option>
            <option value="Agosto">Agosto</option>
            <option value="Setembro">Setembro</option>
            <option value="Outubro">Outubro</option>
            <option value="Novembro">Novembro</option>
            <option value="Dezembro">Dezembro</option>
        </select>
        <br>
        <label>Ano atual:</label>
        <input type="number" name="ano">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
</body>
</html>