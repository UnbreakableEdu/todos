<?php

do{print"Digite sua nota: ";
    $nota = (int) fgets(STDIN);
   
}while($nota<0 or $nota>10);