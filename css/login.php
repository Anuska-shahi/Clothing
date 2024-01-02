<?php
// login.php

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the submitted username and password
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Add your custom logic to validate the credentials
  // For simplicity, let's assume the valid username is "admin" and password is "password"
  if ($username === 'admin' && $password === 'password') {
    // Authentication successful, redirect to a dashboard or home page
    header('Location: dashboard.php');
    exit;
  } else {
    // Invalid credentials, display an error message
    $errorMessage = 'Invalid username or password. Please try again.';
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title> Login</title>
  <style>
    /* CSS styles omitted for brevity */
  </style>
</head>
<body>
  <div class="container">
    <h1>Login</h1>
    <?php if (isset($errorMessage)) : ?>
      <p style="color: red;"><?php echo $errorMessage; ?></p>
    <?php endif; ?>
    <form id="loginForm" method="POST" action="login.php">
      <div>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div>
        <button type="submit">Login</button>
      </div>
    </form>
  </div>
</body>
</html>
