<?php

include("connection.php");

if (isset($_POST['submit'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    // Insert data into the table
    $sql = "INSERT INTO feedback VALUES (0,'$name', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
        echo "Feedback submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
</head>
<body>
<?php include 'navigation.php'; ?>

    <h2>Feedback Form</h2>
    <form method="POST" action="feedback.php">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" required></textarea><br><br>
        
        <input type="submit"  name="submit" value="Submit">
    </form>
    <?php include 'footer.html'; ?>
</body>
</html>
