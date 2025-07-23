<?php

require_once __DIR__. '/../CONFIG/db.php';

class cart{
    private $conn;

   public function __construct(){
    $db=new Database();
    $this->conn=$db->connect();
   }

   public function addToCart($productId,$userId){
    $stmt=$this->conn->prepare("INSERT INTO t_cart (r_user_id,r_product_id) VALUES (:userId,:productId)");
    $stmt->bindParam(':userId',$userId);
    $stmt->bindParam(':productId',$productId);
    return $stmt->execute();
   }
   public function showCart($userId){
    $stmt=$this->conn->prepare(" SELECT 
            p.product_id,
            p.product_name,
            p.img_url,
            p.price,
            p.price_original,
            p.discount_percent,
            p.stock_status,
            c.cart_id
        FROM t_cart c
        JOIN t_products p ON c.r_product_id = p.product_id
        WHERE c.r_user_id = :userId
    ");
    $stmt->bindParam(':userId',$userId);
     $stmt->execute();
     return $stmt->fetchALL();
   }
}
?>