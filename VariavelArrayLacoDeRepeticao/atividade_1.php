<?php

    if(isset($_POST['btnEnviar'])){
        $nome = trim($_POST['nome']);
        $sobre = trim($_POST['sobre']);
        $idade = $_POST['idade'];
        $repetir = $_POST['rep'];

        if($nome == '' || $sobre == '' || $idade == '' || $repetir == ''){
            $msgError = '<div style="color: red; font-family: tahoma;">Preencher todos os Campos Obrigatórios!</div>';
        }else{
            for($i=1; $i <= $repetir; $i++){
                echo 'Meu nome é ' . $nome . ' ' . $sobre . ', tenho ' . $idade . ' de idade. Número da Repetição: ' . $i . '.<br>';
            }
            echo '<hr>';
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
    <span><?= isset($msgError) ? $msgError : '' ?></span>
    <form action="atividade_1.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Sobrenome:</label>
        <input type="text" name="sobre" value="<?= isset($sobre) ? $sobre : '' ?>">
        <br>
        <label>Idade:</label>
        <input type="number" name="idade" value="<?= isset($idade) ? $idade : '' ?>">
        <br>
        <label>Repetição:</label>
        <input type="number" name="rep" value="<?= isset($repetir) ? $repetir : '' ?>">
        <br>
        <button name="btnEnviar">Enviar</button>
    </form>
</body>
</html>