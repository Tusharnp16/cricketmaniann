<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Allrounders</title>
    <link rel="stylesheet" type="text/css" href="playershow.css">

    <script>
        function showAlert() {
            alert('Your request has been sent we shortly contact you');
        }
    </script>
</head>

<body>
    <!-- Include navigation -->
    <?php include 'navigation.php'; ?>

    <header class="headingn">
        <h1 style="text-align: center; margin: 20px 0; color: #333;">Allrounders List</h1>
    </header>

    <main>
        <?php
        include("connection.php");

        // Query to fetch all-rounder players
        $query = "SELECT * FROM players WHERE type='Allrounder'";
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
            echo "<p style='text-align: center; font-size: 1.2em; color: #666;'>No allrounder players found.</p>";
        }

        $conn->close();
        ?>
    </main>

    <!-- Include footer -->
    <?php include 'footer.html'; ?>
</body>

</html>