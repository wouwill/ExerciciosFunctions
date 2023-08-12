<?php

    if(isset($_POST['btnEnviar'])){
        $nome = trim($_POST['nome']);
        $peso = trim($_POST['peso']);
        $altura = trim($_POST['altura']);

        if($nome == '' || $peso == '' || $altura == ''){
            $msgError = '<div style="color: red; font-family: tahoma;">Preencher todos os Campos Obrigatórios!</div>';
        }else{
            header("location: pg_final.php?nome=$nome&peso=$peso&altura=$altura");
            exit;
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
    <form action="pg_inicial.php" method="POST">
        <label>Seu Nome:</label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Seu Peso:</label>
        <input type="text" name="peso" value="<?= isset($peso) ? $peso : '' ?>">
        <br>        
        <label>Seu Altura:</label>
        <input type="text" name="altura" value="<?= isset($altura) ? $altura : '' ?>">
        <br>  
        <button name="btnEnviar">ENVIAR</button>
    </form>
    <?php if(isset($msgError) && $msgError != ''){ ?>
        <span><?= isset($msgError) ? $msgError : '' ?></span>
    <?php } ?>
</body>
</html>