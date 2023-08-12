<?php

    if(isset($_POST['btnCalcular'])){
        $valor1 = trim($_POST['vl1']);
        $valor2 = trim($_POST['vl2']);
        $valor3 = trim($_POST['vl3']);
        $valor4 = trim($_POST['vl4']);
        $valor5 = trim($_POST['vl5']);

        $resultado = ($valor1 + $valor2 + $valor3) / ($valor4 * $valor5);

        // $soma = $valor1 + $valor2 + $valor3;
        // $mult = $valor4 * $valor5;
        // $resultado = $soma / $mult;
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
    <form action="atividade_2.php" method="POST">
        <label>Primeir Valor:</label>
        <input type="text" name="vl1" value="<?= isset($valor1) ? $valor1 : '' ?>">
        <br>
        <label>Segundo Valor:</label>
        <input type="text" name="vl2" value="<?= isset($valor2) ? $valor2 : '' ?>">
        <br>        
        <label>Terceiro Valor:</label>
        <input type="text" name="vl3" value="<?= isset($valor3) ? $valor3 : '' ?>">
        <br>        
        <label>Quarto Valor:</label>
        <input type="text" name="vl4" value="<?= isset($valor4) ? $valor4 : '' ?>">
        <br>        
        <label>Quinto Valor:</label>
        <input type="text" name="vl5" value="<?= isset($valor5) ? $valor5 : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <?php if(isset($resultado) && $resultado != ''){ ?>
        <span>Resultado Final:</span>
        <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
    <?php } ?>
</body>
</html>