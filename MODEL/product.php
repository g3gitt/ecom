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

    public function getProductsByCategories($category_id){

$stmt = $this->conn->prepare("SELECT p.*, p.img_url AS product_img, c.category_name, c.img_url AS category_img FROM t_products p JOIN t_categories c ON p.r_category_id = c.category_id WHERE c.category_id = :category_id");
        $stmt->bindParam(':category_id',$category_id);
        $stmt->execute();
        return $stmt->fetchall();
    }


}
