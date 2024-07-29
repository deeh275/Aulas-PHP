<?php

$dsn = 'mysql:host=localhost;dbname=lista_compras';
$user = 'usuario_lista_compras1';
$password = 'Senha@123';

try {
    // https://www.php.net/manual/en/pdo.connections.php
    $dbh = new PDO($dsn, $user, $password);
    echo "Conectado ao banco de dados com sucesso!";
} catch(PDOException $e) {
    echo $e;
}

// // https://www.php.net/manual/en/pdo.connections.php
// $dbh = new PDO('mysql:host=localhost;dbname=contatos', 'root', '');

?>