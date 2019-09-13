<?php

    function mesNumero($n1){
        switch($n1){
            case 1;
            print"Mês do referido número é JANEIRO ";
            break;
    
            case 2;
            print"Mês do referido número é FEVEREIRO ";
            break;

            case 3;
            print"Mês do referido número é MARÇO ";
            break;

            case 4;
            print"Mês do referido número é ABRIL ";
            break;

            case 5;
            print"Mês do referido número é MAIO ";
            break;

            case 6;
            print"Mês do referido número é JUNHO ";
            break;

            case 7;
            print"Mês do referido número é JULHO";
            break;

            case 8;
            print"Mês do referido número é AGOSTO ";
            break;

            case 9;
            print"Mês do referido número é SETEMBRO ";
            break;

            case 10;
            print"Mês do referido número é OUTUBRO ";
            break;

            case 11;
            print"Mês do referido número é NOVEMBRO ";
            break;

            case 12;
            print"Mês do referido número é DEZEMBRO ";
            break;
    
            default;
              exit ("\n NÚMERO INVÁLIDO \n");
            break;
        }
    }

    print "Digite um número, REFERENTE ao dia da semana (1-7): ";
    $n1 = (float) fgets(STDIN);
    
    mesNumero($n1);