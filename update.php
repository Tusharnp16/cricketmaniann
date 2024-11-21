<?php
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['id']); // Sanitize user input

    $query = "Update coach set bsession=1 WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Redirect back to the main page with a success message
        header("Location: coachshow.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $stmt->close();
}
?>
