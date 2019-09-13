<?php

    function soma($n1,$n2){
        $somatoria=0;
        for($i=$n1 ; $i<=$n2 ; $i++){
            $somatoria+=$i;
        }
        return $somatoria;
    }

    print "Digite o valor do primeiro número: ";
    $n1 = (float) fgets(STDIN);
    print "Digite o valor do segundo número: ";
    $n2 = (float) fgets(STDIN);
    $somatoria = soma($n1,$n2);
    print " A somatória dos valores entre ".$n1." e ".$n2." é igual há: ".$somatoria;