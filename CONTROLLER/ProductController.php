<?php
require_once __DIR__ . '/../MODEL/Product.php';

class ProductController {
    public function showHomePage() {
        $productModel = new Product();
        $products = $productModel->getAllProducts();
        $categories = $productModel->getCategories();

        include __DIR__ . '/../VIEW/home.php';
    }
    public function IndividualProductPage($productId){
        $productModel = new Product();
     
        $product = $productModel->getProductById($productId);
     
        include __DIR__ . '/../VIEW/V_product.php';
    }
}
