<?php

include("connection.php");

$message="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $message = $conn->real_escape_string($_POST['message']);

    // Insert data into the table
    $sql = "INSERT INTO contact VALUES (0,'$name', '$email', '$subject', '$message')";
    if ($conn->query($sql) === TRUE) {
        $message = "<div class='success'>Form submitted successfully!</div>";
    } else {
        $message = "<div class='error'>Error: " . $conn->error . "</div>";
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="contactus.css">
    <style>
        .success {
            display: inline-block;
            text-align: center;
            color: green;
            font-weight: bold;
            margin-top: 10px;
            background-color: #f0fdf0;
        }

        .error {
            display: inline-block;
            text-align: center;
            color: red;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>

</head>

<body>
    <?php include 'navigation.php'; ?>

    <h2>Contact Us</h2>

    <form method="POST" action="contactus.php">
        <?php

        echo $message;
        ?>
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