<?php

    $a = 0;
    $b = 12;
    $c = 12;

    #16 + 20 = 36 >30
    #16 + 30 = 46 >20
    #30 + 20 = 50 >16

    if($a+$b > $c and $a + $c > $b and $b + $c >$a){

        if($a == $b and $b == $c and $c == $a){
        print"\nÉ um triângulo equilatero\n";
    }elseif($a != $b and $b != $c and $c != $a){
        print "\nÉ um triângulo escaleno\n";
    }else{
        print"\nÉ um triângulo isósceles\n";
    }



    }else{
        print"\nNão compõem triângulo\n";
    }
