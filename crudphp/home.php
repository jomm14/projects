<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// Connect to the database
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "crudphp";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user details
$username = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE username=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    echo "Welcome, " . $row['username'] . "!<br>";
    echo "Your password: " . $row['password'] . "<br>";
    echo "<a href='edit.php?id=" . $row['id'] . "'>Edit</a> ";
    echo "<a href='delete.php?id=" . $row['id'] . "'>Delete</a> ";

    // Update the session variable with the edited username and password
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
} else {
    echo "User not found.";
    echo "Try to logout";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h2>Home</h2>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
