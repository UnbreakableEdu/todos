<?php

    print "Digite a distância a percorrer (km): ";
    $km = (float) fgets (STDIN);

    print "Digite o quanto você IMAGINA que seja a velocidade média: ";
    $vm = (float) fgets (STDIN);

    $tempo = $km/$vm;

    print "o tempo de viagem é de $tempo horas";

