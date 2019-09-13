<?php

    function geometrica($nlados,$medida){
        if($nlados==3){
            $media=$medida*3;           
        }elseif($nlados==4){
            $media=$medida**2;
        }elseif($nlados==5){
            $media=$medida*5;
        }else{
            $media="Inválido";
        }
        return $media;
    }

    print "Digite o número de lados do polígono regular: ";
    $nlados = (float) fgets(STDIN);
    print "Digite a medida dos lados: ";
    $medida = (float) fgets(STDIN);
    $media = geometrica($nlados,$medida);
    if($nlados==3){
        print "Esse é um triângulo com perímetro ".$media;
    }elseif($nlados==4){
        print "Esse é um quadrado com área ".$media;
    }elseif($nlados==5){
        print "Esse é um pentágono com perímetro ".$media;
    }else{
        print "Apenas triângulos,quadrados ou pentágonos são aceitos";
    }