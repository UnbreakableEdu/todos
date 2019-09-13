<?php

print"Digite um número: ";
$n1 = (float) fgets(STDIN);

print"Digite outro número: ";
$n2 = (float) fgets(STDIN);

print"Digite mais um número: ";
$n3 = (float) fgets(STDIN);

switch($n1){

    case($n1>$n2 and $n1>$n3);
    print"\n$n1 é o maior número\n";
    break;

    case($n2>$n1 and $n2>$n3);
    print "\n$n2 é maior número\n";
    break;

    case($n3>$n1 and $n3>$n2);
    print "\n$n3 é maior número\n";
    break;

}

switch($n1){
    case($n1<$n2 and $n1<$n3);
    print"\n$n1 é o menor número\n";
    break;

    case($n2<$n1 and $n2<$n3);
    print "\n$n2 é menor número\n";
    break;

    case($n3<$n1 and $n3<$n2);
    print "\n$n3 é menor número\n";
    break;

}