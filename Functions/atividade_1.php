<?php

    require_once 'function.php';

    if(isset($_POST['btnEnviar'])){
        $nome = trim($_POST['nome']);
        $descricao = trim($_POST['desc']);
        $senha = trim($_POST['senha']);
        $repSenha = trim($_POST['repSenha']);

        if(ValidarNome($nome) == -1){
            $msg = 'Nome deverá conter no mínimo 3 caracteres!';
        }else if(ValidarDescricao($descricao) == -2){
            $msg = 'Descrição deverá conter no mínimo 50 caracteres!';
        }else if(ValidarSenha($senha) == -3){
            $msg = 'Senha deverá conter no mínimo 6 caracteres!';
        }else if(VerificarSenhas($senha, $repSenha) == -4){
            $msg = 'Os campos Senha e Repetir Senha deverão ser iguais!';
        }else{
            $msg = 'Cadastro realizado com sucesso!';
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
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <span><?= isset($msg) ? $msg : '' ?></span>
    <form action="atividade_1.php" method="POST">
        <label>Digite seu Nome:</label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Digite uma Descrição:</label>
        <input type="text" name="desc" value="<?= isset($descricao) ? $descricao : '' ?>">
        <br>
        <label>Digite uma Senha:</label>
        <input type="password" name="senha" value="<?= isset($senha) ? $senha : '' ?>">
        <br>
        <label>Digite novamente sua Senha:</label>
        <input type="password" name="repSenha" value="<?= isset($repSenha) ? $repSenha : '' ?>">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
</body>
</html>