<?php

/// INTRODUÇÃO A ARRAYS EM PHP 

// Definição de arrays

$fruta = array("maça", "banana", "laranja", "morango");
print_r($fruta);
echo "<br>";

$numeros = [2, 30, 20, 9];
print_r($numeros);
echo "<br>";

$alunos = array("joão" => 18, "maria" => 20,);
print_r($alunos);
echo "<br>";

//Acessando elementos dentro de um array
echo "A segunda frunta é: " . $fruta[1] . "<br>";
echo "O terceiro número: " . $numeros[2] . "<br>";
echo "A idade de João é: "  . $alunos["joão"] . " anos <br>";

// Alterando ele/ Alterando elementos de um array
$frutas[0] = "Pera";
print_r($frutas);
echo "<br>";

$numeros[4] = 100;
print_r($numeros);
echo "<br>";

$alunos["Maria"] = 21;
$alunos["Ana"] = 21;
print_r($alunos);

?>


?>