<?php

    print "Seu nome de usuario: ";
    $nome=fgets(STDIN);

    print "Digite sua senha: ";
    $senha=fgets(STDIN);

    while($senha==$nome){
        print "Senha incorreta, digite novamente (Não se pode utilizar o nome de usuario): ";
      $senha=fgets(STDIN);
    }

    print "Cadastro realizados";



