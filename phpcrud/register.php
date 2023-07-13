<?php
include 'server.php';

if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $encryptedpassword = md5($_POST['password']); // Encrypt the password using MD5

  if ($username === 'admin') {
    // Admin registration
    $sql = "INSERT INTO `admins` (`username`, `email`, `password`) VALUES ('$username', '$email', '$encryptedpassword')";
    $result = mysqli_query($con, $sql);

    if ($result) {
      header('location:index.php');
      exit;
    } else {
      die(mysqli_error($con));
    }
  } else {
    // User registration
    $sql = "INSERT INTO `users` (`username`, `email`, `password`) VALUES ('$username', '$email', '$encryptedpassword')";
    $result = mysqli_query($con, $sql);

    if ($result) {
      header('location:user.php');
      exit;
    } else {
      die(mysqli_error($con));
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <title>Registration</title>
  </head>
  <body>
    <h1 class="my-5">Register</h1>
    <form class="regs" method="post">
      <div class="container boxss">
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" class="form-control custom-input" autocomplete="off" name="username">
        </div>
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control custom-input" autocomplete="off" name="email">
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control custom-input" autocomplete="off" name="password">
        </div>
        <button type="submit" class="btn btn-primary regt btns" name="submit">Register</button>
        <p class="linksss">Do you have an account? <a href="index.php">Login</a></p>
      </div>
    </form>
  </body>
</html>
