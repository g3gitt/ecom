<?php
require_once __DIR__ . '/../CONFIG/db.php';

class User {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function register($username, $email, $passwordHash) {
    $stmt = $this->conn->prepare("INSERT INTO t_users (username, email, password_hash) VALUES (:username, :email, :password)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $passwordHash);
    return $stmt->execute();
}

    public function getUserByEmail($email) {
    $stmt = $this->conn->prepare("SELECT * FROM t_users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

}
