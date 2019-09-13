<?php

print"Digite uma letra: ";
$letra = fgetc(STDIN);

if($letra=='a' or $letra == 'b' or $letra == 'c' or $letra == 'd' or $letra == 'e' or $letra == 'A' or $letra == 'B' or $letra == 'C' or $letra == 'D' or $letra == 'E'){
    print "\n($letra) é uma vogal\n";
}else{
        print"\n($letra) é uma consoante\n";
    };