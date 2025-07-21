<?php
require_once __DIR__ . '/../CONFIG/db.php';

class Product {
    private $conn;

    public function __construct() {
        $db = new Database();
        $this->conn = $db->connect();
    }

    public function getAllProducts() {
        $stmt = $this->conn->query("SELECT * FROM t_products LIMIT 12");
        return $stmt->fetchAll();
    }

    public function getCategories() {
        $stmt = $this->conn->query("SELECT * FROM t_categories LIMIT 12");
        return $stmt->fetchAll();
    }
    public function getProductById($productId) {
    $stmt = $this->conn->prepare("SELECT * FROM t_products WHERE product_id = :productId");
    $stmt->bindParam(':productId', $productId, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

}
