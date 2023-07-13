<?php
require_once "core/config.php";

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Description: " . $row["description"]. " - Price: $" . $row["price"]. "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>