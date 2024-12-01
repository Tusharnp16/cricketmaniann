<?php

include("connection.php");
$message = "";

if (isset($_POST['submit'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    // Insert data into the table
    $sql = "INSERT INTO feedback VALUES (0,'$name', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
        $message = "<div class='success'>Feedback submitted successfully!</div>";
    } else {
        $message = "<div class='error'>Error: " . $conn->error . "</div>";
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Feedback Form</title>
    <link rel="stylesheet" type="text/css" href="feedback.css">
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

    <div class="feedback-container">


        <h2>Feedback Form</h2>

        <form method="POST" action="feedback.php">
            <?php

            echo $message;
            ?>

            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="message">Message:</label><br>
            <textarea id="message" name="message" required></textarea><br><br>

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
    <?php include 'footer.html'; ?>
</body>

</html>