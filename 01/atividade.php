<?php
    # 1
    // Crie uma variável para nome e outra para profissão
    // Escreva a mensagem "Fulano é tal_profissao"

    # 2
    // Crie uma variável senha e aramezene "senha123"
    // Verifique se a senha tem mais de 8 caracteres
    // Se sim, diga que a senha é válida. Se não, diga que é inválida

    # 3
    // Corrija a palavra "ExEmPlO" para que ela fique totalmente em minúsculo

    # 4
    // Corrija o link "  http://exemplo.com  " para que ele não tenha espaços inválidos

    # 5
    // Inverta a string "abcd123" e encontre a posição do caractere "3" após a inversão



     #1 
     $nome = "David <br>";
     $profissao = "Dev";
    
     $nome_profissao = $nome . "É" . $profissao;
     echo  $nome_profissao;


     echo "<br>";
     #2
     $texto = "senha123";
     //echo strlen($texto); 

     if(strlen($texto)>= 8){
        echo "senha válida";
     }else{
        echo "senha invalida";
     }
     echo "<br>";

      #3
      echo $texto = "ExEmPlO <br>";
      $texto_minusculo = strtolower($texto);
      echo $texto_minusculo;

      #4
        $link = "  http://exemplo.com  ";
        echo strlen( $link);
        echo "<br>";
        $link_sem_espacos = trim( $link);
        echo strlen( $link_sem_espacos);

         # 5
    // Inverta a string "abcd123" e encontre a posição do caractere "3" após a inversão
    $stringOriginal = "abcd123";
    $stringInvertida = strrev($stringOriginal);
    echo strpos($stringInvertida, "3");
?>