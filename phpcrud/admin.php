<?php
include 'server.php';

// Handle the search form submission
if (isset($_POST['search'])) {
  $searchValue = $_POST['searchValue'];

  // Query the database to search for users matching the provided value
  $sql = "SELECT * FROM users WHERE username LIKE '%$searchValue%' OR email LIKE '%$searchValue%'";
  $result = mysqli_query($con, $sql);
} else {
  // By default, fetch all users from the database
  $sql = "SELECT * FROM users";
  $result = mysqli_query($con, $sql);
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Admin View</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <center><h1 class="my-5">ADMIN SYSTEM</h1></center>

  <form method="post" class="container my-3 columss">
    <div class="input-group mb-3 my-2">
      <button class="btn btn-primary" type="submit" name="search">Search</button>
      <input type="text" class="form-control searchbars" placeholder="Search by username or email" name="searchValue">
      
    </div>
    <div class="container adduser">
      <a href="register.php" class="btn btn-primary text-light adduserss">Add User</a>
      <input class="btn btn-primary adduserss" type="submit" name="logout" value="Logout">
    </div>
  </form>
  <form action="index.php" method="post">
      
      <?php
        // Start the session

        // Check if the logout button was clicked
        if (isset($_POST['logout'])) {
          // Destroy all session data
          session_destroy();
          // Redirect to the login page
          header("Location: index.php");
          exit(); // Make sure to exit after redirecting
        }
      ?>

    </form>
<div style="overflow-x:auto;">  
  <table class="table table-dark my-2">
    <thead>
      <tr>
        <th>id</th>
        <th>Username</th> 
        <th>Email</th>
        <th>Password (Decrypted)</th>
        <th>Password (Encrypted)</th>
        <th>Option</th>
      </tr>
    </thead>
    <tbody>
      <?php
        if ($result && mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $username = $row['username'];
            $email = $row['email'];
            $password =  $row['password'];
            $encryptedPassword = md5($password); // Encrypt the password using md5()
            $decryptedPassword = $password; // You can replace this with your decryption logic

            echo '<tr class="table-active">
              <th scope="row">'.$id.'</th>
              <td colspan="1" class="table-active">'.$username.'</td>
              <td>'.$email.'</td>
              <td>'.$password.'</td>
              <td>'.$encryptedPassword.'</td>
              <td class="button-container">
                <div class="button">
                  <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                  <button class="btn btn-primary"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                </div>
              </td>
            </tr>';
          }
        } else {
          echo '<tr><td colspan="6" class="text-center">No records found.</td></tr>';
        }
      ?>
    </tbody> 
  </table>
</div>
</body>
</html>