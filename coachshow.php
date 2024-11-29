<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Equipment</title>
    <link rel="stylesheet" type="text/css" href="coach.css">
    <script>
        function showAlert() {
            alert('Your session has been booked');
        }
    </script>
</head>

<body>
    <?php include 'navigation.php'; ?>

    <!-- Search Form -->
    <div class="search-bar">
        <form method="GET" action="">
            <input type="text" name="search" placeholder="Search by coach name, state, or type..." class="search-input" />
            <button type="submit" class="search-btn">Search</button>
        </form>
    </div>

    <?php
    include("connection.php");

    // Check if a search query is submitted
    $searchQuery = "";
    if (isset($_GET['search'])) {
        $searchQuery = htmlspecialchars($_GET['search']); // Sanitize user input
        $query = "SELECT * FROM coach 
                  WHERE name LIKE ? 
                  OR state LIKE ? 
                  OR type LIKE ?";
        $stmt = $conn->prepare($query);
        $searchTerm = '%' . $searchQuery . '%';
        $stmt->bind_param("sss", $searchTerm, $searchTerm, $searchTerm);
    } else {
        $query = "SELECT * FROM coach";
        $stmt = $conn->prepare($query);
    }

    $stmt->execute();
    $result = $stmt->get_result();

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
            echo "<p><strong>Session Charge:</strong> $" . htmlspecialchars($row['charge']) . "</p>";
            echo "<form method='POST' action='update.php'>";
            echo "<input type='hidden' name='id' value='" . htmlspecialchars($row['id']) . "'>";
            echo "<button type='submit' onclick='showAlert()' class='btn'>Book Session</button>";
            echo "</form>";
            echo "</div>";
            echo "</div>";
        }

        echo "</div>";
    } else {
        echo "<p>No coaches found matching your search criteria.</p>";
    }

    $stmt->close();
    $conn->close();
    ?>

    <?php include 'footer.html'; ?>

</body>

</html>
