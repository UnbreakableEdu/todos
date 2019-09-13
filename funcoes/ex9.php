<?php

    function resto($x,$y){
        if($x%$y==0){
            $valor=$x/$y;
            $media="$x é divisível por $y, e o resultado é: $valor";
        }else{
            $valor=$x/$y;
            $media="$x não é divisível por $y, e o resultado é: $valor";
        }
        return $media;
    }

    print "Digite o valor de x: ";
    $x = (float) fgets(STDIN);
    print "Digite o valor de y: ";
    $y = (float) fgets(STDIN);
    $media = resto($x,$y);
    print $media;