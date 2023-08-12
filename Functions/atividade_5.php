<?php

    require_once 'function.php';

    if(isset($_POST['btnCalcular'])){
        $produto = trim($_POST['produto']);
        $valor = trim($_POST['valor']);
        $quantidade = trim($_POST['quantidade']);

        if(CalcularVenda($valor, $quantidade) == 0){
            $msg = 'Preencher todos os campos obrigatórios!';
        }else{
            $resultado = CalcularVenda($valor, $quantidade);
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <span><?= isset($msg) ? $msg : '' ?></span>
    <form action="atividade_5.php" method="POST">
        <label>Digite o Nome do Produto:</label>
        <input type="text" name="produto" value="<?= isset($produto) ? $produto : '' ?>">
        <br>
        <label>Valor Unitário:</label>
        <input type="text" name="valor" value="<?= isset($valor) ? $valor : '' ?>">
        <br>
        <label>Quantidade:</label>
        <input type="text" name="quantidade" value="<?= isset($quantidade) ? $quantidade : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <?php if(isset($resultado) && $resultado != '' && isset($produto) && $produto != ''){ ?>
        <span>Produto:</span>
        <input disabled value="<?= isset($produto) ? $produto : '' ?>">
        <br>
        <span>Resultado Final:</span>
        <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
    <?php } ?>    
</body>
</html>