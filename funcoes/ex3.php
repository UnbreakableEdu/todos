<?php

    function notas($n1,$n2){
        $nm=($n1+$n2)/2;
        return $nm;
    }

    print "Digite a primeira nota: ";
    $n1 = (float) fgets(STDIN);
    print "Digite a segunda nota: ";
    $n2 = (float) fgets(STDIN);
    $nm = notas($n1,$n2);
    if($nm>=6){
        print "Você foi aprovado com nota ".$nm;
    }else{
        print "Você REPROVOU com nota ".$nm;
    }