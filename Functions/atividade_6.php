<?php

    require_once 'function.php';

    if(isset($_POST['btnCalcular'])){
        $valor1 = trim($_POST['valor1']);
        $valor2 = trim($_POST['valor2']);
        $valor3 = trim($_POST['valor3']);
        $valor4 = trim($_POST['valor4']);
        $valor5 = trim($_POST['valor5']);
        $valor6 = trim($_POST['valor6']);
        $valor7 = trim($_POST['valor7']);
        $valor8 = trim($_POST['valor8']);
        $valor9 = trim($_POST['valor9']);
        $valor10 = trim($_POST['valor10']);

        if(CalcularExercicio($valor1, $valor2, $valor3, $valor4, $valor5, $valor6, $valor7, $valor8, $valor9, $valor10) == 0){
            $msg = 'Preencher todos os campos obrigatórios!';
        }else{
            $resultado = CalcularExercicio($valor1, $valor2, $valor3, $valor4, $valor5, $valor6, $valor7, $valor8, $valor9, $valor10);
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
    <span><?= isset($msg) ? $msg : '' ?></span>
    <form action="atividade_6.php" method="POST">
        <label>Valor 1:</label>
        <input type="text" name="valor1" value="<?= isset($valor1) ? $valor1 : '' ?>">
        <br>
        <label>Valor 2:</label>
        <input type="text" name="valor2" value="<?= isset($valor2) ? $valor2 : '' ?>">
        <br>
        <label>Valor 3:</label>
        <input type="text" name="valor3" value="<?= isset($valor3) ? $valor3 : '' ?>">
        <br>
        <label>Valor 4:</label>
        <input type="text" name="valor4" value="<?= isset($valor4) ? $valor4 : '' ?>">
        <br>
        <label>Valor 5:</label>
        <input type="text" name="valor5" value="<?= isset($valor5) ? $valor5 : '' ?>">
        <br>
        <label>Valor 6:</label>
        <input type="text" name="valor6" value="<?= isset($valor6) ? $valor6 : '' ?>">
        <br>
        <label>Valor 7:</label>
        <input type="text" name="valor7" value="<?= isset($valor7) ? $valor7 : '' ?>">
        <br>
        <label>Valor 8:</label>
        <input type="text" name="valor8" value="<?= isset($valor8) ? $valor8 : '' ?>">
        <br>
        <label>Valor 9:</label>
        <input type="text" name="valor9" value="<?= isset($valor9) ? $valor9 : '' ?>">
        <br>
        <label>Valor 10:</label>
        <input type="text" name="valor10" value="<?= isset($valor10) ? $valor10 : '' ?>">
        <br>
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <?php if(isset($resultado) && $resultado != ''){ ?>
        <span>Resultado Final:</span>
        <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
    <?php } ?>    
</body>
</html>