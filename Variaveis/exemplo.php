<?php

    // if : SE
    // else if : OU SE / SE NÃO
    // else : OU
    // isset : EXISTIR

    if(isset($_POST['btnEnviar'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobre'];

        echo 'Meu nome é ' . $nome . ' ' . $sobrenome . '.<br>';
        // echo '<br>';
        echo "Meu nome é $nome $sobrenome.<hr>";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
    <form action="exemplo.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome">
        <br>
        <label>Sobrenome:</label>
        <input type="text" name="sobre">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
</body>
</html>