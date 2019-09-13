<?php
    print "\nDigite um número até 1000: ";
        $numero_escolhido = (int) fgets(STDIN);
            print "\n";
                    if(strlen($numero_escolhido)==3){
                        if (substr($numero_escolhido, 0,1)>1 && substr($numero_escolhido,1,1)>1 && substr($numero_escolhido,2,1)>1){
                            print substr($numero_escolhido,0,1) . " centenas, " . substr($numero_escolhido,1,1) . " dezenas e " . substr($numero_escolhido,2,1) . " unidades.\n\n";
                        }
                        elseif(substr($numero_escolhido, 0,1)>1 && substr($numero_escolhido,1,1)>1 && substr($numero_escolhido,2,1)==1){
                            print substr($numero_escolhido,0,1) . " centenas, " . substr($numero_escolhido,1,1) . " dezenas e " . substr($numero_escolhido,2,1) . " unidade.\n\n";
                        }
                        elseif(substr($numero_escolhido, 0,1)>1 && substr($numero_escolhido,1,1)==1 && substr($numero_escolhido,2,1)==1){
                            print substr($numero_escolhido,0,1) . " centenas, " . substr($numero_escolhido,1,1) . " dezena e " . substr($numero_escolhido,2,1) . " unidade.\n\n";
                        }
                        elseif(substr($numero_escolhido, 0,1)>1 && substr($numero_escolhido,1,1)==1 && substr($numero_escolhido,2,1)>1){
                            print substr($numero_escolhido,0,1) . " centenas, " . substr($numero_escolhido,1,1) . " dezena e " . substr($numero_escolhido,2,1) . " unidades.\n\n";
                        }
                        elseif(substr($numero_escolhido, 0,1)==1 && substr($numero_escolhido,1,1)>1 && substr($numero_escolhido,2,1)>1){
                            print substr($numero_escolhido,0,1) . " centena, " . substr($numero_escolhido,1,1) . " dezenas e " . substr($numero_escolhido,2,1) . " unidades.\n\n";
                        }
                        elseif(substr($numero_escolhido, 0,1)==1 && substr($numero_escolhido,1,1)>1 && substr($numero_escolhido,2,1)==1){
                            print substr($numero_escolhido,0,1) . " centena, " . substr($numero_escolhido,1,1) . " dezenas e " . substr($numero_escolhido,2,1) . " unidade.\n\n";
                        }
                        elseif(substr($numero_escolhido, 0,1)==1 && substr($numero_escolhido,1,1)==1 && substr($numero_escolhido,2,1)==1){
                            print substr($numero_escolhido,0,1) . " centena, " . substr($numero_escolhido,1,1) . " dezena e " . substr($numero_escolhido,2,1) . " unidade.\n\n";
                        }
                        elseif(substr($numero_escolhido, 0,1)==1 && substr($numero_escolhido,1,1)==1 && substr($numero_escolhido,2,1)>1){
                            print substr($numero_escolhido,0,1) . " centena, " . substr($numero_escolhido,1,1) . " dezena e " . substr($numero_escolhido,2,1) . " unidades.\n\n";
                        }
                        elseif(substr($numero_escolhido, 0,1)==1 && substr($numero_escolhido,1,1)==1 && substr($numero_escolhido,2,1)>1){
                            print substr($numero_escolhido,0,1) . " centena, " . substr($numero_escolhido,1,1) . " dezena e " . substr($numero_escolhido,2,1) . " unidades.\n\n";
                        }
                        elseif(substr($numero_escolhido, 0,1)==1 && substr($numero_escolhido,1,1)==1 && substr($numero_escolhido,2,1)>1){
                            print substr($numero_escolhido,0,1) . " centena, " . substr($numero_escolhido,1,1) . " dezena e " . substr($numero_escolhido,2,1) . " unidades.\n\n";
                        }
                        elseif(substr($numero_escolhido, 0,1)>1 && substr($numero_escolhido,1,1)>1 && substr($numero_escolhido,2,1)==0){
                            print substr($numero_escolhido,0,1) . " centenas e " . substr($numero_escolhido,1,1) . " dezenas.\n\n";
                        }
                        elseif(substr($numero_escolhido, 0,1)>1 && substr($numero_escolhido,1,1)==1 && substr($numero_escolhido,2,1)==0){
                            print substr($numero_escolhido,0,1) . " centenas e " . substr($numero_escolhido,1,1) . " dezena.\n\n";
                        }
                        elseif(substr($numero_escolhido, 0,1)==1 && substr($numero_escolhido,1,1)>1 && substr($numero_escolhido,2,1)==0){
                            print substr($numero_escolhido,0,1) . " centena e " . substr($numero_escolhido,1,1) . " dezenas.\n\n";
                        }
                        elseif(substr($numero_escolhido, 0,1)==1 && substr($numero_escolhido,1,1)==1 && substr($numero_escolhido,2,1)==0){
                            print substr($numero_escolhido,0,1) . " centena e " . substr($numero_escolhido,1,1) . " dezena.\n\n";
                        }
                        elseif(substr($numero_escolhido, 0,1)>1 && substr($numero_escolhido,1,1)==0 && substr($numero_escolhido,2,1)==0){
                            print substr($numero_escolhido,0,1) . " centenas.\n\n";
                        }
                        elseif(substr($numero_escolhido, 0,1)==1 && substr($numero_escolhido,1,1)==0 && substr($numero_escolhido,2,1)==0){
                            print substr($numero_escolhido,0,1) . " centena.\n\n";
                        }
                    }
                            if(strlen($numero_escolhido)==2){
                                if(substr($numero_escolhido, 0,1)>1 && substr($numero_escolhido,1,1)>1){
                                    print substr($numero_escolhido,0,1) . " dezenas e " . substr($numero_escolhido,1,1) . " unidades.\n\n";
                                }
                                elseif(substr($numero_escolhido, 0,1)>1 && substr($numero_escolhido,1,1)==1){
                                    print substr($numero_escolhido,0,1) . " dezenas e " . substr($numero_escolhido,1,1) . " unidade.\n\n";
                                }
                                elseif(substr($numero_escolhido, 0,1)==1 && substr($numero_escolhido,1,1)>1){
                                    print substr($numero_escolhido,0,1) . " dezena e " . substr($numero_escolhido,1,1) . " unidades.\n\n";
                                }
                                elseif(substr($numero_escolhido, 0,1)==1 && substr($numero_escolhido,1,1)==1){
                                    print substr($numero_escolhido,0,1) . " dezena e " . substr($numero_escolhido,1,1) . " unidade.\n\n";
                                }
                                elseif(substr($numero_escolhido, 0,1)>1 && substr($numero_escolhido,1,1)==0){
                                    print substr($numero_escolhido,0,1) . " dezenas.\n\n";
                                }
                                elseif(substr($numero_escolhido, 0,1)==1 && substr($numero_escolhido,1,1)==0){
                                    print substr($numero_escolhido,0,1) . " dezena.\n\n";
                                }
                            }
                                    if(strlen($numero_escolhido)==1){
                                        if(substr($numero_escolhido, 0,1)>1){
                                            print substr($numero_escolhido,0,1) . " unidades.\n\n";
                                        }
                                        else{
                                            print substr($numero_escolhido,0,1) . " unidade.\n\n";
                                        }
                                    }