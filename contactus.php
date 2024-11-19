<?php

include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $message = $conn->real_escape_string($_POST['message']);

    // Insert data into the table
    $sql = "INSERT INTO contact VALUES (0,'$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for contacting us. Your message has been sent!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
</head>
<body>
<?php include 'navigation.php'; ?>

    <h2>Contact Us</h2>
    <form method="POST" action="contactus.php">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="subject">Subject:</label><br>
        <input type="text" id="subject" name="subject" required><br><br>
        
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" required></textarea><br><br>
        
        <input type="submit" name="submit" value="Send">
    </form>
    <?php include 'footer.html'; ?>
</body>
</html>
