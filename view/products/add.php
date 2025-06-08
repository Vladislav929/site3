<?php 
require_once __DIR__ . '/../templates/header.php'; 
?>

<h2>Добавление товара</h2>

<form action="index.php?action=add_product" method="post">
    <div>
        <label>Название:</label>
        <input type="text" name="name" required>
    </div>
    
    <div>
        <label>Описание:</label>
        <textarea name="description"></textarea>
    </div>
    
    <div>
        <label>Цена:</label>
        <input type="number" step="0.01" name="price" required>
    </div>
    
    <div>
        <label>Категория:</label>
        <input type="text" name="category">
    </div>
    
    <button type="submit">Добавить</button>
</form>

<?php 
require_once __DIR__ . '/../templates/footer.php'; 
?>
