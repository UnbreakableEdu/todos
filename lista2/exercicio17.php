<?php

    print "\n Digite a valor da base: ";
    $base = (float) fgets(STDIN);

    print "\n Digite o valor expoente: ";
    $expoente = (float) fgets(STDIN);

    $calculo = (float) $base ** $expoente;
    print "\n Tendo base " . $base . " e expoente " . $expoente . " o resultado da potenciação é: " . round($calculo, 2) . " . \n\n";