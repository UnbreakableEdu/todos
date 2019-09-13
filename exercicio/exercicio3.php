<?php

    function posOuNeg($n1){
        $somatotal=($n1+$n2)+$n3;
        return $somatotal;
    }

    print "Digite o valor do primeiro número: ";
    $n1 = (float) fgets(STDIN);
    print "Digite o valor do segundo número: ";
    $n2 = (float) fgets(STDIN);
    print "Digite o valor do terceiro número: ";
    $n3 = (float) fgets(STDIN);
    $somatotal = soma($n1,$n2,$n3);
    print " A somatória dos valores ".$n1." , ".$n2." e ".$n3." é igual há: ".$somatotal;