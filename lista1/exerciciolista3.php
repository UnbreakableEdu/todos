<?php

print "O valor de seu salário atual: ";
$salario = (float) fgets (STDIN);

print "Digite a porcentagem do aumento: ";
$porc = (float) fgets (STDIN);

$nova_porc = $porc/100;

$valor_aumento = $salario*$nova_porc;
$novo_salario = $salario+$valor_aumento;

print "\nO valor do aumento é: $valor_aumento";
print "\nO salário atual reajustado é: $novo_salario";