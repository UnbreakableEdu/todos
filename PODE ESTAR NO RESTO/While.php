<?php

    print"\nDigite um número: ";
    $valor = (int) fgets(STDIN);

    $sort = rand(1,8);

    while($valor != $sort){
        
        print "\nVocê PERDEU, BURRO! Tente novamente: ";
        $valor = (int) fgets(STDIN);

    }

    print "\nVocê VENCEU o número era $sort\n";
