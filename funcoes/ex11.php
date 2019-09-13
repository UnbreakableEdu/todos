<?php

    function polCm($pol){
        $cm=$pol*2.54;
        return $cm;
    }

    print "Digite um número em polegadas: ";
    $pol = (float) fgets(STDIN);
    $cm = polCm($pol);
    print $pol." polegadas equivale a ".$cm." centímetros ";