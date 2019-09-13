<?php

print"Digite um número: ";
$n1 = (float) fgets(STDIN);

print"Digite outro número: ";
$n2 = (float) fgets(STDIN);

switch($n1){

    case($n1>$n2);
    print"\n$n1 é o maior número";
    break;

    case($n1<$n2);
    print "\n$n2 é maior número";
    break;
}

