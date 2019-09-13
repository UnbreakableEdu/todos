<?php

class Usuario
{
// as propriedades
public $primeiroNome;
public $ultimoNome;
// metodo que diz Ola ao usuario
public function hello()
{
return "Olá, " . $this->primeiroNome ." ". $this->ultimoNome;
}
}

$user1 = new Usuario();

$user1->primeiroNome = "Johnny";
$user1->ultimoNome = "Bravo";

echo $user1->hello();