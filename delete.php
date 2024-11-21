<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['id']); // Sanitize user input

    $query = "DELETE FROM coach WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Redirect back to the main page with a success message
        header("Location: alluser.php?message=User+deleted+successfully");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $stmt->close();
}
?>
