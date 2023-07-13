<?php
// Database connection code
require_once 'database.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // Insert the new product into the database
    $query = "INSERT INTO products (name, description, price) VALUES ('$name', '$description', '$price')";
    mysqli_query($conn, $query);

    // Redirect to the index page after successful creation
    header('Location: index.php');
    exit;
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Application - Create Product</title>
    <!-- Include CSS stylesheets -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <h1>Add New Product</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" required>

        <label for="description">Description:</label>
        <textarea name="description" required></textarea>

        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" required>

        <input type="submit" value="Create">
    </form>
</body>
</html>
