<?php

    function hipCatetos($c1,$c2){
        $hip=sqrt(($c1**2)+($c2**2));
        return $hip;
    }

    print "Digite a medida do Cateto A: ";
    $c1 = (float) fgets(STDIN);
    print "Digite a medida do Cateto B: ";
    $c2 = (float) fgets(STDIN);
    $hip = hipCatetos($c1,$c2);
    print "Quando os catetos são, respectivamente ".$c1." e ".$c2." a hipotenusa será: ".$hip;