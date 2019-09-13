<?php
    print "\n Digite um número inteiro: ";
        $numero_escolhido = (int) fgets(STDIN);

            $numero_sendo_fatorado = 1;

                print "\n {$numero_escolhido}! = ";
                    for ($fator = $numero_escolhido; $fator > 0; $fator--) {
                            if ($fator > 1) {
                                print "{$fator} x ";
                            }
                            elseif ($fator == 1) {
                                print "{$fator} = ";
                            }
                                $numero_sendo_fatorado *= $fator;
                    }
                        print "$numero_sendo_fatorado \n\n";
?>