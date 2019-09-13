<?php

    //$aumento=0.08;//erro
    
    function calcularAumento($salario,$aumento){//procedimento
        //$aumento=0.08;//funciona tambem assim
        $salario = $salario + ($salario*$aumento);
        print $salario;
    }

    //calcularAumento (1000.00,0.08);

