<?php

class Usuario {
    // propriedades
    public $nome;
    public $sobrenome;
    public $email;
    
    // método que diz olá
    public function ola(){
    return "Olá";
    }
}

    $usuario1 = new Usuario();
    $usuario1->nome = 'Eduardo';
    $usuario1->sobrenome = "Onofre";
    echo $usuario1->nome; // Eduardo
    echo "<br />";
    echo $usuario1->sobrenome; // Onofre
    echo "<hr />";
    echo $usuario1->ola(); // Olá
    echo "<br />";

    $usuario2 = new Usuario();
    $usuario2-> nome = 'Jane';
    $usuario2->sobrenome = "Silva";
    echo $usuario2->nome; // Jane
    echo "<br />";
    echo $usuario2->sobrenome; // Silva
    echo "<hr />";
    echo $usuario2->ola(); // Olá
    echo "<br />";
    ?>