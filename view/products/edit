<?php 
require_once __DIR__ . '/../../config/paths.php';
require_once TEMPLATES_DIR . '/header.php';
?>

<h2>Редактирование товара</h2>

<form action="index.php?action=edit_product" method="post">
    <div>
        <label>ID товара:</label>
        <input type="text" name="id" value="<?= htmlspecialchars($product['id']) ?>" readonly>
        <small>(ID нельзя изменить)</small>
    </div>
    
    <div>
        <label>Название:</label>
        <input type="text" name="name" value="<?= htmlspecialchars($product['name']) ?>" required>
    </div>
    
    <div>
        <label>Описание:</label>
        <textarea name="description" rows="4"><?= htmlspecialchars($product['description']) ?></textarea>
    </div>
    
    <div>
        <label>Цена:</label>
        <input type="number" step="0.01" name="price" value="<?= htmlspecialchars($product['price']) ?>" required>
    </div>
    
    <div>
        <label>Категория:</label>
        <input type="text" name="category" value="<?= htmlspecialchars($product['category']) ?>">
    </div>
    
    <button type="submit" class="btn-save">Сохранить изменения</button>
    <a href="index.php?action=products" class="btn-cancel">Отмена</a>
</form>

<?php 
require_once TEMPLATES_DIR . '/footer.php';
?>
