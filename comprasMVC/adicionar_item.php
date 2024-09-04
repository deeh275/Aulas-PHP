<?php
require_once 'DatabaseRepository.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome_produto = $_POST['nome_produto'];
    $quantidade = $_POST['quantidade'];

    DatabaseRepository::addItem($nome_produto, $quantidade,);

    header('Location: lista_compras.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Item</title>
    
    <style>

.form-container {
    max-width: 600px;
    margin: auto;
    padding: 1rem;
    background: #fff;
    border-radius: 0.5rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.form-container h1 {
    font-size: 1.5rem;
    margin-bottom: 1rem;
    color: #333;
}

.form-container label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: bold;
}

.form-container input, .form-container button {
    width: calc(100% - 1.5rem);
    padding: 0.75rem;
    border-radius: 0.25rem;
    box-sizing: border-box; 
}

.form-container input {
    border: 1px solid #ddd;
    margin-bottom: 1rem;
}

.form-container button {
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
}

.form-container button:hover {
    background-color: #0056b3;
}

.form-container a {
    display: inline-block;
    margin-top: 1rem;
    color: #007bff;
    text-decoration: none;
}

.form-container a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body class="bg-gray-100 p-6">
    <div class="form-container">
        <h1>Adicionar Item</h1>

        <form action="adicionar_item.php" method="post">
            <div>
                <label for="nome_produto">Nome do Produto:</label>
                <input type="text" name="nome_produto" id="nome_produto" required>
            </div>
            <div>
                <label for="quantidade">Quantidade:</label>
                <input type="number" name="quantidade" id="quantidade" required>
            </div>
           
            <div>
                <button type="submit">Adicionar</button>
            </div>
        </form>

        <a href="lista_compras.php">Voltar para a lista de itens</a>
    </div>
</body>
</html>
