<?php

print "Primeiro valor:  ";
$valor1 = (int) fgets(STDIN);

print "\n Segundo valor:  ";
$valor2 = (int) fgets(STDIN);

$soma = $valor1 + $valor2;

print "\n $soma é o resultado da soma!";

print($soma>10)? "\nTá certo\n":"\nTá errado\n";