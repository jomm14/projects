<?php
// Database connection code
require_once 'database.php';

// Check if an ID parameter is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Handle form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];

        // Update the product record in the database
        $query = "UPDATE products SET name = '$name', description = '$description', price = '$price' WHERE id = $id";
        mysqli_query($conn, $query);

        // Redirect to the index page after successful update
        header('Location: index.php');
        exit;
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Redirect to the index page if no ID parameter is provided
    header('Location: index.php');
    exit;
}
?>
