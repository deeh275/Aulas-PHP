<?php
// ESTRUTURAS DE REPETIÇÃO EM PHP

// EXEMPLO 1: FOR
echo "exemplo 1: for <br>";

//for ($i = 20; $i < 50 ; $i ++ )
for ($i = 20; $i < 50 ; $i = $i +5 ) {
    echo "numeros $i <br>";
}
echo "<br>";

// Exemplo 2: while
echo "exemplo 2: while <br>";

$contador = 1;

while($contador <= 5){
    echo "numero $contador <br>";
    $contador ++;
}

// Exemplo 3: do while
echo "exemplo 3: do while <br>";

$cont_do = 1;
do {
    echo "numero $cont_do <br>";
    $cont_do++;
}while ($cont_do <=5);

$cliente_deseja = true;

do{
    echo "deseja adicionar um produto ao carrinho? <br>";
    $cliente_deseja = false;
}while ($cliente_deseja);

// Exemplo 4: foreach
$array_vogais = ["a", "e", "i", "o", "u"];

foreach($array_vogais as $vogal) {
    echo "vogal $vogal <br>";
}

?>