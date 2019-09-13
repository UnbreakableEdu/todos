<?php

    function fartoCell($tf){
        $tc=($tf - 32)*5/9;
        return $tc;
    }

    print "Digite uma temperatura em Fahrenheit: ";
    $tf = (float) fgets(STDIN);
    $tc = fartoCell($tf);
    print $tf." Fahrenheit equivale a ".$tc." Celsius";