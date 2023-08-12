<?php

    if(isset($_POST['btnCalcular'])){
        $peso = trim($_POST['peso']);
        $altura = trim($_POST['altura']);

        if($peso == '' || $altura == ''){
            $msgError = '<div style="color: red; font-family: tahoma;">Preencher todos os Campos Obrigatórios!</div>';
        }else{
            $imc = round($peso / ($altura * $altura), 2);

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
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_5.php" method="POST">
        <label>Digite seu Peso:</label>
        <input type="text" name="peso" value="<?= isset($peso) ? $peso : '' ?>">
        <br>
        <label>Digite sua Altura:</label>
        <input type="text" name="altura" value="<?= isset($altura) ? $altura : '' ?>">
        <br>  
        <button name="btnCalcular">CALCULAR</button>      
    </form>
    <span><?= isset($msgError) ? $msgError : '' ?></span>
    <br>
    <?php if(isset($imc) && $imc != '' && isset($situacao) && $situacao != ''){ ?>
        <span>Resultado Final:</span>
        <input disabled value="<?= isset($imc) ? $imc : '' ?>">
        <br>
        <span>Situação: <?= isset($situacao) ? $situacao : '' ?>.</span>
    <?php } ?>
</body>
</html>