<?php

    if(isset($_POST['btnRevelar'])){
        $quantidade = $_POST['quantidade'];

        if($quantidade == ''){
            $msgError = '<div style="color: red; font-family: tahoma;">Preencher todos os Campos Obrigatórios!</div>';
        }else{
            echo '<hr>INÍCIO DO LAÇO DE REPETIÇÃO!<br><br>';

            for($i=1; $i <= $quantidade; $i++){
                echo 'Posição da Variável: $i = ' . $i . '.<br>';
            }

            echo '<br>INÍCIO DO LAÇO DE REPETIÇÃO!<hr>';
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
    <span><?= isset($msgError) ? $msgError : '' ?></span>
    <form action="atividade_3.php" method="POST">
        <label>Digite um número que informa a quantidade de Repetições desejada:</label>
        <input type="number" name="quantidade" value="<?= isset($quantidade) ? $quantidade : '' ?>">
        <br>
        <button name="btnRevelar">Executar</button>
    </form>
</body>
</html>