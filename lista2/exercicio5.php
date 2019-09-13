<?php

print "Primeira nota:  ";
$valor1 = (float) fgets(STDIN);

print "\n Segunda nota:  ";
$valor2 = (float) fgets(STDIN);

$soma = $valor1 + $valor2;
$media = $soma/2;

print "\n $media é a média final!\n";

if($media>=7 and $media<10){
    print "\nAprovado\n";
}elseif($media==10){
        print"\nAprovado com distinção\n";
    }elseif($media<7 and $media>0){
        print"\nReprovado\n";
    }else{
        print"\nNota Inválida\n";
    };