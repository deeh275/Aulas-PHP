<?php
require_once 'models/DatabaseRepository.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['delete_id'])) {
        DatabaseRepository::deleteItem($_POST['delete_id']);
    }
    elseif (isset($_POST['toggle_id'])) {
        $item = DatabaseRepository::getItemById($_POST['toggle_id']);
        $new_comprado = $item['comprado'] ? 0 : 1;
        DatabaseRepository::updateItem($_POST['toggle_id'], $new_comprado);
    }
    elseif (isset($_POST['nome_produto']) && isset($_POST['quantidade'])) {
        DatabaseRepository::addItem($_POST['nome_produto'], $_POST['quantidade']);
    }
    header('Location: index.php'); 
    exit;
}
$items = DatabaseRepository::getAllItems();
if (!is_array($items)) {
    $items = [];
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
    <link href="styles.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Lista de Compras</h1>

        <form class="add-item-form" action="index.php" method="post">
            <label for="nome_produto">Nome do Produto:</label>
            <input type="text" name="nome_produto" id="nome_produto" required>
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" required>
            <button type="submit">Adicionar Item</button>
        </form>

        <h2>Itens a Comprar</h2>
        <ul class="items-list">
            <?php if (!empty($items)): ?>
                <?php foreach ($items as $item): ?>
                    <?php if (!$item['comprado']): ?>
                        <li class="item">
                            <?= htmlspecialchars($item['nome_produto']) ?> (<?= htmlspecialchars($item['quantidade']) ?>)
                            <div class="actions">
                                <form action="index.php" method="post" class="inline-form">
                                    <input type="hidden" name="toggle_id" value="<?= $item['id'] ?>">
                                    <button type="submit" class="btn">Marcar como Comprado</button>
                                </form>
                                <form action="index.php" method="post" class="inline-form">
                                    <input type="hidden" name="delete_id" value="<?= $item['id'] ?>">
                                    <button type="submit" class="btn delete">Deletar</button>
                                </form>
                            </div>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php else: ?>
                <li>Nenhum item a comprar.</li>
            <?php endif; ?>
        </ul>

        <h2>Itens Comprados</h2>
        <ul class="items-list">
            <?php if (!empty($items)): ?>
                <?php foreach ($items as $item): ?>
                    <?php if ($item['comprado']): ?>
                        <li class="item comprado">
                            <?= htmlspecialchars($item['nome_produto']) ?> (<?= htmlspecialchars($item['quantidade']) ?>)
                            <div class="actions">
                                <form action="index.php" method="post" class="inline-form">
                                    <input type="hidden" name="toggle_id" value="<?= $item['id'] ?>">
                                    <button type="submit" class="btn">Desmarcar</button>
                                </form>
                                <form action="index.php" method="post" class="inline-form">
                                    <input type="hidden" name="delete_id" value="<?= $item['id'] ?>">
                                    <button type="submit" class="btn delete">Deletar</button>
                                </form>
                            </div>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            <?php else: ?>
                <li>Nenhum item comprado.</li>
            <?php endif; ?>
        </ul>
    </div>
</body>

</html>
