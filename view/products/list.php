<?php require_once __DIR__ . '/../templates/header.php'; ?>

<h2>Список товаров</h2>
<a href="index.php?action=add_product">Добавить товар</a>

<table>
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Описание</th>
        <th>Цена</th>
        <th>Категория</th>
        <th>Действия</th>
    </tr>
    <?php while ($row = $products->fetch(PDO::FETCH_ASSOC)): ?>
    <tr>
        <td><?= htmlspecialchars($row['id']) ?></td>
        <td><?= htmlspecialchars($row['name']) ?></td>
        <td><?= htmlspecialchars($row['description']) ?></td>
        <td><?= htmlspecialchars($row['price']) ?></td>
        <td><?= htmlspecialchars($row['category']) ?></td>
        <td>
            <a href="index.php?action=edit_product&id=<?= $row['id'] ?>">Редактировать</a>
            <a href="index.php?action=delete_product&id=<?= $row['id'] ?>">Удалить</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>
