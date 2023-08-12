<?php

    if(isset($_POST['btnCalcular'])){
        $salario = trim($_POST['salario']);

        if($salario == ''){
            $msgError = '<div style="color: red; font-family: tahoma;">Preencher todos os Campos Obrigatórios!</div>';
        }else{
            $primeiroAumento = ($salario * 15) / 100;
            $segundoAumento = ($salario * 18) / 100;
            $totalDeAumentos = $primeiroAumento + $segundoAumento;
            $resultado = $salario + $totalDeAumentos;

            if($totalDeAumentos <= 0){
                $situacao = 'Não houve aaumento!';
            }else if($totalDeAumentos <= 100){
                $situacao = 'Aumento RUIM!';
            }else if($totalDeAumentos > 100 && $totalDeAumentos <= 200){
                $situacao = 'Aumento RAZOAVEL!';
            }else if($totalDeAumentos > 200 && $totalDeAumentos <= 300){
                $situacao = 'Aumento BOM!';
            }else if($totalDeAumentos > 300 && $totalDeAumentos <= 400){
                $situacao = 'Aumento ÓTIMO!';
            }else{
                $situacao = 'Aumento EXCELENTE!';
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_6.php" method="POST">
        <label>Digite seu Salário:</label>
        <input type="text" name="salario" value="<?= isset($salario) ? $salario : '' ?>">
        <br> 
        <button name="btnCalcular">CALCULAR</button>      
    </form>
    <span><?= isset($msgError) ? $msgError : '' ?></span>
    <br>
    <?php if(
            isset($primeiroAumento) && $primeiroAumento != '' && isset($segundoAumento) && $segundoAumento != '' &&
            isset($totalDeAumentos) && $totalDeAumentos != '' && isset($resultado) && $resultado != '' &&
            isset($situacao) && $situacao != ''
        ){ ?>
        <span>Resultado Final:</span>
        <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
        <br>
        <span>Resultado do Primeiro Aumento:</span>
        <input disabled value="<?= isset($primeiroAumento) ? $primeiroAumento : '' ?>">
        <br>
        <span>Resultado do Segundo Aumento:</span>
        <input disabled value="<?= isset($segundoAumento) ? $segundoAumento : '' ?>">
        <br>
        <span>Total de Aumento:</span>
        <input disabled value="<?= isset($totalDeAumentos) ? $totalDeAumentos : '' ?>">
        <br>
        <span>Situação: <?= isset($situacao) ? $situacao : '' ?>.</span>
    <?php } ?>
</body>
</html>