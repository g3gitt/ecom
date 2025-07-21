<?php
 include_once 'CONTROLLER/ProductController.php';
 include_once 'INCLUDES/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Fashion Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="ASSETS/home.css">
</head>
<body>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <!--Header-->
        
          <!--ticker-->
        <tr>
                        
              <td class="ticker">
                <div class="ticker-container">
                    <div class="ticker-item">🔥 Sale ends today! 50% off!</div>
                    <div class="ticker-item">🚚 Free delivery on ₹499+</div>
                    <div class="ticker-item">👗 New arrivals just dropped</div>
                    <div class="ticker-item">🧥 Shop winter wear now!</div>
                    <div class="ticker-item">💥 Buy 1 Get 1 Free!</div>
                </div>
                </td>

             

        </tr>
        <!--body-->
         <tr>
            <td>
                   <h2>New Arrivals</h2>
           <div class="scroll">
                <?php foreach ($products as $p): ?>
  <span class="new-arrivals">

      <span class="product-card">

       <a href="index.php?product_id=<?= $p['product_id'] ?>">


          <img src="<?= $p['img_url'] ?>" alt="<?= htmlspecialchars($p['product_name']) ?>">
    </a>
    
                </span>
                <?php endforeach; ?>
                </span>
                
                </div>

<!-- Trending Categories -->
                <h2>Trending Categories</h2>
               
                    <div class="cat">
                     
                          <?php 
                              foreach ($categories as $c) {
                               echo' <a href="index.php?category_id='.$c['category_id'].'">';
                              echo '<img src="' . htmlspecialchars($c['img_url']) . '" alt="' . htmlspecialchars($c['category_name']) . '">';
                              echo'</a>';
                            }
                     ?>
                    </div>
              


            </td>
        </tr>
          <!--footer-->
        <tr>
  <td style="background-color: #222; color: #fff; padding: 20px; text-align: center; font-size: 14px;">
    &copy; 2025 G Style. All rights reserved. |
    <a href="#" style="color: #ffd023; text-decoration: none;">Privacy Policy</a> |
    <a href="#" style="color: #ffd023; text-decoration: none;">Contact Us</a>
  </td>
</tr>

    </table>
</body>
</html>