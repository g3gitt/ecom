<?php
    require_once __DIR__ . '/../MODEL/like.php';
    
session_start();
 $userId = $_SESSION['user_id'] ?? null;

    $likeModel=new like();
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if($_GET['action']=='addLike'){
            $productId = $_POST['product_id'] ?? null;
            $likeModel->addToLike($productId, $userId);
            header("Location: ../VIEW/V_like.php");
            exit();
        }
    }
   $like=  $likeModel->showLike($userId);
?>