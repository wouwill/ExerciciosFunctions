<?php

    if(isset($_POST['btnEnviar'])){
        $fruta1 = trim($_POST['fruta1']);
        $fruta2 = trim($_POST['fruta2']);
        $fruta3 = trim($_POST['fruta3']);
        $fruta4 = trim($_POST['fruta4']);
        $fruta5 = trim($_POST['fruta5']);

        if($fruta1 == '' || $fruta2 == '' || $fruta3 == '' || $fruta4 == '' || $fruta5 == ''){
            $msgError = '<div style="color: red; font-family: tahoma;">Preencher todos os Campos Obrigatórios!</div>';
        }else{

            // Construção da Variável de Tipo Array!
            $frutas = array();

            // $frutas = Array($fruta1, $fruta2, $fruta3, $fruta4, $fruta5);

            $frutas[] = $fruta1; // Posição 0 do Array!
            $frutas[] = $fruta2; // Posição 1 do Array!
            $frutas[] = $fruta3; // Posição 2 do Array!
            $frutas[] = $fruta4; // Posição 3 do Array!
            $frutas[] = $fruta5; // Posição 4 do Array!

            for($i=0; $i < count($frutas); $i++){
                echo 'A Fruta guardada na posição ' . $i . ' é ' . $frutas[$i] . '.<br>';
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
    <title>Atividade 2</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <span><?= isset($msgError) ? $msgError : '' ?></span>
    <form action="atividade_2.php" method="POST">
        <label>Primeira Fruta:</label>
        <input type="text" name="fruta1" value="<?= isset($fruta1) ? $fruta1 : '' ?>">
        <br>
        <label>Segunda Fruta:</label>
        <input type="text" name="fruta2" value="<?= isset($fruta2) ? $fruta2 : '' ?>">
        <br>
        <label>Terceira Fruta:</label>
        <input type="text" name="fruta3" value="<?= isset($fruta3) ? $fruta3 : '' ?>">
        <br>
        <label>Quarta Fruta:</label>
        <input type="text" name="fruta4" value="<?= isset($fruta4) ? $fruta4 : '' ?>">
        <br>
        <label>Quinta Fruta:</label>
        <input type="text" name="fruta5" value="<?= isset($fruta5) ? $fruta5 : '' ?>">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
</body>
</html>