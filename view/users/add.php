<?php require_once __DIR__ . '/../templates/header.php'; ?>

<h2>Добавление пользователя</h2>

<form action="index.php?action=add_user" method="post">
    <div class="form-group">
        <label>Имя пользователя:</label>
        <input type="text" name="username" required>
    </div>
    
    <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" required>
    </div>
    
    <div class="form-group">
        <label>Пароль:</label>
        <input type="password" name="password" required>
    </div>
    
    <div class="form-group">
        <label>Роль:</label>
        <select name="role" required>
            <option value="admin">Администратор</option>
            <option value="manager">Менеджер</option>
            <option value="user" selected>Пользователь</option>
        </select>
    </div>
    
    <button type="submit" class="btn-submit">Добавить</button>
    <a href="index.php?action=users" class="btn-cancel">Отмена</a>
</form>

<?php require_once __DIR__ . '/../templates/footer.php'; ?>
