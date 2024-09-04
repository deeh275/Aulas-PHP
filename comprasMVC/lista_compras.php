<?php
require_once 'DatabaseRepository.php';

$items = DatabaseRepository::getAllItems();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Itens</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .botao_comprar {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .botao_comprar:hover {
            background-color: #0056b3;
        }

        .form-container input, .botao_comprar {
            width: 100%;
            padding: 0.75rem;
            border-radius: 0.25rem;
        }

    </style>
</head>

<body>
    <h1>Lista de Itens</h1>
    <a href="adicionar_item.php">Adicionar Novo Item</a>
    <table>
        <thead>
            <tr>
                <th>Nome do Produto</th>
                <th>Quantidade</th>
                <th>Comprado</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($items as $item): ?>
                <tr>
                    <td><?= ($item['nome_produto']); ?></td>
                    <td><?= ($item['quantidade']); ?></td>
                    <td><?= $item['comprado']; ?></td>
                    <td>
                        <a href="comprar_item.php?id=<?= $item['id']; ?>" >Comprar</a>
                        <a href="deletar_item.php?id=<?= $item['id']; ?>"
                            onclick="return confirm('Tem certeza que deseja deletar este item?');">Deletar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>