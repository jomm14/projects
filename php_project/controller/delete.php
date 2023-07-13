<?php
require_once "../core/config.php";

$id = $_POST['id'];

$sql = "DELETE FROM products WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    echo "Product deleted successfully.";
} else {
    echo "Error deleting product: " . mysqli_error($conn);
    }

mysqli_close($conn);
?>