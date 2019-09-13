<?php

    print "\nQuantos dias o carro ficou alugado?\n";
    $dias = (int) fgets (STDIN);

    print "Quantos quilômetros foram percorridos com o carro?\n";
    $km_percorridos = (float) fgets (STDIN);
    
    $dia_new = 60 * $dias;
    $km_new = 0.15 * $km_percorridos;
    $resultado = $dia_new + $km_new;

    print "\nO preço final ficou por: R$$resultado\n";