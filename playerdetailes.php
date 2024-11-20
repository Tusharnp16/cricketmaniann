<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Players</title>
    <link rel="stylesheet" type="text/css" href="playershow.css">
    <script>
        function showAlert() {
            alert('Item Not available currently!');
        }
    </script>
</head>

<body>
    <!-- Include navigation -->
    <?php include 'navigation.php'; ?>

    <header class="headingn">
        <h1 style="text-align: center; margin: 20px 0; color: #333;">Cricket Players List</h1>
    </header>

    <main>
        <?php
        include("connection.php");

        // Query to fetch player data
        $query = "SELECT * FROM players";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            echo "<div class='player-list'>";

            // Iterate through the player data
            while ($row = $result->fetch_assoc()) {

                // Placeholder image path (replace if actual image paths are available)
                $image_url = "uploads/player.png";

                // Player card
                echo "<div class='player-item'>";
                echo "<div class='player-image'>";
                echo "<img src='" . htmlspecialchars($image_url) . "' alt='" . htmlspecialchars($row['name']) . "' />";
                echo "</div>";
                echo "<div class='player-details'>";
                echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
                echo "<p><strong>Address:</strong> " . htmlspecialchars($row['address']) . "</p>";
                echo "<p><strong>Mobile:</strong> " . htmlspecialchars($row['mobile']) . "</p>";
                echo "<p><strong>Gender:</strong> " . htmlspecialchars($row['gender']) . "</p>";
                echo "<p><strong>Nationality:</strong> " . htmlspecialchars($row['nationality']) . "</p>";
                echo "<p><strong>Type:</strong> " . htmlspecialchars($row['type']) . "</p>";
                echo "<a href='#' class='contact-button' onclick='showAlert()'>Contact Player</a>";
                echo "</div>";
                echo "</div>";
            }

            echo "</div>";
        } else {
            echo "<p style='text-align: center; font-size: 1.2em; color: #666;'>No players found.</p>";
        }

        $conn->close();
        ?>
    </main>

    <!-- Include footer -->
    <?php include 'footer.html'; ?>
</body>

</html>
