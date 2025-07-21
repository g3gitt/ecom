<?php
require_once 'CONTROLLER\ProductController.php';

$controller = new ProductController();
if (isset($_GET['product_id'])) {
    $controller->IndividualProductPage($_GET['product_id']);
}else if(isset($_GET['category_id'])){
    $controller->ShowCategoryPage($_GET['category_id']);
}else {
    $controller->showHomePage();
}
?>