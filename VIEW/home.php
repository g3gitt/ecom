<?php
 include_once 'CONTROLLER/ProductController.php';
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
        <tr >
            <td class="header" >
             
              <nav class="navbar navbar-expand-lg" id="custom-navbar">
                <div class="container-fluid">
                    <!-- Brand -->
                    <a class="navbar-brand" id="brand-logo" href="#">G Style</a>

                    <!-- Toggler -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Links -->
                    <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- Men Dropdown -->
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Men
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Topwear</a></li>
                            <li><a class="dropdown-item" href="#">Bottomwear</a></li>
                            <li><a class="dropdown-item" href="#">Allwear</a></li>
                        </ul>
                        </li>

                        <!-- Women Dropdown -->
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Women
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Topwear</a></li>
                            <li><a class="dropdown-item" href="#">Bottomwear</a></li>
                            <li><a class="dropdown-item" href="#">Allwear</a></li>
                        </ul>
                        </li>
                    </ul>

                    <!-- Login Button -->
                    <div class="d-flex" id="login-button">
                        <a href="#" class="btn">Login</a>
                    </div>
                    </div>
                </div>
                </nav>

               
            </td>
        </tr>
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
  <div class="new-arrivals">
    <?php foreach ($products as $p): ?>
      <div class="product-card">

       <a href="index.php?product_id=<?= $p['product_id'] ?>">


          <img src="<?= $p['img_url'] ?>" alt="<?= htmlspecialchars($p['product_name']) ?>">
    </a>
    <?php endforeach; ?>
  </div>
</div>

<!-- Trending Categories -->
                <h2>Trending Categories</h2>
               
                    <div class="cat">
                     
                          <?php 
                              foreach ($categories as $c) {
                              echo '<img src="' . htmlspecialchars($c['img_url']) . '" alt="' . htmlspecialchars($c['category_name']) . '">';
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