<?php
session_start();
require_once '../app/models/UserModel.php';

class AuthController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    // Xử lý đăng nhập
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $environment = $_POST['environment']; // Lấy giá trị từ radio button
    
            $user = $this->userModel->checkLogin($username, $password);
    
            if ($user) {
                $_SESSION['user'] = $user['username'];
                $_SESSION['environment'] = $environment; // Lưu môi trường vào session
                
                header("Location: ../../public/image.php");
                exit();
            } else {
                $_SESSION['error'] = "Tên đăng nhập hoặc mật khẩu không đúng!";
                header("Location: ../app/views/login.php");
                exit();
            }
        }
    }
    

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        header("Location: ../app/views/login.php");
        exit();
    }    
}
?>
