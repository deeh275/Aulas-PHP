<?php
require_once 'DatabaseRepository.php';

$id = (int)$_GET['id'];
if (DatabaseRepository::comprarItem($id)) {
    header('Location: lista_compras.php');
    exit;
} 
?>
