<?php
    print "Há quantos anos você fuma?  ";
    $num_de_anos = (int) fgets(STDIN);
    print "\n Quantos cigarros por dia?  ";
    $cigarros_por_dia = (int) fgets(STDIN);
    
    $ano             = 365;
    $minutos_por_dia = 10*$cigarros_por_dia;
    $min_totais      = $minutos_por_dia*$ano*$num_de_anos;
    $horas           = $min_totais/60;
    $dias            = round($horas/24,1);
    print"\n Você perdeu $dias dias de vida";