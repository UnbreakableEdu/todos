<?php

    print "Digite o número de dias: ";
    $dias = (int) fgets (STDIN);

    print "Digite o número de horas: ";
    $horas = (int) fgets (STDIN);

    print "Digite o número de minutos: ";
    $minutos = (int) fgets (STDIN);

    print "Digite o número de segundos: ";
    $segundos = (int) fgets (STDIN);

    $segundos_dias = $dias * 86400;
    $segundos_horas = $horas * 3600;
    $segundos_minutos = $minutos * 60;
    $total_segundos = $segundos_dias + $segundos_horas + $segundos_minutos + $segundos;

    print "O número total de segundos foi: $total_segundos" ;

