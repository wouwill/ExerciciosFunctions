<?php
    if(
        isset($_GET['nome']) && $_GET['nome'] != '' &&
        isset($_GET['peso']) && $_GET['peso'] != '' &&
        isset($_GET['altura']) && $_GET['altura'] != '' 
    ){
        $n = $_GET['nome'];
        $p = $_GET['peso'];
        $a = $_GET['altura'];

        $imc = round(($p / ($a * $a)), 2);

        if($imc <= 0){
            $situacao = 'Resultado não encontrado!';
        }else if($imc <= 20){
            $situacao = 'Magro!';
        }else if($imc > 20 && $imc <= 25){
            $situacao = 'Peso Ideal!';
        }else if($imc > 25 && $imc <= 30){
            $situacao = 'Obeso!';
        }else{
            $situacao = 'Muito Obeso!';
        }
    }else{
        header('location: pg_inicial.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <span><b>Nome:</b> <?= isset($n) ? $n : '' ?></span>
    <br>
    <span><b>Peso:</b> <?= isset($p) ? $p : '' ?></span>
    <br>
    <span><b>Altura:</b> <?= isset($a) ? $a : '' ?></span>
    <br>
    <span><b>Resultado do IMC:</b> <?= isset($imc) ? $imc : '' ?></span>
    <br>
    <span><b>Situação:</b> <?= isset($situacao) ? $situacao : '' ?></span>
    <br>
</body>
</html>