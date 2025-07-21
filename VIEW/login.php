<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <link rel="stylesheet" href="../ASSETS/login.css" />
</head>
<body>
  <div class="login-overlay">
    <div class="login-form">
      <h2>Welcome Back</h2>
      <form method="POST" action="../CONTROLLER/UserController.php?action=login">
        <div class="input-group">
          <label>Email</label>
          <input type="email" name="email" required />
        </div>
        <div class="input-group">
          <label>Password</label>
          <input type="password" name="password" required />
        </div>
        <button type="submit" class="btn-submit">Login</button>
      </form>
      <p class="register-link">
        Don't have an account? <a href="register.php">Register</a>
      </p>
    </div>
  </div>
</body>
</html>
