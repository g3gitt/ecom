
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Online Fashion Store</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="/ecom/ASSETS/header.css" />


</head>
<body>
  <!-- Header Navigation -->
  <nav class="navbar navbar-expand-lg" id="custom-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" id="brand-logo" href="/ecom/index.php">G Style</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!-- Men Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Men</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Topwear</a></li>
              <li><a class="dropdown-item" href="#">Bottomwear</a></li>
              <li><a class="dropdown-item" href="#">Allwear</a></li>
            </ul>
          </li>

          <!-- Women Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Women</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Topwear</a></li>
              <li><a class="dropdown-item" href="#">Bottomwear</a></li>
              <li><a class="dropdown-item" href="#">Allwear</a></li>
            </ul>
          </li>
        </ul>
       <!-- Like & Cart Icons -->



        <!-- User Dropdown -->
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown d-flex">
             <div class="icon-bar d-flex align-items-right me-3">
      <a class="nav-link me-2" href="like.php"><i class="bi bi-heart fs-5"></i></a>
      <a class="nav-link" href="/ecom/VIEW/V_cart.php"><i class="bi bi-cart fs-5"></i></a>
    </div>
            <a class="nav-link dropdown-toggle user-toggle" href="#" role="button" data-bs-toggle="dropdown" >
              <?php
                echo isset($_SESSION['user_id']) ? htmlspecialchars($_SESSION['username']) : "Account";
              ?>
            </a>
            <ul class="dropdown-menu logout-menu">
              <li><a class="dropdown-item" href="INCLUDES/logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</body>
</html>
