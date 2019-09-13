<?php

    //$lista=array('Ana','Bianca','Carol');
    //$lista=[];

    //print $lista [2];

    print "Vilões e o Lobo\n";
    $lista=array('Lobo','Coringa','Hera Venenosa','Charada','Pinguim','Duas Caras','Espantalho','Bane',"Ra's Al Ghul",'Crocodilo','Senhor Frio');

    //$lista[12] = "Darkseid";
    //array_push($lista, "Sargento Fahur")  

    //array_pop(); elimina um elemento do final da lista
    //array_shift(); retira o primeiro elemento da lista
    //array_unshift(); adiciona um ou mais elementos no inicio de uma lista


    sort($lista); //ordem alfabetica
    //rsort = ordem alfabetica ao contrario
    unset($lista[2]); //remover um elemento em específico

    $lista=array_values($lista);


    //print_r ($lista); //= teste

    //for($i=0 ; $j=0;$i<count($lista); $i++; $j++)//

    for($i = 0; $i < count($lista); $i++){
        print $i + 1 ."° lugar: ".$lista[$i]."\n";
        sleep(1);
    }





