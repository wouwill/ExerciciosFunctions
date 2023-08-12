<?php

    // function ValidarCampos($nome, $descricao, $senha, $repetir_senha){
    //     if(trim($nome == '' || $descricao == '' || $senha == '' || $repetir_senha == '')) {
    //         return -5;
    //     }else if (strlen($nome) < 3){
    //         return -1;
    //     }else if (strlen($descricao) < 50){
    //         return -2;
    //     }else if (strlen($senha) < 6){
    //         return -3;
    //     }else if ($repetir_senha != $senha){
    //         return -4;
    //     }else {
    //         return 0;
    //     }
    // }

    function ValidarNome($nome){
        if(strlen($nome) < 3){
            return -1;
        }else{
            return 1;
        }
    }

    function ValidarDescricao($descricao){
        if(strlen($descricao) < 50){
            return -2;
        }else{
            return 1;
        }
    }

    function ValidarSenha($senha){
        if(strlen($senha) < 6){
            return -3;
        }else{
            return 1;
        }
    }

    function VerificarSenhas($senha, $repSenha){
        if($senha != $repSenha){
            return -4;
        }else{
            return 1;
        }
    }

    function CalcularSalario($money, $percent){
        if($money == '' || $percent == ''){
            return 0;
        }else{
            $soma = $money + (($money * $percent) / 100);
            return $soma;
        }
    }

    function SomarNumeros($n1, $n2, $n3, $n4, $n5){
        if($n1== '' || $n2== '' || $n3== '' || $n4== '' || $n5 == ''){
            return 0;
        }else{
            $resultado = $n1 + $n2 + $n3 + ($n4 * $n5);
            return $resultado;
        }
    }

    function SomarMeses($janeiro, $fevereiro, $marco, $maio, $abril, $junho, $julho, $agosto, $setembro, $outubro, $novembro, $dezembro){
        if($janeiro == '' || $fevereiro == '' || $marco == '' || $abril == '' || $maio == '' || $junho == '' || $julho == '' || $agosto == '' || $setembro == '' || $outubro == '' || $novembro == '' || $dezembro == ''){
            return 0;
        }else{
            $somar = $janeiro + $fevereiro + $marco + $abril + $maio + $junho + $julho + $agosto + $setembro + $outubro + $novembro + $dezembro;
            return $somar;
        }
    }

    function CalcularVenda($valor, $quantidade){
        if($valor == '' || $quantidade == ''){
            return 0;
        }else{
            $calculo = $quantidade * $valor;
            return $calculo;
        }
    }

    function CalcularExercicio($valor1, $valor2, $valor3, $valor4, $valor5, $valor6, $valor7, $valor8, $valor9, $valor10){
        if($valor1 == '' || $valor2 == '' || $valor3 == '' || $valor4 == '' || $valor5 == '' || $valor6 == '' || $valor7 == '' || $valor8 == '' || $valor9 == '' || $valor10 == ''){
            return 0;
        }else{
            $calculo = ($valor1 + $valor2 + $valor3 + $valor4 + $valor5 + $valor6 + $valor7 + $valor8 + $valor9) / $valor10;
            return $calculo;
        }
    }

?>