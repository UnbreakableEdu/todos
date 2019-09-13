<?php

    print "\n\nDigite um valor:  ";
    $valordigitado1 = (string) fgets(STDIN);

    print "\nDigite um valor:  ";
    $valordigitado2 = (string) fgets(STDIN);

    $valor1 = $valordigitado1;
    $valor2 = $valordigitado2;

    print "\n\nAntes da troca o valor 1 é: $valor1";

    print "\n E o valor 2 é: $valor2";

    $valornovo = $valor2;
    $valor2 = $valor1;

    print "\n\n\n Após a troca o valor 1 passou a ser: $valornovo";

    print "\n Já o valor 2 passou a ser: $valor2";
