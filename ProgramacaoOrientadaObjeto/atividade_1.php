<?php

    require_once 'ClassDAO.php';

    $combustivel = '';

    if(isset($_POST['btnCalcular'])){
        $combustivel = $_POST['combustivel'];
        $litros = $_POST['qtd'];

        $objDAO = new ClassDAO();
        $retorno = $objDAO->Combustivel($combustivel, $litros);

        if($retorno == 0){
            $msgError = '<div style="color: red; font-family: tahoma;">Preencher todos os Campos Obrigatórios!</div>';
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
<body style="font-family: Verdana, Geneva, Tahoma, sans-serif;">
    <span><?= isset($msgError) ? $msgError : '' ?></span>
    <form action="atividade_1.php" method="POST">
        <label>Selecione o Combustível:</label>
        <select name="combustivel">
            <option value="">Selecione</option>
            <option value="1" <?= $combustivel == 1 ? 'selected' : null ?>>Gasolina</option>
            <option value="2" <?= $combustivel == 2 ? 'selected' : null ?>>Etanol</option>
            <option value="3" <?= $combustivel == 3 ? 'selected' : null ?>>Diesel</option>
        </select>
        <br>
        <label>Quantidade de Litros:</label>
        <input type="number" name="qtd" value="<?= isset($litros) ? $litros : '' ?>">
        <br>
        <button name="btnCalcular">Calcular</button>
    </form>
    <?php if(isset($retorno) && $retorno != ''): ?>
        <span>Resultado Final: R$ <?= isset($retorno) ? $retorno : '' ?>.</span>
    <?php endif; ?>
</body>
</html>