<?php

    require_once 'function.php';

    if(isset($_POST['btnCalcular'])){
        $salario = trim($_POST['salario']);
        $aumento = trim($_POST['aumento']);

        if(CalcularSalario($salario, $aumento) == 0){
            $msg = 'Preencher todos os campos obrigatórios!';
        }else{
            $resultado = CalcularSalario($salario, $aumento);
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <span><?= isset($msg) ? $msg : '' ?></span>
    <form action="atividade_2.php" method="POST">
        <label>Salário:</label>
        <input type="text" name="salario" value="<?= isset($salario) ? $salario : '' ?>">
        <br>
        <label>Aumento:</label>
        <input type="text" name="aumento" value="<?= isset($aumento) ? $aumento : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <?php if(isset($resultado) && $resultado != ''){ ?>
        <span>Resultado Final:</span>
        <input disabled value="R$ <?= isset($resultado) ? $resultado : '' ?>">
    <?php } ?>
</body>
</html>