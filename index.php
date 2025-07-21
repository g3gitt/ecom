<?php
require_once 'CONTROLLER\ProductController.php';

$controller = new ProductController();
if (isset($_GET['product_id'])) {
    $controller->IndividualProductPage($_GET['product_id']);
} else {
    $controller->showHomePage();
}
?>