<?php

require_once __DIR__. '/../CONFIG/db.php';

class like{
    private $conn;

   public function __construct(){
    $db=new Database();
    $this->conn=$db->connect();
   }

   public function addToLike($productId,$userId){
    $stmt=$this->conn->prepare("INSERT INTO t_like (r_user_id,r_product_id) VALUES (:userId,:productId)");
    $stmt->bindParam(':userId',$userId);
    $stmt->bindParam(':productId',$productId);
    return $stmt->execute();
   }
   public function showLike($userId){
    $stmt=$this->conn->prepare(" SELECT 
            p.product_id,
            p.product_name,
            p.img_url,
            p.price,
            p.price_original,
            p.discount_percent,
            p.stock_status,
            c.like_id
        FROM t_like c
        JOIN t_products p ON c.r_product_id = p.product_id
        WHERE c.r_user_id = :userId
    ");
    $stmt->bindParam(':userId',$userId);
     $stmt->execute();
     return $stmt->fetchALL();
   }
}
?>