<?php

    // Declarar uma Variável do tipo Global!
    $valor1 = '';
    $valor2 = '';
    $resultado = '';

    if(isset($_POST['btnSomar'])){
        $valor1 = $_POST['vl1'];
        $valor2 = $_POST['vl2'];

        $resultado = $valor1 + $valor2;
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
        <label>Primeiro Valor:</label>
        <input type="number" name="vl1" value="<?= $valor1 ?>">
        <br>
        <label>Segundo Valor:</label>
        <input type="number" name="vl2" value="<?= $valor2 ?>">
        <br>
        <button name="btnSomar">SOMAR</button>
    </form>
    <span>Resultado Final:</span>
    <input disabled value="<?= $resultado ?>">
</body>
</html>