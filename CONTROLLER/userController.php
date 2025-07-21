<?php
require_once __DIR__ . '/../MODEL/User.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_GET['action'] ?? '';

    if ($action === 'register') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $userModel = new User();
        $userModel->register($username, $email, $password_hash);

        header("Location: ../VIEW/login.php");
        exit();
    }

    if ($action === 'login') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $userModel = new User();
        $user = $userModel->getUserByEmail($email);

        if ($user && password_verify($password, $user['password_hash'])) {
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];
            header("Location: ../index.php");
            exit();
        } else {
            echo "Invalid credentials.";
        }
    }
}
