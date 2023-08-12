<?php

    // Operador Lógicos (Constroi condições Lógicas):
    // || - OU.
    // && - E.
    // ! - NÃO.

    // Operadores Relacionais (Relaciona condições Lógicas ou Valores):
    // > - MAIOR.
    // < - MENOR.
    // == - IGUAL.
    // >= - MAIOR IGUAL.
    // <= - MENOR IGUAL.
    // != - DIFERENTE.

    // <> - DIFERENTE.
    // === - Java, C++, C#.

    if(isset($_POST['btnCalcular'])){
        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];
        $nota3 = $_POST['nota3'];
        $nota4 = $_POST['nota4'];

        // if($nota1 == ''){
           // echo 'Preencher o Campo do 1º Bimestre!';
        // }else if($nota2 == ''){
           // echo 'Preencher o Campo do 2º Bimestre!';
        // }else if($nota3 == ''){
           // echo 'Preencher o Campo do 3º Bimestre!';
        // }else if($nota4 == ''){
            // echo 'Preencher o Campo do 4º Bimestre!';
        // }else{
            // $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        // }

        if($nota1 == '' || $nota2 == '' || $nota3 == '' || $nota4 == ''){
            echo 'Preencher todos os campos obrigatórios!';
        }else{
            $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

            // 0 a 40 = REPROVADO!
            // 40 a 60 = EXAME!
            // 60 a 100 = APROVADO!

            if($media >= 0 && $media < 40){
                // echo 'REPROVADO!';
                $msgSituacao = 'REPROVADO!';
            }else if($media >= 40 && $media < 60){
                // echo 'EXAME!';
                $msgSituacao = 'EXAME!';
            }else{
                // echo 'APROVADO!';
                $msgSituacao = 'APROVADO!';
            }
        }
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
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="exemplo.php" method="POST">
        <label>1º Bimestre:</label>
        <input type="number" name="nota1" value="<?= isset($nota1) ? $nota1 : '' ?>">
        <br>
        <label>2º Bimestre:</label>
        <input type="number" name="nota2" value="<?= isset($nota2) ? $nota2 : '' ?>">
        <br>
        <label>3º Bimestre:</label>
        <input type="number" name="nota3" value="<?= isset($nota3) ? $nota3 : '' ?>">
        <br>
        <label>4º Bimestre:</label>
        <input type="number" name="nota4" value="<?= isset($nota4) ? $nota4 : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <?php if(isset($media) && $media != '' && isset($msgSituacao) && $msgSituacao != ''){ ?>
        <span>Resultado Final: <?= isset($media) ? $media : '' ?></span>
        <br>
        <span>Situação Final: <?= isset($msgSituacao) ? $msgSituacao : '' ?></span>
    <?php } ?>
</body>
</html>