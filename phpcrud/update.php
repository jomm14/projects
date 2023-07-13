<?php
include 'server.php';

$id = $_GET['updateid'];
$sql = "SELECT * FROM users WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$username = $row['username'];
$email = $row['email'];
$password = $row['password'];

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Encrypt the provided password
    $encryptedPassword = md5($password);

    $sql = "UPDATE users SET username = '$username', email = '$email', password = '$encryptedPassword' WHERE id = $id";
    $result = mysqli_query($con, $sql);

    if ($result) {
        header('location:index.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

    <title>Update</title>
</head>
<body>
    <center><h1 class="my-5">Update Account</h1></center>

    <form method="post">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" class="form-control custom-input"  name="username" value="<?php echo $username?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Email address</label>
            <input type="email" class="form-control custom-input"  name="email" value="<?php echo $email ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control custom-input"  name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>

</body>
</html>
