<?php
include("connection.php");

// Get the search query
$searchQuery = isset($_GET['search']) ? htmlspecialchars($_GET['search']) : "";

// Prepare the SQL query
if ($searchQuery !== "") {
    $query = "SELECT * FROM coach 
              WHERE name LIKE ? 
              OR state LIKE ? 
              OR type LIKE ?";
    $stmt = $conn->prepare($query);
    $searchTerm = '%' . $searchQuery . '%';
    $stmt->bind_param("sss", $searchTerm, $searchTerm, $searchTerm);
} else {
    $query = "SELECT * FROM coach"; // Default query to show all coaches
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
        echo "<button type='submit' class='btn'>Book Session</button>";
        echo "</form>";
        echo "</div>";
        echo "</div>";
    }
    echo "</div>";
} else {
    echo "<p>No coaches found.</p>";
}

$stmt->close();
$conn->close();
?>
