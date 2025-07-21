<?php
      include_once 'INCLUDES/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= htmlspecialchars($product['product_name']) ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="ASSETS/V_product.css">
</head>
<body>

  <div class="product-card">
    <div class="product-image">
      <img src="<?= htmlspecialchars($product['img_url']) ?>" alt="<?= htmlspecialchars($product['product_name']) ?>">
    </div>
    <div class="product-details">
      <h1><?= htmlspecialchars($product['product_name']) ?></h1>

      <?php if (!empty($product['price_original'])): ?>
        <div class="price">
          <del>₹<?= htmlspecialchars($product['price_original']) ?></del>
          <span>₹<?= htmlspecialchars($product['price']) ?></span>
        </div>
      <?php else: ?>
        <div class="price">₹<?= htmlspecialchars($product['price']) ?></div>
      <?php endif; ?>

      <?php if (!empty($product['discount_percent'])): ?>
        <div class="discount"><?= htmlspecialchars($product['discount_percent']) ?>% OFF</div>
      <?php endif; ?>

      <div class="category">Category: <?= htmlspecialchars($product['category']) ?></div>
      <div class="gender">Gender: <?= htmlspecialchars($product['gender']) ?></div>

      <?php if (!empty($product['fit'])): ?>
        <div class="fit">Fit: <?= htmlspecialchars($product['fit']) ?></div>
      <?php endif; ?>
      <?php if (!empty($product['material'])): ?>
        <div class="material">Material: <?= htmlspecialchars($product['material']) ?></div>
      <?php endif; ?>
      <?php if (!empty($product['neck'])): ?>
        <div class="neck">Neck: <?= htmlspecialchars($product['neck']) ?></div>
      <?php endif; ?>
      <?php if (!empty($product['sleeve_style'])): ?>
        <div class="sleeve">Sleeves: <?= htmlspecialchars($product['sleeve_style']) ?></div>
      <?php endif; ?>
      <?php if (!empty($product['hemline'])): ?>
        <div class="hemline">Hemline: <?= htmlspecialchars($product['hemline']) ?></div>
      <?php endif; ?>
      <?php if (!empty($product['occasion'])): ?>
        <div class="occasion">Occasion: <?= htmlspecialchars($product['occasion']) ?></div>
      <?php endif; ?>

      <?php if (!empty($product['rating'])): ?>
        <div class="rating">Rating: <?= htmlspecialchars($product['rating']) ?> ★</div>
      <?php endif; ?>

      <div class="stock">Availability: <?= $product['stock_status'] == 'in_stock' ? 'In Stock' : 'Out of Stock' ?></div>
      <p class="description"><?= htmlspecialchars($product['description']) ?></p>

      <button class="buy-btn">Add to Cart</button>
    </div>
  </div>

</body>
</html>
