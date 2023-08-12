<?php

    // if: SE
    // else if: OU SE | SE NÃO
    // else: OU
    // isset: EXISTIR

    if(isset($_POST['btnEnviar'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobre'];
        $assunto = $_POST['ass'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];

        echo 'Nome: ' . $nome . '.<br>Site: ' . $sobrenome . '.<br>Assunto: ' . $assunto .
        '.<br>E-mail: ' . $email . '.<br>Mensagem: ' . $msg . '.<hr>';
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
<body>
    <form action="atividade_3.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome">
        <br>
        <label>Sobrenome:</label>
        <input type="text" name="sobre">
        <br>
        <label>Assunto:</label>
        <input type="text" name="ass">
        <br>
        <label>E-mail:</label>
        <input type="email" name="email">
        <br>
        <label>Mensagem:</label>
        <input type="text" name="msg">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
</body>
</html>