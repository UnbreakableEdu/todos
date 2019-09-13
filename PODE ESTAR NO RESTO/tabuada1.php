<?php
    
    for($tabu=2;$tabu<=10;$tabu++){
        print "Tabuada de $tabu \n";
        for($i=1;$i<=10;$i++){
            $calculo = $tabu * $i;
            print "{$tabu} x {$i} = {$calculo} \n";
        }
    }
