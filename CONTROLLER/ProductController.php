<?php
require_once __DIR__ . '/../MODEL/Product.php';
 
class ProductController {
   
    private $productModel;
    public function __construct() {
        $this->productModel = new Product();
    }

    public function showHomePage() {
      
        $products = $this->productModel->getAllProducts();
        $categories = $this->productModel->getCategories();

        include __DIR__ . '/../VIEW/home.php';
    }
    public function IndividualProductPage($productId){
       
     
        $product = $this->productModel->getProductById($productId);
     
        include __DIR__ . '/../VIEW/V_product.php';
    }

    public function ShowCategoryPage($category_id){
        $categories=$this->productModel->getProductsByCategories($category_id);
        include __DIR__ . '/../VIEW/V_category.php';
    }
}
