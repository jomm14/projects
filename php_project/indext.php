<?php
require_once "core/config.php";

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

$sql = "UPDATE products SET name='$name', description='$description', price='$price' WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Product updated successfully.";
} else {
    echo "Error updating product: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

