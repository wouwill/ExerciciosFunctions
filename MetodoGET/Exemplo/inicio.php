<?php

    if(isset($_POST['btnCalcular'])){
        $nome = trim($_POST['nome']);
        $valor1 = trim($_POST['valor1']);
        $valor2 = trim($_POST['valor2']);

        if($nome == '' || $valor1 == '' || $valor2 == ''){
            $msgError = '<div style="color: red; font-family: tahoma;">Preencher todos os Campos Obrigatórios!</div>';
        }else{
            // Este linha de comando, que vai realizar o envio pela URL = Via GET!
            header("location: final.php?nome=$nome&valor1=$valor1&valor2=$valor2");
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
    <title>Início</title>
</head>
<body>
    <form action="inicio.php" method="POST">
        <label>Digite seu Nome:</label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Primeiro Valor:</label>
        <input type="text" name="valor1" value="<?= isset($valor1) ? $valor1 : '' ?>">
        <br>        
        <label>Segundo Valor:</label>
        <input type="text" name="valor2" value="<?= isset($valor2) ? $valor2 : '' ?>">
        <br>    
        <button name="btnCalcular">CALCULAR</button>    
    </form>
    <span><?= isset($msgError) ? $msgError : '' ?></span>
</body>
</html>