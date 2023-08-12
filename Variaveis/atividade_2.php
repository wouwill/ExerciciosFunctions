<?php

    // if: SE
    // else if: OU SE | SE NÃO
    // else: OU
    // isset: EXISTIR

    if(isset($_POST['btnEnviar'])){
        $empresa = $_POST['nEmpresa'];
        $site = $_POST['site'];
        $facebook = $_POST['face'];
        $instagram = $_POST['insta'];
        $descricao = $_POST['desc'];

        echo 'Nome da Empresa: ' . $empresa . '.<br>' . 'Site: ' . $site . '.<br>' . 'Facebook: ' . $facebook .
        '.<br>' . 'Instagram: ' . $instagram . '.<br>' . 'Descrição: ' . $descricao . '.<hr>';
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
<body>
    <form action="atividade_2.php" method="POST">
        <label>Nome da empresa:</label>
        <input type="text" name="nEmpresa">
        <br>
        <label>Site:</label>
        <input type="text" name="site">
        <br>
        <label>Facebook:</label>
        <input type="text" name="face">
        <br>
        <label>Instagram:</label>
        <input type="text" name="insta">
        <br>
        <label>Descrição:</label>
        <input type="text" name="desc">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
</body>
</html>