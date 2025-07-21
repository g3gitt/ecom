<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="../ASSETS/resgister.css" />
</head>
<body>
  <div class="login-overlay">
    <div class="login-form">
      <h2>Create Account</h2>
      <form method="POST" action="../CONTROLLER/UserController.php?action=register">
        <div class="input-group">
          <label>Username</label>
          <input type="text" name="username" required />
        </div>
        <div class="input-group">
          <label>Email</label>
          <input type="email" name="email" required />
        </div>
        <div class="input-group">
          <label>Password</label>
          <input type="password" name="password" required />
        </div>
        <button type="submit" class="btn-submit">Register</button>
      </form>
      <p class="register-link">
        Already have an account? <a href="login.php">Login</a>
      </p>
    </div>
  </div>
</body>
</html>
