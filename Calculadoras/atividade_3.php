<?php

    // ltrim: Remove espaço a esquerda
    // rtrim: Remove espaço a direita
    // trim: Remove todos os excessos de espaço

    if(isset($_POST['btnSomar'])){
        $ganhoJan = trim($_POST['gJan']);
        $perdaJan = trim($_POST['pJan']);
        $ganhoFev = trim($_POST['gFev']);
        $perdaFev = trim($_POST['pFev']);
        $ganhoMar = trim($_POST['gMar']);
        $perdaMar = trim($_POST['pMar']);
        $ganhoAbr = trim($_POST['gAbr']);
        $perdaAbr = trim($_POST['pAbr']);
        $ganhoMai = trim($_POST['gMai']);
        $perdaMai = trim($_POST['pMai']);
        $ganhoJun = trim($_POST['gJun']);
        $perdaJun = trim($_POST['pJun']);
        $ganhoJul = trim($_POST['gJul']);
        $perdaJul = trim($_POST['pJul']);
        $ganhoAgo = trim($_POST['gAgo']);
        $perdaAgo = trim($_POST['pAgo']);
        $ganhoSet = trim($_POST['gSet']);
        $perdaSet = trim($_POST['pSet']);
        $ganhoOut = trim($_POST['gOut']);
        $perdaOut = trim($_POST['pOut']);
        $ganhoNov = trim($_POST['gNov']);
        $perdaNov = trim($_POST['pNov']);
        $ganhoDez = trim($_POST['gDez']);
        $perdaDez = trim($_POST['pDez']);

        $totalGanhos = $ganhoJan + $ganhoFev + $ganhoMar + $ganhoAbr + $ganhoMai + $ganhoJun + $ganhoJul + $ganhoAgo + $ganhoSet + $ganhoOut + $ganhoNov + $ganhoDez;
        $totalPerdas = $perdaJan + $perdaFev + $perdaMar + $perdaAbr + $perdaMai + $perdaJun + $perdaJul + $perdaAgo + $perdaSet + $perdaOut + $perdaNov + $perdaDez;
        $lucroRealAnual = $totalGanhos - $totalPerdas;

        $lucroRealJaneiro = $ganhoJan - $perdaJan;
        $lucroRealFevereiro = $ganhoFev - $perdaFev;
        $lucroRealMarco = $ganhoMar - $perdaMar;
        $lucroRealAbril = $ganhoAbr - $perdaAbr;
        $lucroRealMaio = $ganhoMai - $perdaMai;
        $lucroRealJunho = $ganhoJun - $perdaJun;
        $lucroRealJulho = $ganhoJul - $perdaJul;
        $lucroRealAgosto = $ganhoAgo - $perdaAgo;
        $lucroRealSetembro = $ganhoSet - $perdaSet;
        $lucroRealOutubro = $ganhoOut - $perdaOut;
        $lucroRealNovembro = $ganhoNov - $perdaNov;
        $lucroRealDezembro = $ganhoDez - $perdaDez;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_3.php" method="POST">
        <hr>
        <label>Ganhos de Janeiro:</label>
        <input type="text" name="gJan" value="<?= isset($ganhoJan) ? $ganhoJan : '' ?>">
        <br>
        <label>Perda de Janeiro:</label>
        <input type="text" name="pJan" value="<?= isset($perdaJan) ? $perdaJan : '' ?>">
        <hr>
        <label>Ganhos de Fevereiro:</label>
        <input type="text" name="gFev" value="<?= isset($ganhoFev) ? $ganhoFev : '' ?>">
        <br>
        <label>Perda de Fevereiro:</label>
        <input type="text" name="pFev" value="<?= isset($perdaFev) ? $perdaFev : '' ?>">
        <hr>
        <label>Ganhos de Março:</label>
        <input type="text" name="gMar" value="<?= isset($ganhoMar) ? $ganhoMar : '' ?>">
        <br>
        <label>Perda de Março:</label>
        <input type="text" name="pMar" value="<?= isset($perdaMar) ? $perdaMar : '' ?>">
        <hr>
        <label>Ganhos de Abril:</label>
        <input type="text" name="gAbr" value="<?= isset($ganhoAbr) ? $ganhoAbr : '' ?>">
        <br>
        <label>Perda de Abril:</label>
        <input type="text" name="pAbr" value="<?= isset($perdaAbr) ? $perdaAbr : '' ?>">
        <hr>
        <label>Ganhos de Maio:</label>
        <input type="text" name="gMai" value="<?= isset($ganhoMai) ? $ganhoMai : '' ?>">
        <br>
        <label>Perda de Maio:</label>
        <input type="text" name="pMai" value="<?= isset($perdaMai) ? $perdaMai : '' ?>">
        <hr>
        <label>Ganhos de Junho:</label>
        <input type="text" name="gJun" value="<?= isset($ganhoJun) ? $ganhoJun : '' ?>">
        <br>
        <label>Perda de Junho:</label>
        <input type="text" name="pJun" value="<?= isset($perdaJun) ? $perdaJun : '' ?>">
        <hr>
        <label>Ganhos de Julho:</label>
        <input type="text" name="gJul" value="<?= isset($ganhoJul) ? $ganhoJul : '' ?>">
        <br>
        <label>Perda de Julho:</label>
        <input type="text" name="pJul" value="<?= isset($perdaJul) ? $perdaJul : '' ?>">
        <hr>
        <label>Ganhos de Agosto:</label>
        <input type="text" name="gAgo" value="<?= isset($ganhoAgo) ? $ganhoAgo : '' ?>">
        <br>
        <label>Perda de Agosto:</label>
        <input type="text" name="pAgo" value="<?= isset($perdaAgo) ? $perdaAgo : '' ?>">
        <hr>
        <label>Ganhos de Setembro:</label>
        <input type="text" name="gSet" value="<?= isset($ganhoSet) ? $ganhoSet : '' ?>">
        <br>
        <label>Perda de Setembro:</label>
        <input type="text" name="pSet" value="<?= isset($perdaSet) ? $perdaSet : '' ?>">
        <hr>
        <label>Ganhos de Outubro:</label>
        <input type="text" name="gOut" value="<?= isset($ganhoOut) ? $ganhoOut : '' ?>">
        <br>
        <label>Perda de Outubro:</label>
        <input type="text" name="pOut" value="<?= isset($perdaOut) ? $perdaOut : '' ?>">
        <hr>
        <label>Ganhos de Novembro:</label>
        <input type="text" name="gNov" value="<?= isset($ganhoNov) ? $ganhoNov : '' ?>">
        <br>
        <label>Perda de Novembro:</label>
        <input type="text" name="pNov" value="<?= isset($perdaNov) ? $perdaNov : '' ?>">
        <hr>
        <label>Ganhos de Dezembro:</label>
        <input type="text" name="gDez" value="<?= isset($ganhoDez) ? $ganhoDez : '' ?>">
        <br>
        <label>Perda de Dezembro:</label>
        <input type="text" name="pDez" value="<?= isset($perdaDez) ? $perdaDez : '' ?>">
        <hr>
        <button name="btnSomar">SOMAR</button>
    </form>
    <?php if(
        isset($totalGanhos) && $totalGanhos != '' && isset($totalPerdas) && $totalPerdas != '' &&
        isset($lucroRealAnual) && $lucroRealAnual != '' && isset($lucroRealJaneiro) && $lucroRealJaneiro != '' &&
        isset($lucroRealFevereiro) && $lucroRealFevereiro != '' && isset($lucroRealMarco) && $lucroRealMarco != '' &&
        isset($lucroRealAbril) && $lucroRealAbril != '' && isset($lucroRealMaio) && $lucroRealMaio != '' &&
        isset($lucroRealJunho) && $lucroRealJunho != '' && isset($lucroRealJulho) && $lucroRealJulho != '' &&
        isset($lucroRealAgosto) && $lucroRealAgosto != '' && isset($lucroRealSetembro) && $lucroRealSetembro != '' &&
        isset($lucroRealOutubro) && $lucroRealOutubro != '' && isset($lucroRealNovembro) && $lucroRealNovembro != '' &&
        isset($lucroRealDezembro) && $lucroRealDezembro != ''
    ){ ?>
        <span>Total de Lucro:</span>
        <input disabled value="<?= isset($totalGanhos) ? $totalGanhos : '' ?>">
        <br>
        <span>Total de Perda:</span>
        <input disabled value="<?= isset($totalPerdas) ? $totalPerdas : '' ?>">
        <br>
        <span>Lucro Real Anual:</span>
        <input disabled value="<?= isset($lucroRealAnual) ? $lucroRealAnual : '' ?>">
        <br>
        <span>Lucro Real de Janeiro:</span>
        <input disabled value="<?= isset($lucroRealJaneiro) ? $lucroRealJaneiro : '' ?>">
        <br>
        <span>Lucro Real de Fevereiro:</span>
        <input disabled value="<?= isset($lucroRealFevereiro) ? $lucroRealFevereiro : '' ?>">
        <br>
        <span>Lucro Real de Março:</span>
        <input disabled value="<?= isset($lucroRealMarco) ? $lucroRealMarco : '' ?>">
        <br>
        <span>Lucro Real de Abril:</span>
        <input disabled value="<?= isset($lucroRealAbril) ? $lucroRealAbril : '' ?>">
        <br>
        <span>Lucro Real de Maio:</span>
        <input disabled value="<?= isset($lucroRealMaio) ? $lucroRealMaio : '' ?>">
        <br>
        <span>Lucro Real de Junho:</span>
        <input disabled value="<?= isset($lucroRealJunho) ? $lucroRealJunho : '' ?>">
        <br>
        <span>Lucro Real de Julho:</span>
        <input disabled value="<?= isset($lucroRealJulho) ? $lucroRealJulho : '' ?>">
        <br>
        <span>Lucro Real de Agosto:</span>
        <input disabled value="<?= isset($lucroRealAgosto) ? $lucroRealAgosto : '' ?>">
        <br>
        <span>Lucro Real de Setembro:</span>
        <input disabled value="<?= isset($lucroRealSetembro) ? $lucroRealSetembro : '' ?>">
        <br>
        <span>Lucro Real de Outubro:</span>
        <input disabled value="<?= isset($lucroRealOutubro) ? $lucroRealOutubro : '' ?>">
        <br>
        <span>Lucro Real de Novembro:</span>
        <input disabled value="<?= isset($lucroRealNovembro) ? $lucroRealNovembro : '' ?>">
        <br>
        <span>Lucro Real de Dezembro:</span>
        <input disabled value="<?= isset($lucroRealDezembro) ? $lucroRealDezembro : '' ?>">
    <?php } ?>
</body>
</html>