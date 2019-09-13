<?php

print"Você é do sexo (F/M): ";
$sexo = fgetc(STDIN);

if($sexo=='F' or $sexo == 'f'){
    print "\nVocê é do sexo femenino\n";
}elseif($sexo=="M" or $sexo == "m"){
        print"\nVocê é do sexo masculino\n";
    }else{
        print"\nSexo Inválido\n";
    };