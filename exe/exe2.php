<?php

print "Primeira nota:  ";
$valor1 = (float) fgets(STDIN);

print "\n Segunda nota:  ";
$valor2 = (float) fgets(STDIN);

print "\n Terceira nota:  ";
$valor3 = (float) fgets(STDIN);

print "\n Quarta nota:  ";
$valor4 = (float) fgets(STDIN);

$soma = $valor1 + $valor2 + $valor3 + $valor4;
$media = $soma/4;

print "\n $media é a média final!";

if($media>=7){
    print "\nAprovado";
}elseif($media >=5){
        print"\nExame!";
    }else{
        print"\nReprovado";
    };