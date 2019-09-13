<?php
// Declara a classe
class Carro {
// propriedades
public $comp;
public $cor = 'preta';
public $temTetoSolar = true;

// método que diz olá
public function hello(){
return "Olá!";
}
}
// Cria uma instância
$bmw = new Carro();
$mercedes = new Carro();

// Obtem (Get) os valores
echo $bmw->cor; // preta
echo "<br />";
echo $mercedes->cor; // preta
echo "<hr />";

// Atribui (Set) os valores
$bmw->cor = 'azul';
$bmw->comp = "BMW";
$mercedes->comp = "Mercedes Benz";
// Obtem os valores novamente
echo $bmw->cor; // azul
echo "<br />";
echo $mercedes->cor; // preta
echo "<hr />";
echo $bmw->comp; // BMW
echo "<br />";
echo $mercedes->comp; // Mercedes Benz
echo "<hr />";

// Usa os métodos para obter um “Olá”
echo $bmw->hello(); // Olá
echo "<br />";
echo $mercedes->hello(); // Olá
?>