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

    <header class="headingn">
        <h1 style="text-align: center; margin: 20px 0; color: #333;">Bowler List</h1>
    </header>


    <?php

    include("connection.php");

    $query = "SELECT * FROM players where type='Bowler'";
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
            echo "<p><strong>Gender:</strong> " . htmlspecialchars($row['gender']) . "</p>";
            echo "<p><strong>State:</strong> " . htmlspecialchars($row['address']) . "</p>";
            echo "<p><strong>Mobile:</strong> " . htmlspecialchars($row['mobile']) . "</p>";
            echo "<p><strong>Nationality:</strong> " . htmlspecialchars($row['nationality']) . "</p>";
            echo "<p><strong>Type:</strong> " . htmlspecialchars($row['type']) . "</p>";
            echo "<p><strong>Board:</strong> " . htmlspecialchars($row['board']) . "</p>";
            echo "<a href='#' class='contact-button' onclick='showAlert()'>Contact Player</a>";
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