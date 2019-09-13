<?php

    echo"Digite seu prato favorito: ";
    $opcao=fgets(STDIN);

    switch($opcao){
        case'arroz';
        print"Você ESCOLHEU ARROZ";
        break;

        case'arroz';
        print "Você ESCOLHEU ARROZ";
        break;

        default;
        print "Não temos esse prato";
    }