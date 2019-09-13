<?php

    function somaImposto($taxaImposto,$custo){
        $mediaImposto=$taxaImposto/100;
        $mediaImpostoProduto=$custo*$mediaImposto;
        $custofinal=$custo+$mediaImpostoProduto;
        return $custofinal;
    }

    print "Digite a porcentagem em taxa de impostos: ";
    $taxaImposto = (int) fgets(STDIN);
    print "Digite o valor original do produto: ";
    $custo = (float) fgets(STDIN);
    $custofinal = somaImposto($taxaImposto,$custo);
    print "Depois de aplicar a carga tributária, o custo do produto se torna: ".$custofinal;