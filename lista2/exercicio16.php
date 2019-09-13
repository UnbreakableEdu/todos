<?php

print "Primeira nota:  ";
$valor1 = (float) fgets(STDIN);

print "\n Segunda nota:  ";
$valor2 = (float) fgets(STDIN);

print "\n Terceira nota:  ";
$valor3 = (float) fgets(STDIN);

print "\n Quarta nota:  ";
$valor4 = (float) fgets(STDIN);

print "\n Quinta nota:  ";
$valor5 = (float) fgets(STDIN);

$soma = $valor1 + $valor2 + $valor3 + $valor4+$valor5;
$media = $soma/5;

print "\n $soma é a soma final!";

print "\n $media é a média final!";
