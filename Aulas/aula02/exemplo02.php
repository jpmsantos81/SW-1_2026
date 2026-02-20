<?php
$nome = "João";
$idade = 15;
$altura = 1.75;
$status = true;

//exibir valores na tela
echo "Meu nome é $nome";
echo "<br>";
echo "Meu nome é ". $nome;
echo "<br>";
echo 'Meu nome é $nome';
echo "<br>";
echo $nome;
echo "<br>";

//tipo das variaveis
var_dump($altura);
echo "<br>";
print_r($altura);
echo "<br>";

//curiosidades sobre os booleanos no php
echo "status é $status";
$a = 50;
$b = 20;
echo "<br>";
echo "Soma: ($a + $b)";
?>