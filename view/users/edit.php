<?php require_once __DIR__ . '/../templates/header.php'; ?>

<h2>Редактирование пользователя</h2>

<form action="index.php?action=edit_user" method="post">
    <input type="hidden" name="id" value="<?= $user['id'] ?>">
    <input type="hidden" name="current_password" value="<?= $user['password'] ?>">
    
    <div class="form-group">
        <label>Имя пользователя:</label>
        <input type="text" name="username" value="<?= htmlspecialchars($user['username']) ?>" required>
    </div>
    
    <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
    </div>
    
    <div class="form-group">
        <label>Новый пароль (оставьте пустым, чтобы не менять):</label>
        <input type="password" name="password">
    </div>
    
    <div class="form-group">
        <label>Роль:</label>
        <select name="role" required>
            <option value="admin" <?= $user['role'] === 'admin' ? 'selected' : '' ?>>Администратор</option>
            <option value="manager" <?= $user['role'] === 'manager' ? 'selected' : '' ?>>Менеджер</option>
            <option value="user" <?= $user['role'] === 'user' ? 'selected' : '' ?>>Пользователь</option>
        </select>
    </div>
    
    <button type="submit" class="btn-submit">Сохранить</button>
    <a href="index.php?action=users" class="btn-cancel">Отмена</a>
</form>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>
