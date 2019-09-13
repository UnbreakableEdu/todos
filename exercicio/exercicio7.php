<?php
    $qtdPrestacao=0;
    $valorTotal=0;
    function valorPagamento($valorPrestacao,$diasAtraso){
        if($diasAtraso=0){
            $valorFinal=$valorPrestacao;
        }else{
            $juroDias=0.1*$diasAtraso;
            $taxaJuros=3;
            $taxaJurosDecimal=($taxaJuros+$juroDias)/100;
            $taxaTotalJuros=$valorPrestacao*$taxaJurosDecimal;
            $valorFinal=$valorPrestacao+$taxaTotalJuros;
            }
        return $valorFinal;
    }
    $valorPrestacao=1;
    while($valorPrestacao<>0){
        print "Digite o valor da prestação: ";
        $valorPrestacao = (float) fgets(STDIN);
        print "Digite o número de dias em atraso: ";
        $diasAtraso = (float) fgets(STDIN);
        $valorFinal = valorPagamento($valorPrestacao,$diasAtraso);
        print "Depois de aplicar a taxa de juros, o custo da prestação é de: ".$valorFinal."\n";
        if($valorPrestacao<>0){
            $qtdPrestacao=$qtdPrestacao+1;
        }
        $valorTotal=$valorTotal+$valorFinal;
    }

        print "    Relatório do dia:   ";
        print " Foram pagas ".$qtdPrestacao." prestações ";
        print " Em valor total de: ".$valorTotal;
    