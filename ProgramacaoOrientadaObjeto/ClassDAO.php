<?php

    // DAO: Data Access Objetc (A Classe, Camada que será construida o Objeto).
    // public: Tipo de function que pode ser herdada!
    // private: Tipo de function que trabalha internamente na Classe da qual ela pertence (Não pode ser herdada).
    // static: Tipo de function que seu valor (Algoritmo) não pode sofrer alteração.

    class ClassDAO{
        public function Combustivel($gas, $quantidade){
            if($gas == '' || $quantidade == ''){
                return 0;
            }else{
                if($gas == 1){
                    $msg = $this->Gasolina($quantidade);
                }else if($gas == 2){
                    $msg = $this->Etanol($quantidade);
                }else if($gas == 3){
                    $msg = $this->Diesel($quantidade);
                }
                return$msg;
            }
        }

        private function Gasolina($quantidade){
            $gasolina = $quantidade * 5.30;
            return number_format($gasolina, 2, ',', '.');
        }

        private function Etanol($quantidade){
            $etanol = $quantidade * 3.28;
            return number_format($etanol, 2, ',', '.');
        }

        private function Diesel($quantidade){
            $diesel = $quantidade * 5.92;
            return number_format($diesel, 2, ',', '.');
        }

        public function Conversor($tipo, $temperatura){
            if($tipo == '' || $temperatura == ''){
                return 0;
            }else{
                if($tipo == 1){
                    $msg = $this->Celsius($temperatura);
                }else if($tipo == 2){
                    $msg = $this->Fahrenheit($temperatura);
                }
                return $msg;
            }
        }

        private function Celsius($temperatura){
            $celsius = round((($temperatura * 9 / 5) + 32), 2);
            return $celsius;
        }

        private function Fahrenheit($temperatura){
            $fahrenheit = round((($temperatura - 32) * 5 / 9), 2);
            return $fahrenheit;
        }

        public function CalcularSalario($meses, $salario, $lucro, $perda){
            if($meses == '' || $salario == '' || $lucro == '' || $perda == ''){
                return 0;
            }else{
                $ganhos = $meses * $salario;
                $totalLucro = ($ganhos * $lucro) / 100;
                $totalPerda = ($ganhos * $perda) / 100;
                                
                $resultado = ($ganhos + $totalLucro) - $totalPerda;
                return number_format($resultado, 2, ',', '.');
            }
        }
    }

?>