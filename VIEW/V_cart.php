<?php

require_once __DIR__ . '/../CONTROLLER/cartController.php';
 include_once '../INCLUDES/header.php'; 
// print_r($cart);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Cart</title>
 <link rel="stylesheet" href="../ASSETS/cart.css">
</head>
<body>

  <h2>My Cart</h2>

  <div class="cart-container">
    <?php if (!empty($cart) && is_array($cart)): ?>
      <?php foreach ($cart as $item): ?>
        <div class="cart-item">
          <img src="<?= htmlspecialchars($item['img_url']) ?>" alt="<?= htmlspecialchars($item['product_name']) ?>">
          <div class="product-name"><?= htmlspecialchars($item['product_name']) ?></div>
          <div class="price">₹<?= number_format($item['price']) ?></div>
          <div class="stock"><?= htmlspecialchars($item['stock_status']) ?></div>
        </div>
      <?php endforeach; ?>
    <?php else: ?>
      <p>No items in cart.</p>
    <?php endif; ?>
  </div>

</body>
</html>
