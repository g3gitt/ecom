<?php
    require_once __DIR__ . '/../MODEL/cart.php';
    
session_start();
 $userId = $_SESSION['user_id'] ?? null;

    $cartModel=new cart();
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if($_GET['action']=='addCart'){
            $productId = $_POST['product_id'] ?? null;
            $cartModel->addToCart($productId, $userId);
            header("Location: ../VIEW/V_cart.php");
            exit();
        }
    }
   $cart=  $cartModel->showCart($userId);
?>