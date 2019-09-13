<?php

    print "Temperatura em graus Celsius: ";
    $celsius = (float) fgets (STDIN);

    $fahrenheit = (float)(9*$celsius)/(5)+32;

    print "Em fahrenheit esta temperatura se torna: $fahrenheit";
