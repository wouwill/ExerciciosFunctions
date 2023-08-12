<?php

    if(isset($_POST['btnCalcular'])){
        $valor1 = trim($_POST['vl1']);
        $valor2 = trim($_POST['vl2']);
        $valor3 = trim($_POST['vl3']);
        $valor4 = trim($_POST['vl4']);
        $valor5 = trim($_POST['vl5']);

        if($valor1 == '' || $valor2 == '' || $valor3 == '' || $valor4 == '' || $valor5 == ''){
            $msgError = '<div style="color: red; font-family: tahoma;">Preencher todos os Campos Obrigatórios!</div>';
        }else{
            $resultado = (($valor1 + $valor2) * 2) + ($valor3 + $valor4 + $valor5);

            if($resultado < 100){
                $situacao = 'Resultado é MENOR que 100!';
            }else if($resultado > 100){
                $situacao = 'Resultado é MAIOR que 100!';
            }else{
                $situacao = 'Resultado é IGUAL a 100!';
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
    <title>Atividade 1</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_1.php" method="POST">
        <label>Valor 1:</label>
        <input type="text" name="vl1" value="<?= isset($valor1) ? $valor1 : '' ?>">
        <br>
        <label>Valor 2:</label>
        <input type="text" name="vl2" value="<?= isset($valor2) ? $valor2 : '' ?>">
        <br>
        <label>Valor 3:</label>
        <input type="text" name="vl3" value="<?= isset($valor3) ? $valor3 : '' ?>">
        <br>
        <label>Valor 4:</label>
        <input type="text" name="vl4" value="<?= isset($valor4) ? $valor4 : '' ?>">
        <br>
        <label>Valor 5:</label>
        <input type="text" name="vl5" value="<?= isset($valor5) ? $valor5 : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <span><?= isset($msgError) ? $msgError : '' ?></span>
    <br>
    <?php if(isset($resultado) && $resultado != '' && isset($situacao) && $situacao != ''){ ?>
        <span>Resultado Final:</span>
        <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
        <br>
        <span>Situação: <?= isset($situacao) ? $situacao : '' ?>.</span>
    <?php } ?>
</body>
</html>