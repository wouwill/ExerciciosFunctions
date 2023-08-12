<?php
    if(
        isset($_GET['nome']) && $_GET['nome'] != '' &&
        isset($_GET['valor']) && $_GET['valor'] != '' &&
        isset($_GET['ganhoPerda']) && $_GET['ganhoPerda'] != '' &&
        isset($_GET['banco']) && $_GET['banco'] != '' 
    ){
        $nome = $_GET['nome'];
        $valor = $_GET['valor'];
        $siglaGP = $_GET['ganhoPerda'];
        $siglaBanco = $_GET['banco'];

        $resultado = '';

        if($siglaGP == 'G' || $siglaGP == 'g'){
            $resultado = $valor + (($valor * 3) / 100);
        }else if($siglaGP == 'P' || $siglaGP == 'p'){
            $resultado = $valor - (($valor * 5) / 100);
        }
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
    <title>Resultado</title>
</head>
<body>
    <span>Valor: <?= isset($valor) ? $valor : '' ?></span>
    <br>
    <span>Sigla de Operação: <?= isset($siglaGP) ? $siglaGP : '' ?></span>
    <br>
    <span>Sigla do Banco: <?= isset($siglaBanco) ? $siglaBanco : '' ?></span>
    <br>
    <span>Resultado do Investimando: <?= isset($resultado) ? $resultado : '' ?></span>
</body>
</html>