<?php

for($i=0;$i<=10;$i++){
    print $i;
}

    for($i=0;$i<=100;$i++){
        if($i==7){
            print $i;
            print "achei o número 7";
            break;
        }
    }

    for($i=0;$i<=100;$i++){
        if($i>50 and $i<60){
           continue;
        }
        print "$i\n";
    }