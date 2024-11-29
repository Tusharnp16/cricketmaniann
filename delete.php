<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['id']); // Sanitize user input
    $table = $_POST['table']; // Get the table name from the form

    // Validate the table name to prevent SQL injection
    $allowedTables = ['coach', 'players', 'admin'];
    if (!in_array($table, $allowedTables)) {
        die("Invalid table name.");
    }

    // Prepare the DELETE query
    $query = "DELETE FROM $table WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Redirect back to the main page with a success message
        header("Location: alluser.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $stmt->close();
}
$conn->close();
?>
