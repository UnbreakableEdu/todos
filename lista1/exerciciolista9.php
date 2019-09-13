<?php
    print "Quantos metros quadrados tem a área que será pintada?\n";
    $area = (float) fgets (STDIN);
    
    $litros_utilizados = $area / 6;
    
    $quantidade_lata = ceil($litros_utilizados / 18);
    $quantidade_galao = ceil($litros_utilizados / 3.6);
    $custo_lata = $quantidade_lata * 80;
    $custo_galao = $quantidade_galao * 25;
#a
    print "\nSerão utilizadas $quantidade_lata lata(s) de tinta por um preço de R$$custo_lata";
#b    
    print "\nSerão utilizados $quantidade_galao galões de tinta por um preço de R$$custo_galao";

    #faltou a "c", não acho justo eu simplesmente copiar do professor ;-;


    



