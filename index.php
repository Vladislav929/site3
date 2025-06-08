
<?php
define('ROOT', __DIR__);

require_once ROOT . '/config/database.php';
require_once ROOT . '/controller/ProductController.php';
require_once ROOT . '/controller/UserController.php';
require_once 'config/database.php';
require_once 'controller/ProductController.php';
require_once 'controller/UserController.php';

$action = isset($_GET['action']) ? $_GET['action'] : 'home';

switch ($action) {
    case 'products':
        $controller = new ProductController();
        $controller->index();
        break;
    case 'add_product':
        $controller = new ProductController();
        $controller->add();
        break;
    case 'edit_product':
        $controller = new ProductController();
        $controller->edit();
        break;
    case 'delete_product':
        $controller = new ProductController();
        $controller->delete();
        break;
    case 'users':
        $controller = new UserController();
        $controller->index();
        break;
    case 'add_user':
        $controller = new UserController();
        $controller->add();
        break;
    case 'edit_user':
        $controller = new UserController();
        $controller->edit();
        break;
    case 'delete_user':
        $controller = new UserController();
        $controller->delete();
        break;
    default:
        require_once 'view/home.php';
        break;
}
?>
