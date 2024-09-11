<?php
require_once 'DatabaseRepository.php';

$id = $_GET['id'];

DatabaseRepository::deleteItem($id);
header('Location: lista_itens.php');
exit;

?>

