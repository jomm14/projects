<?php
// Database connection code
require_once 'database.php';

// Check if an ID parameter is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the product record from the database
    $query = "DELETE FROM products WHERE id = $id";
    mysqli_query($conn, $query);

    // Close the database connection
    mysqli_close($conn);
}

// Redirect to the index page after deletion or if no ID parameter is provided
header('Location: index.php');
exit;
?>
