<?php
session_start();
include 'server.php';

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: index.php"); // Redirect to login page if not logged in
    exit();
}

$username = $_SESSION['username'];

?>


<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Home</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <form method="post" class="forms">
    <div class="contas">
      <ul class="nav justify-content-start">
        <li class="searchsss">
          <div class="input-group mb-3 my-2">
            <button class="btn btn-primary" type="submit" name="search">Search</button>
            <input type="text" class="form-control searchbars" placeholder="Search by username or email" name="searchValue">
          <a href="user.php" class="circol my-2 bi bi-person-circle">
            <?php if (isset($_SESSION['profile_picture'])): ?>
              <img src="<?php echo $_SESSION['profile_picture']; ?>" alt="Profile Picture" width="33" height="32">
            <?php else: ?>
              <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg>
            <?php endif; ?>
          </a>
        </div>
        </li>
      </ul>
      <div class="nav-item topnav" id="myTopnav">
         
            <a class="nav-link active" aria-current="page" href="profileUpdate.php"><?php echo $username;?></a>
          
            <a class="nav-link" href="#">About Us</a>
        
            <a class="nav-link" href="#">Help</a>
          
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        
            <a class="nav-link" href="index.php">Signout</a>

            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i>
            </a>

          </div>
    </div>

    <div class="fade-in-image"> </div>
    <h1 class="fade-out-text my-5 wel">Coming Soon</h1>
  </form>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</body>
</html>
