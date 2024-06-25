<?php
//// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO
 
 
// Desafio 1: Contagem Regressiva
/*
    Crie um programa que solicite ao usuário um número inteiro positivo N e realize uma contagem regressiva até zero.
    Após cada contagem, exiba a mensagem "Falta X segundos" onde X representa o número de segundos restantes para chegar a zero.
*/
$numero = 5; //Número fornecido pelo usuário.
echo "Contagem Regressiva <br>";
 
// Solução com for
 
// Solução com while
 
// Solução com do-while
 
// Desafio 2: Tabuada
/*
    Crie um programa que exiba a tabuada de multiplicação de um número fornecido pelo usuário.
    A tabuada deve ser exibida de 1 até 10.
*/
 
$tabuada_numero = 8;
 
// Solução com o FOR
 
// Solução com while
 
// Desafio 3: Sequência Fibonacci
/*
    A sequência de Fibonacci é uma sequência de números inteiros em que cada termo é a soma dos dois anteriores.
    Crie um programa que solicite ao usuário um número N e exiba os N primeiros termos da sequência de Fibonacci.
*/
 
// Solução com for
 
// Solução com while
 
//// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO
 
// Atividade 1: Verificar se a soma de A + B é igual a C
/*
    Solicita três números inteiros ao usuário (A, B e C) e verifica se a soma de A e B é igual a C.
*/
$A = 5;
$B = 10;
$C = 15;
 
// Atividade 2: Calcular o quadrado de um número
/*
    Solicita ao usuário um número inteiro e calcula o quadrado desse número.
*/
$numero = 8;
// Implementação do Cálculo do Quadrado
 
 
// Atividade 3: Verificar se um número é par ou ímpar
/*
    Solicita ao usuário um número inteiro e verifica se ele é par ou ímpar.
*/
$numero = 14;
// Implementação da Verificação de Paridade
 
// Atividade 4: Calcular a média de três números
/*
    Solicita ao usuário três números e calcula a média aritmética entre eles.
*/
$numero1 = 10;
$numero2 = 15;
$numero3 = 20;
 
// Implementação do Cálculo da Média
 
// Atividade 5: Verificar se um número é múltiplo de outro
/*
    Solicita ao usuário dois números e verifica se o primeiro é múltiplo do segundo.
*/
$numeroMultiplo = 15;
$multiploDe = 5;
// Implementação da Verificação de Múltiplo
 
//// Atividade 6: Conversão de Horas em Minutos
/*
    Solicita ao usuário a quantidade de horas e minutos e converte isso para o equivalente total de minutos.
*/
$horas_string = "01:30";
 
// Implementação de Conversão de Horas em Minutos
 
echo "O equivalente total em minutos de $horas_string é: XX <br>";
 
/// Atividade 7: Desenho de Pirâmide
/*
    Solicita ao usuário a altura de uma pirâmide (número de linhas) e desenha-a na tela usando asteriscos (*) em cada linha.
*/
$altura_piramide = 5;
// Implementação de Desenho de Pirâmide
 
//// Atividade 8: Contagem de Dígitos em um Número
/*
    Solicita ao usuário um número inteiro positivo e conta quantos dígitos esse número possui.
*/
$numeroDigitos = 2048;
// Implementação de Contagem de Dígitos em um Número
 
//// Atividade 9: Verificação de Palíndromo
/*
    Solicita ao usuário uma palavra e verifica se ela é um palíndromo.
*/
$palavra = "abbabba";
 
// Implementação de Verificação de Palíndromo
 
//// Atividade 10: Ordenação de Números
/*
    Solicita ao usuário três números inteiros e os exibe em ordem crescente.
*/
$numero1 = 25;
$numero2 = 1;
$numero3 = 7;
 
// Implementação de Ordenação de Números
 
//// Atividade 11: Soma de Dígitos
/*
    Solicita ao usuário um número inteiro positivo e calcula a soma de todos os seus dígitos.
*/
$numeroSoma = 599;
// Implementação de Soma de Dígitos


