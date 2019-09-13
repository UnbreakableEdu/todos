<?php


    print"Digite sua nota: ";
    $nota = (int) fgets(STDIN);

    while($nota<0 or $nota>10){
        
        print"Digite sua nota novamente, valor inválido: ";
        $nota = (int) fgets(STDIN);
    }

    print "Nota registrada";