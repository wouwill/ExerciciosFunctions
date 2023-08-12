<?php

    // ltrim: Remove espaço a esquerda
    // rtrim: Remove espaço a direita
    // trim: Remove todos os excessos de espaço

    if(isset($_POST['btnSomar'])){
        $janeiro = ltrim(rtrim($_POST['janeiro']));
        $fevereiro = ltrim(rtrim($_POST['fevereiro']));
        $marco = ltrim(rtrim($_POST['marco']));
        $abril = ltrim(rtrim($_POST['abril']));
        $maio = ltrim(rtrim($_POST['maio']));
        $junho = ltrim(rtrim($_POST['junho']));
        $julho = ltrim(rtrim($_POST['julho']));
        $agosto = ltrim(rtrim($_POST['agosto']));
        $setembro = trim($_POST['setembro']);
        $outubro = trim($_POST['outubro']);
        $novembro = trim($_POST['novembro']);
        $dezembro = trim($_POST['dezembro']);

        $resultado = $janeiro + $fevereiro + $marco + $abril + $maio + $junho + $julho + $agosto + $setembro + $outubro + $novembro + $dezembro;
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
        <label>Ganhos de Janeiro:</label>
        <input type="text" name="janeiro" value="<?= isset($janeiro) ? $janeiro : '' ?>">
        <br>
        <label>Ganhos de Fevereiro:</label>
        <input type="text" name="fevereiro" value="<?= isset($fevereiro) ? $fevereiro : '' ?>">
        <br>        
        <label>Ganhos de Março:</label>
        <input type="text" name="marco" value="<?= isset($marco) ? $marco : '' ?>">
        <br>        
        <label>Ganhos de Abril:</label>
        <input type="text" name="abril" value="<?= isset($abril) ? $abril : '' ?>">
        <br>        
        <label>Ganhos de Maio:</label>
        <input type="text" name="maio" value="<?= isset($maio) ? $maio : '' ?>">
        <br>        
        <label>Ganhos de Junho:</label>
        <input type="text" name="junho" value="<?= isset($junho) ? $junho : '' ?>">
        <br>        
        <label>Ganhos de Julho:</label>
        <input type="text" name="julho" value="<?= isset($julho) ? $julho : '' ?>">
        <br>        
        <label>Ganhos de Agosto:</label>
        <input type="text" name="agosto" value="<?= isset($agosto) ? $agosto : '' ?>">
        <br>        
        <label>Ganhos de Setembro:</label>
        <input type="text" name="setembro" value="<?= isset($setembro) ? $setembro : '' ?>">
        <br>        
        <label>Ganhos de Outubro:</label>
        <input type="text" name="outubro" value="<?= isset($outubro) ? $outubro : '' ?>">
        <br>        
        <label>Ganhos de Novembro:</label>
        <input type="text" name="novembro" value="<?= isset($novembro) ? $novembro : '' ?>">
        <br>        
        <label>Ganhos de Dezembro:</label>
        <input type="text" name="dezembro" value="<?= isset($dezembro) ? $dezembro : '' ?>">
        <br>
        <button name="btnSomar">SOMAR</button>
    </form>
    <?php if(isset($resultado) && $resultado != ''){ ?>
        <span>Resultado Final:</span>
        <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
    <?php } ?>
</body>
</html>