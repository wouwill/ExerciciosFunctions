<?php
    if(
        isset($_GET['valor1']) && $_GET['valor1'] != '' &&
        isset($_GET['valor2']) && $_GET['valor2'] != '' &&
        isset($_GET['valor3']) && $_GET['valor3'] != '' &&
        isset($_GET['valor4']) && $_GET['valor4'] != '' &&
        isset($_GET['valor5']) && $_GET['valor5'] != '' 
    ){
        $numero1 = $_GET['valor1'];
        $numero2 = $_GET['valor2'];
        $numero3 = $_GET['valor3'];
        $numero4 = $_GET['valor4'];
        $numero5 = $_GET['valor5'];

        $resultado = round((($numero1 + $numero2 + $numero3) / ($numero4 * $numero5)), 2);

    }else{
        header('location: inicio.php');
        exit;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <span>Resultado: <?= isset($resultado) ? $resultado : '' ?>.</span>
</body>
</html>