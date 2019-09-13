<?php

// Valores
print "Valor de a: ";
$a = (float) fgets (STDIN);

print "\nValor de b: ";
$b = (float) fgets (STDIN);

print "\nValor de c: ";
$c = (float) fgets (STDIN);

if ($a == 0) {
    exit("\n O valor de 'a' é inválido, ou seja, esta não é uma equação do segundo grau.\n\n");
}

//Delta
$delta = ($b*$b)-((4*$a)*$c);


//Equação
$x1 = (-$b + sqrt ($delta)) / (2 * $a);
$x2 = (-$b - sqrt ($delta)) / (2 * $a);

//Exibindo os valores
if ($delta < 0) {
    exit("\n O valor de Δ é negativo, sendo igual a $delta. Devido a isso, não existem raízes reais. \n\n");
}
elseif ($delta == 0) {
    print "\n O valor de Δ é igual a $delta, ou seja, a equação possui apenas uma raiz real, sendo ela $x1. \n\n";
}
else {
    print "\n O valor de Δ é igual a $delta. As duas raízes reais da equação são $xLinha e $x2. \n\n";
}


