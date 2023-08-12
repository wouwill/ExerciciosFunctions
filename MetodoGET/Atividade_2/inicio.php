<?php

    if(isset($_POST['btnEnviar'])){
        $nome = trim($_POST['nome']);
        $valor = trim($_POST['valor']);
        $ganhoPerda = trim($_POST['ganhoPerda']);
        $banco = trim($_POST['banco']);

        if($nome == '' || $valor == '' || $ganhoPerda == '' || $banco == ''){
            $msgError = '<div style="color: red; font-family: tahoma;">Preencher todos os Campos Obrigatórios!</div><hr>';
        }else if($ganhoPerda != 'p' && $ganhoPerda != 'P' && $ganhoPerda != 'G' && $ganhoPerda != 'g'){
            $msgError = '<div style="color: red; font-family: tahoma;">Digite a Sigla Correta da Operação!</div><hr>';
        }else if($banco != 'SA' && $banco != 'sa' && $banco != 'IT' && $banco != 'it' && $banco != 'SI' && $banco != 'si'){
            $msgError = '<div style="color: red; font-family: tahoma;">Digite a Sigla Correta do Banco!</div><hr>';
        }else{
            header("location: final.php?nome=$nome&valor=$valor&ganhoPerda=$ganhoPerda&banco=$banco");
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
    <title>Atividade 2</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; text-align: center;">
    <span><?= isset($msgError) ? $msgError : '' ?></span>
    <form action="inicio.php" method="POST">
        <label>Seu Nome:</label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <hr>
        <label>Valor do Investimento:</label>
        <input type="text" name="valor" value="<?= isset($valor) ? $valor : '' ?>">
        <hr>
        <label>Digite uma Sigla (Operação):</label>
        <br>
        <h5 style="padding: 0px; margin: 0px;">- "Ganho de 3%" - SIGLA "G".</h5>
        <h5 style="padding: 0px; margin: 0px;">- "Perda de 5%" - SIGLA "P".</h5>
        <br>
        <input type="text" name="ganhoPerda" value="<?= isset($ganhoPerda) ? $ganhoPerda : '' ?>">
        <hr>
        <label>Digite uma Sigla (Banco):</label>
        <br>
        <h5 style="padding: 0px; margin: 0px;">- "Santander" - SIGLA "SA".</h5>
        <h5 style="padding: 0px; margin: 0px;">- "Itau" - SIGLA "IT".</h5>
        <h5 style="padding: 0px; margin: 0px;">- "Sicredi" - SIGLA "SI".</h5>
        <br>
        <input type="text" name="banco" value="<?= isset($banco) ? $banco : '' ?>">
        <br>        
        <button name="btnEnviar">ENVIAR</button>
    </form>
</body>
</html>