#desafio1
// Solução com for
$numero = 5;

for ($i = $numero; $i >= 0 ; $i -- ){
    echo " faltam  $i segundos <br>";
}

echo "<br>";

// Solução com while

echo "Solução com while <br>";
$numero = 5;

while($numero >= 0){
    echo " faltam $numero segundos <br>";
    $numero --;
}

echo "<br>";

// Solução com do-while
echo "Solução com do while <br>";

$numero = 5;
do {
    echo " faltam $numero segundos <br>";
    $numero--;
}while ($numero >=0);

echo "<br>";

#desafio2
//tabuada em for



echo "tabuada em for <br>";

$tabuada_numero = 8;

for ($i = 1; $i <= 10 ; $i ++ ){
    echo " $tabuada_numero x $i  = " . $i*$tabuada_numero . "<br>";
}

echo "<br>";

//tabuada em while
echo "tabuada em while <br>";

$tabuada_numero = 8;
$i= 1;

while($i < 11){
    echo " $tabuada_numero x $i  = " . $i*$tabuada_numero . "<br>";
    $i ++;
}

echo "<br>";

#desafio3
// Sequência Fibonacci for
echo "Sequência Fibonacci for <br>";

$num_seguencia = 10;
 
 
for ($i = 1; $i <= $num_seguencia; $i++) {
    if ($i == 1) {
        echo "0";
    } else if ($i == 2) {
        echo "1";
    } else {
        echo $i - 1 + $i - 2;
    }
    echo "<br>";
}
 
echo "<br>";
 
// Sequência Fibonacci while
echo "Sequência Fibonacci while <br>";    

$num_seguencia = 10;
$i = 1;
while ($i <= $num_seguencia) {
    if ($i == 1) {
        echo "0";
    } else if ($i == 2) {
        echo "1";
    } else {
        echo $i - 1 + $i - 2;
    }
    echo "<br>";
    $i++;
}
 

// DESAFIOS LÓGICOS - ESTRUTURAS DE REPETIÇÃO
 
// Atividade 1
$A = 5;
$B = 10;
$C = 15;

echo "Igual a: ";
if(($A + $B)==$C) {
    echo "verdadeiro <br>";
} else {
    echo "falso <br>";
}

echo "<br>";
// Atividade 2  Calcular o quadrado de um número

$numero = 8;
echo "o quadrado do numero é <br>";
echo $numero*$numero;

echo "<br>";

//Atividade 3: Verificar se um número é par ou ímpar

$numero = 14;

if($numero % 2 == 0){
    echo "o numero é par <br>";
} else {
    echo "o numero é impar <br>";
}

echo "<br>";

$numero1 = 10;
$numero2 = 15;
$numero3 = 20;

$media = ($numero1 + $numero2 + $numero3)/3;
echo "A média aritmética é: " . $media . "<br>";

echo "<br>";

// Atividade 5: Verificar se um número é múltiplo de outro

$numeroMultiplo = 15;
$multiploDe = 5;

if($numeroMultiplo % $multiploDe ==0){
    echo " o numero é multiplo";
}else{ echo "o numero não é multiplo";

};

echo "<br>";

//// Atividade 6: Conversão de Horas em Minutos

$horas_string = "01:30";

$horas = explode(":", $horas_string);
$minutos = ($horas[0] * 60) + $horas[1];
echo "O equivalente total em minutos de $horas_string é: $minutos <br>";
echo "<hr>";
 
/// Atividade 7: Desenho de Pirâmide

$altura_piramide = 5;

for ($i = 1; $i <= $altura_piramide; $i++){ 
     echo str_repeat("*", $i). "<br>";
}

echo "<br>";

//// Atividade 8: Contagem de Dígitos em um Número

$numeroDigitos = 2048;


$numeroDigitos = strval ($numeroDigitos);
$numeroDigitos = strlen($numeroDigitos);

echo "o numero $numeroDigitos possui  $numeroDigitos <br>";

?>

