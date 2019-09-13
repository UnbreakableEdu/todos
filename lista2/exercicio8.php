<?php

print"Digite o preço de um tênis da Nike: ";
$n1 = (float) fgets(STDIN);

print"Digite o preço de um tênis da Adidas: ";
$n2 = (float) fgets(STDIN);

print"Digite o preço de um tênis da Puma: ";
$n3 = (float) fgets(STDIN);

if($n1<$n2 and $n1<$n3){
    print "\nCompre o tênis da Nike\n";
}elseif($n2<$n1 and $n2<$n3){
        print"\nCompre um tênis da Adidas\n";
    }else{
        print"\nCompre um tênis da Puma\n";
    };


