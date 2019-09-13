<?php

    function maiorNumero($n1,$n2){
        if($n1<$n2){
            $media="O maior valor é $n2 ";
        }elseif($n1>$n2){
            $media="O maior valor é $n1 ";
        }else{
            $media=" Os valores são iguais ";
        }
        return $media;
    }

    print "Digite o primeiro número: ";
    $n1 = (float) fgets(STDIN);
    print "Digite o segundo número: ";
    $n2 = (float) fgets(STDIN);
    $media = maiorNumero($n1,$n2);
    print $media;