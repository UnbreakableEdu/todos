<?php

echo"Nome do seu dog: ";
$nome=fgets(STDIN);

echo"\nQual o peso de $nome (em kg): ";
$peso=fgets(STDIN);

switch($peso){

    case($peso<=2);
    print"\n$nome late fino: au au au";
    break;

    case(2<$peso) and ($peso<=10);
    print "\n$nome tem um belo latido";
    break;

    case($peso>10);
    print "\nO cachorro $nome late grosso: woof woof";
    break;
}