<?php
    print "Número para a tabuada:  ";
    $tabu = (int) fgets(STDIN);

    for($i=1;$i<=10;$i++){
        $calculo = $tabu * $i;
        print "{$tabu} x {$i} = {$calculo} \n";
        sleep(1);
    }