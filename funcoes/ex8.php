<?php

    function semanaNumero($n1){
        switch($n1){
            case 1;
            print"O número escolhido refere-se a Domingo ";
            break;
    
            case 2;
            print"O número escolhido refere-se a Segunda-Feira ";
            break;

            case 3;
            print"O número escolhido refere-se a Terça-Feira ";
            break;

            case 4;
            print"O número escolhido refere-se a Quarta-Feira ";
            break;

            case 5;
            print"O número escolhido refere-se a Quinta-Feira ";
            break;

            case 6;
            print"O número escolhido refere-se a Sexta-Feira ";
            break;

            case 7;
            print"O número escolhido refere-se a Sábado ";
            break;
    
            default;
              exit ("\n NÚMERO INVÁLIDO \n");
            break;
        }
    }
    print "Bem Vindo ao sistema de escolha do dia da semana";
    print "\n Digite um número (1-7): ";
    $n1 = (float) fgets(STDIN);
    
    semanaNumero($n1);