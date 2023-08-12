<?php

    require_once 'function.php';

    if(isset($_POST['btnCalcular'])){
        $janeiro = trim($_POST['janeiro']);
        $fevereiro = trim($_POST['fevereiro']);
        $marco = trim($_POST['marco']);
        $abril = trim($_POST['abril']);
        $maio = trim($_POST['maio']);
        $junho = trim($_POST['junho']);
        $julho = trim($_POST['julho']);
        $agosto = trim($_POST['agosto']);
        $setembro = trim($_POST['setembro']);
        $outubro = trim($_POST['outubro']);
        $novembro = trim($_POST['novembro']);
        $dezembro = trim($_POST['dezembro']);

        if(SomarMeses($janeiro, $fevereiro, $marco, $maio, $abril, $junho, $julho, $agosto, $setembro, $outubro, $novembro, $dezembro) == 0){
            $msg = 'Preencher todos os campos obrigatórios!';
        }else{
            $resultado = SomarMeses($janeiro, $fevereiro, $marco, $maio, $abril, $junho, $julho, $agosto, $setembro, $outubro, $novembro, $dezembro);
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
    <span><?= isset($msg) ? $msg : '' ?></span>
    <form action="atividade_4.php" method="POST">
        <label>Valor de Janeiro:</label>
        <input type="text" name="janeiro" value="<?= isset($janeiro) ? $janeiro : '' ?>">
        <br>
        <label>Valor de Fevereiro:</label>
        <input type="text" name="fevereiro" value="<?= isset($fevereiro) ? $fevereiro : '' ?>">
        <br>
        <label>Valor de Março:</label>
        <input type="text" name="marco" value="<?= isset($marco) ? $marco : '' ?>">
        <br>
        <label>Valor de Abril:</label>
        <input type="text" name="abril" value="<?= isset($abril) ? $abril : '' ?>">
        <br>
        <label>Valor de Maio:</label>
        <input type="text" name="maio" value="<?= isset($maio) ? $maio : '' ?>">
        <br>
        <label>Valor de Junho:</label>
        <input type="text" name="junho" value="<?= isset($junho) ? $junho : '' ?>">
        <br>
        <label>Valor de Julho:</label>
        <input type="text" name="julho" value="<?= isset($julho) ? $julho : '' ?>">
        <br>
        <label>Valor de Agosto:</label>
        <input type="text" name="agosto" value="<?= isset($agosto) ? $agosto : '' ?>">
        <br>
        <label>Valor de Setembro:</label>
        <input type="text" name="setembro" value="<?= isset($setembro) ? $setembro : '' ?>">
        <br>
        <label>Valor de Outubro:</label>
        <input type="text" name="outubro" value="<?= isset($outubro) ? $outubro : '' ?>">
        <br>
        <label>Valor de Novembro:</label>
        <input type="text" name="novembro" value="<?= isset($novembro) ? $novembro : '' ?>">
        <br>
        <label>Valor de Dezembro:</label>
        <input type="text" name="dezembro" value="<?= isset($dezembro) ? $dezembro : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <?php if(isset($resultado) && $resultado != ''){ ?>
        <span>Resultado Final:</span>
        <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
    <?php } ?>
</body>
</html>