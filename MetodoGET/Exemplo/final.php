<?php
    if(
        isset($_GET['nome']) && $_GET['nome'] != '' &&
        isset($_GET['valor1']) && $_GET['valor1'] != '' &&
        isset($_GET['valor2']) && $_GET['valor2'] != ''
    ){
        $people = $_GET['nome'];
        $numero1 = $_GET['valor1'];
        $numero2 = $_GET['valor2'];

        $soma = $numero1 + $numero2;

        $resultado = 'Nome digitado foi: ' . $people . '<br>.O Resultado da soma: ' . $soma;
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
    <title>Final</title>
</head>
<body>
    <span>Nome: <?= isset($people) ? $people : '' ?></span>
    <br>
    <span>Resultado: <?= isset($soma) ? $soma : '' ?></span>
</body>
</html>