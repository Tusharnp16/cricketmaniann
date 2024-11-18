<?php
// Database connection setup
$servername = "localhost";
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "sports_store"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image_url = $_POST['image_url']; // URL from the network

    // Validate and sanitize the input data
    $name = $conn->real_escape_string($name);
    $description = $conn->real_escape_string($description);
    $price = floatval($price);
    $image_url = filter_var($image_url, FILTER_SANITIZE_URL);

    // SQL query to insert data into the database
    $query = "INSERT INTO cricket_equipment (name, description, price, image_url) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("ssds", $name, $description, $price, $image_url);

        // Execute the query
        if ($stmt->execute()) {
            echo "New cricket equipment added successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing the statement: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>

<!-- HTML Form to input data -->
<!DOCTYPE html>
<html>
<head>
    <title>Add Cricket Equipment</title>
</head>
<body>
    <h2>Add Cricket Equipment</h2>
    <form method="POST" action="">
        <label for="name">Equipment Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price" step="0.01" required><br><br>

        <label for="image_url">Image URL:</label><br>
        <input type="url" id="image_url" name="image_url" required><br><br>

        <input type="submit" value="Add Equipment">
    </form>
</body>
</html>
