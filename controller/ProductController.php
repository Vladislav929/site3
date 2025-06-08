<?php
require_once __DIR__ . '/../model/ProductModel.php';
require_once __DIR__ . '/../config/database.php';

class ProductController {
    private $model;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->model = new ProductModel($db);
    }

    public function index() {
        $products = $this->model->getAllProducts();
        require_once __DIR__ . '/../view/products/list.php';
    }

    public function add() {
        if ($_POST) {
            $this->model->addProduct($_POST['name'], $_POST['description'], $_POST['price'], $_POST['category']);
            header("Location: index.php?action=products");
        }
        require_once __DIR__ . '/../view/products/add.php';
    }

    public function edit() {
    if ($_POST) {
        $this->model->updateProduct(
            $_POST['id'],
            $_POST['name'],
            $_POST['description'],
            $_POST['price'],
            $_POST['category']
        );
        header("Location: index.php?action=products");
        exit;
    }
    
    if (!isset($_GET['id'])) {
        header("Location: index.php?action=products");
        exit;
    }
    
    $product = $this->model->getProduct($_GET['id']);
    
    if (!$product) {
        header("Location: index.php?action=products");
        exit;
    }
    
    require_once ROOT . '/view/products/edit.php';
    }

    public function delete() {
        if ($_GET['id']) {
            $this->model->deleteProduct($_GET['id']);
            header("Location: index.php?action=products");
        }
    }
}
?>
