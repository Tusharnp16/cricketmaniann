<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Equipment</title>
    <link rel="stylesheet" type="text/css" href="playershow.css">

    <script>

        function showAlert() {
            alert('Item Not available currently!');
        }
    </script>
</head>

<body>
<?php include 'navigation.php'; ?>


    <?php

    include("connection.php");

    $query = "SELECT * FROM coach";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo "<div class='player-list'>";

        while ($row = $result->fetch_assoc()) {

            $image_url = "uploads/player.png";

            echo "<div class='player-item'>";
            echo "<div class='player-image'>";
            echo "<img src='" . htmlspecialchars($image_url) . "' alt='" . htmlspecialchars($row['name']) . "' />";
            echo "</div>";
            echo "<div class='player-details'>";
            echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
            echo "<p><strong>Email:</strong> " . htmlspecialchars($row['email']) . "</p>";
            echo "<p><strong>State:</strong> " . htmlspecialchars($row['state']) . "</p>";
            echo "<p><strong>Nationality:</strong> " . htmlspecialchars($row['nationality']) . "</p>";
            echo "<p><strong>Cricket Board:</strong> " . htmlspecialchars($row['board']) . "</p>";
            echo "<p><strong>Mobile:</strong> " . htmlspecialchars($row['mobile']) . "</p>";
            echo "<p><strong>Gender:</strong> " . htmlspecialchars($row['gender']) . "</p>";
            echo "<p><strong>Coaching Type:</strong> " . htmlspecialchars($row['type']) . "</p>";
            echo "<button type='submit' name='update' class='btn' style='background-color: blue; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;'>Book Session</button>";
            echo "</div>";
            echo "</div>";

        }

        echo "</div>";
    } else {
        echo "No players found.";
    }

    $conn->close();
    ?>

<?php include 'footer.html'; ?>

</body>

</html>