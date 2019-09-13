<?php

    $impar = 0;
    $par = 0;

    for ($i = 1; $i <= 10; $i++) {

        print "\n Digite o " . $i . "º número (inteiro): ";
            $numero = (int) fgets(STDIN);

                    if ( ($numero%2) == 0 ) {
                        $par += 1;
                    }
                    else {
                        $impar += 1;
                    }
        }

        if ($impar == 1 && $par != 1) {
            print "\n " . $impar . " deles é ímpar e " . $par . " deles são pares. \n\n";
            }
        elseif ($par == 1 && $impar != 1) {
            print "\n " . $impar . " deles são ímpares e " . $par . " deles é par. \n\n";
        }
        else {
            print "\n " . $impar . " deles são ímpares e " . $par . " deles são pares. \n\n";
            }