<main>
<?php
$MSG = "Sua média é:";
$_nome = $_POST["nome"];
$_sobrenome = $_POST["sobrenome"];
$_nota1 = $_POST["nota1"];
$_nota2 = $_POST["nota2"];
$_nota3 = $_POST["nota3"];
$_media= (($_nota1+$_nota2+$_nota3)/3);

if ($_media >=9) $_media =  "MB";
else if ($_media >= 7) $_media =  "B";
else if ($_media >= 4 ) $_media =  "R";
else $_media =  "I";

echo  "<p>É um prazer te conhecer $_nome $_sobrenome</p> <br> <p> sua média é: $_media </p>";
?>
</main>