<?php
require_once "..core/config.php";

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

$sql = "INSERT INTO products (name, description, price) VALUES ('$name', '$description', '$price')";

if (mysqli_query($conn, $sql)) {
    echo "Product added successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>