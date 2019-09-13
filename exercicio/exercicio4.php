<?php

    function posOuNeg($n1){
        if($n1>0){
            $sinal="Positivo\n";
        }elseif($n1<0){
            $sinal="Negativo\n";
        }else{
            $sinal="Nulo ou Neutro\n";
        }
        return $sinal;
    }

    print "Digite um número: ";
    $n1 = (float) fgets(STDIN);
    $sinal = posOuNeg($n1);
    print $n1." é ".$sinal;