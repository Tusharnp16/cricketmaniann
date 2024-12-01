<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['id']); // Sanitize user input
    $table = $_POST['table']; // Get the table name from the form

    // Validate the table name to prevent SQL injection
    $allowedTables = ['coach', 'players', 'admin', 'feedback', 'contact'];
    if (!in_array($table, $allowedTables)) {
        die("Invalid table name.");
    }

    // Prepare the DELETE query
    $query = "DELETE FROM $table WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);



    if ($stmt->execute()) {

        if ($table == 'feedback') {
            header("Location: adminfeedback.php");

        } else if ($table == 'contact') {
            header("Location: admincotauct.php");

        } else {

            header("Location: alluser.php");
            exit();
        }
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $stmt->close();
}
$conn->close();
?>