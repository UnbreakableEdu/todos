<?php

    print "Qual o tamanho do corte Sr. Jorge, o marceneiro? (em cm)  ";
    $tamanho_do_corte = (int) fgets(STDIN);

    $tabua3metros = 300;
    $tabua4metros = 400;
    $tabua5metros = 500;

    $num_cortes_em_3m = (int)($tabua3metros/$tamanho_do_corte);
    $num_cortes_em_4m = (int)($tabua4metros/$tamanho_do_corte);
    $num_cortes_em_5m = (int)($tabua5metros/$tamanho_do_corte);

    $resto_em_3m = $tabua3metros%$tamanho_do_corte;
    $resto_em_4m = $tabua4metros%$tamanho_do_corte;
    $resto_em_5m = $tabua5metros%$tamanho_do_corte;

    print "\no marceneiro jorge conseguirá fazer $num_cortes_em_3m cortes de $tamanho_do_corte cm, sobrando $resto_em_3m cm, em uma tabua de 3 metros";

    print "\no marceneiro jorge conseguirá fazer $num_cortes_em_4m cortes de $tamanho_do_corte cm, sobrando $resto_em_4m cm, em uma tabua de 4 metros";

    print "\no marceneiro jorge conseguirá fazer $num_cortes_em_5m cortes de $tamanho_do_corte cm, sobrando $resto_em_5m cm, em uma tabua de 5 metros";
