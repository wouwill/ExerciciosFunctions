<?php

    require_once 'function.php';

    if(isset($_POST['btnCalcular'])){
        $numero1 = trim($_POST['vl1']);
        $numero2 = trim($_POST['vl2']);
        $numero3 = trim($_POST['vl3']);
        $numero4 = trim($_POST['vl4']);
        $numero5 = trim($_POST['vl5']);

        if(SomarNumeros($numero1, $numero2, $numero3, $numero4, $numero5) === 0){
            $msg = 'Preencher todos os campos obrigatórios!';
        }else{
            $retorno = SomarNumeros($numero1, $numero2, $numero3, $numero4, $numero5);
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <span><?= isset($msg) ? $msg : '' ?></span>
    <form action="atividade_3.php" method="POST">
        <label>Primeiro Número:</label>
        <input type="text" name="vl1" value="<?= isset($numero1) ? $numero1 : '' ?>">
        <br>
        <label>Segundo Número:</label>
        <input type="text" name="vl2" value="<?= isset($numero2) ? $numero2 : '' ?>">
        <br>
        <label>Terceiro Número:</label>
        <input type="text" name="vl3" value="<?= isset($numero3) ? $numero3 : '' ?>">
        <br>
        <label>Quarto Número:</label>
        <input type="text" name="vl4" value="<?= isset($numero4) ? $numero4 : '' ?>">
        <br>
        <label>Quinto Número:</label>
        <input type="text" name="vl5" value="<?= isset($numero5) ? $numero5 : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <?php if(isset($retorno) && $retorno != ''){ ?>
        <span>Resultado Final:</span>
        <input disabled value="<?= isset($retorno) ? $retorno : '' ?>">
    <?php } ?>
</body>
</html>