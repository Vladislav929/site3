<?php require_once __DIR__ . '/../templates/header.php'; ?>

<h2>Список пользователей</h2>
<a href="index.php?action=add_user" class="btn-add">Добавить пользователя</a>

<table class="user-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Имя пользователя</th>
            <th>Email</th>
            <th>Роль</th>
            <th>Действия</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($user = $users->fetch(PDO::FETCH_ASSOC)): ?>
        <tr>
            <td><?= htmlspecialchars($user['id']) ?></td>
            <td><?= htmlspecialchars($user['username']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?></td>
            <td><?= htmlspecialchars($user['role']) ?></td>
            <td class="actions">
                <a href="index.php?action=edit_user&id=<?= $user['id'] ?>" class="btn-edit">Редактировать</a>
                <a href="index.php?action=delete_user&id=<?= $user['id'] ?>" class="btn-delete">Удалить</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>
