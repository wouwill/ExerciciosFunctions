<?php

    if(isset($_POST['btnCalcular'])){
        $salario = trim($_POST['salario']);
        $aumento = trim($_POST['aumento']);

        if($salario == '' || $aumento == ''){
            $msgError = '<div style="color: red; font-family: tahoma;">Preencher todos os Campos Obrigatórios!</div>';
        }else{
            $percentual = ($salario * $aumento) / 100;
            $somaTotal = $salario + $percentual;

            // $resultado = $resultAumento - $salario;
            // if($resultAumento >= 0 && <= 100){}
            
            if($percentual <= 0){
                $situacao = 'Não houve aumento!';
            }else if($percentual <= 100){
                $situacao = 'Aumento de Nivel 1!';
            }else if($percentual > 100 && $percentual <= 200){
                $situacao = 'Aumento de Nivel 2!';
            }else if($percentual > 200 && $percentual <= 300){
                $situacao = 'Aumento de Nivel 3!';
            }else if($percentual > 300 && $percentual <= 400){
                $situacao = 'Aumento de Nivel 4!';
            }else{
                $situacao = 'Aumento de Nivel 5!';
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
    <title>Atividade 4</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_4.php" method="POST">
        <label>Salário:</label>
        <input type="text" name="salario" value="<?= isset($salario) ? $salario : '' ?>">
        <br>
        <label>Aumento (Percentual):</label>
        <input type="text" name="aumento" value="<?= isset($aumento) ? $aumento : '' ?>">
        <br>  
        <button name="btnCalcular">CALCULAR</button>      
    </form>
    <span><?= isset($msgError) ? $msgError : '' ?></span>
    <br>
    <?php if(isset($somaTotal) && $somaTotal != '' && isset($percentual) && $percentual != ''){ ?>
        <span>Resultado Final:</span>
        <input disabled value="<?= isset($somaTotal) ? $somaTotal : '' ?>">
        <br>
        <span>Resultado do Aumento:</span>
        <input disabled value="<?= isset($percentual) ? $percentual : '' ?>">
        <br>
        <span>Situação: <?= isset($situacao) ? $situacao : '' ?>.</span>
    <?php } ?>
</body>
</html>