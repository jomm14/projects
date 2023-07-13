
<?php
session_start();
include 'server.php';

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Check if the provided username and password match the admin credentials
  if ($username === 'admin' && $password === 'passwords') {
    $_SESSION['username'] = $username; // Set the session variable
    // User is an admin, redirect to index.php
    header('Location: admin.php');
    exit;
  } else {
    // Encrypt the provided password
    $encryptedPassword = md5($password);

    // Query the database to check if the provided username and password are valid
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$encryptedPassword'";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
      $_SESSION['username'] = $username; // Set the session variable
      // User is authenticated, redirect to the desired page
      header('Location: user.php');
      exit;
    } else {
      // User authentication failed, display an error message
      echo "Invalid username or password. Please try again.";
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
  <center><h1 class=" texts">Login</h1></center>
  <form class="logss" method="post">
    <div class="container boxss">
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" class="form-control custom-input" autocomplete="off" name="username">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control custom-input" autocomplete="off" name="password">
      </div>
      <button type="submit" class="btn btn-primary btns" name="submit">Login</button>
      <p class="linkss">Don't have an account? <a href="register.php">Register</a></p>
    </div>
  </form>

</body>
</html>
