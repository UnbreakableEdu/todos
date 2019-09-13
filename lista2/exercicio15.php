<?php

print"Digite o primeiro número: ";
$n1 = (float) fgets(STDIN);

print"Digite o segundo número: ";
$n2 = (float) fgets(STDIN);

print"Digite o terceiro número: ";
$n3 = (float) fgets(STDIN);

print"Digite o quarto número: ";
$n4 = (float) fgets(STDIN);

print"Digite o quinto número: ";
$n5 = (float) fgets(STDIN);

$valor = [$n1, $n2, $n3, $n4, $n5];

print "\n";

print "o maior valor é: ".(max($valor));

print "\n";

//rsort($valor);

//print "\n O maior valor inserido é " . $valor[0] . " . \n\n";