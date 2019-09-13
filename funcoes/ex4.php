<?php

    function pesoideal($sexo,$h){
        if($sexo==1){
            $media=(62.1*$h)-44.7;
        }elseif($sexo==2){
            $media=(72.7*$h)-58;
        }else{
            print "Sexo Inválido, reinicie...";
        }
        return $media;
    }

    print "Qual o seu sexo (1-Femi0nino & 2-Masculino): ";
    $sexo = (float) fgets(STDIN);
    print "Digite a sua altura: ";
    $h = (float) fgets(STDIN);
    $media = pesoideal($sexo,$h);
    print " Seu peso ideal é: ".$media;