<?php
// Database connection code
require_once 'database.php';

// Check if an ID parameter is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the product record from the database
    $query = "SELECT * FROM products WHERE id = $id";
    $result = mysqli_query($conn, $query);

    // Check if the product record exists
    if (mysqli_num_rows($result) === 1) {
        $product = mysqli_fetch_assoc($result);
    } else {
        // Redirect to the index page if the record doesn't exist
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

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Application - Edit Product</title>
    <!-- Include CSS stylesheets -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <h1>Edit Product</h1>
    <form action="update.php?id=<?php echo $product['id']; ?>" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $product['name']; ?>" required>

        <label for="description">Description:</label>
        <textarea name="description" required><?php echo $product['description']; ?></textarea>

        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" value="<?php echo $product['price']; ?>" required>

        <input type="submit" value="Update">
    </form>
</body>
</html>
