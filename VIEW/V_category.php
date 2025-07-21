<?php include_once 'INCLUDES/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= htmlspecialchars($categories[0]['category_name']) ?> - Category</title>
  <link rel="stylesheet" href="ASSETS/V_category.css">
</head>
<body>
  <div class="category-container">
   
    <div class="product-grid">
      <?php foreach($categories as $product): ?>
        <div class="product-card">
             <a href="index.php?product_id=<?= $product['product_id'] ?>">
          <img src="<?= htmlspecialchars($product['img_url']) ?>" class="product-img" alt="<?= htmlspecialchars($product['product_name']) ?>">
          <div class="product-info">
            <h5 class="product-name"><?= htmlspecialchars($product['product_name']) ?></h5>
            <p class="product-description"><?= htmlspecialchars($product['description']) ?></p>
            <p class="product-price">₹<?= htmlspecialchars($product['price']) ?></p>
            </a>
            <a href="#" class="add-to-cart-btn">Add to Cart</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</body>
</html>

