<?php
$dsn = 'mysql:host=localhost;dbname=contato';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = "SELECT * FROM contato.tb_contato;";
    $stmt = $dbh->query($sql);

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo '<pre>';
    print_r($result);
    echo '</pre>';
} catch(PDOException $e) {
    echo "Erro ao se conectar ao banco: <br>";
    echo $e;
    exit;
}

?>
