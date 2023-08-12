<?php

    // if: SE
    // else if: OU SE | SE NÃO
    // else: OU
    // isset: EXISTIR

    if(isset($_POST['btnEnviar'])){
        $nome = $_POST['nome'];
        $descricao = $_POST['desc'];
        $preco = $_POST['preco'];
        $ingredientes = $_POST['ingr'];

        echo 'Nome: ' . $nome . '.<br>' . 'Descrição: ' . $descricao . '.<br>' . 'Preço: ' . $preco . 
        '.<br>' . 'Ingredientes: ' . $ingredientes . '.<hr>';
        
        echo "Nome: $nome.<br>Descrição: $descricao.<br>Preço: $preco.<br>Ingredientes: $ingredientes.<hr>";
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
<body>
    <form action="atividade_1.php" method="POST">
        <label>Nome do Prato:</label>
        <input type="text" name="nome">
        <br>
        <label>Descrição:</label>
        <input type="text" name="desc">
        <br>
        <label>Preço:</label>
        <input type="text" name="preco">
        <br>
        <label>Ingredientes:</label>
        <input type="text" name="ingr">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
</body>
</html>