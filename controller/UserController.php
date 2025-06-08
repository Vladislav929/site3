<?php
require_once __DIR__ . '/../model/UserModel.php';
require_once __DIR__ . '/../config/database.php';

class UserController {
    private $model;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->model = new UserModel($db);
    }

    public function index() {
        $users = $this->model->getAllUsers();
        require_once __DIR__ . '/../view/users/list.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->addUser(
                $_POST['username'],
                $_POST['email'],
                password_hash($_POST['password'], PASSWORD_DEFAULT),
                $_POST['role']
            );
            header("Location: index.php?action=users");
            exit;
        }
        require_once __DIR__ . '/../view/users/add.php';
    }

    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $password = !empty($_POST['password']) 
                ? password_hash($_POST['password'], PASSWORD_DEFAULT)
                : $_POST['current_password'];
                
            $this->model->updateUser(
                $_POST['id'],
                $_POST['username'],
                $_POST['email'],
                $password,
                $_POST['role']
            );
            header("Location: index.php?action=users");
            exit;
        }
        
        $user = $this->model->getUser($_GET['id']);
        require_once __DIR__ . '/../view/users/edit.php';
    }

    public function delete() {
        if (isset($_GET['id'])) {
            $this->model->deleteUser($_GET['id']);
        }
        header("Location: index.php?action=users");
        exit;
    }
}
?>
