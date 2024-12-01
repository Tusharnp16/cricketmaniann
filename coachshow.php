<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Equipment</title>
    <link rel="stylesheet" type="text/css" href="coach.css">
    <style>
        .search-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px 0;
        }

        .search-input {
            width: 50%;
            max-width: 600px;
            padding: 10px 15px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 25px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            outline: none;
            transition: all 0.3s ease;
        }

        .search-input:hover,
        .search-input:focus {
            border-color: #007bff;
            box-shadow: 0px 4px 10px rgba(0, 123, 255, 0.2);
        }
    </style>
    <script>
        // Function to handle search input
        function searchCoaches() {
            const searchQuery = document.getElementById("search").value; // Get the search term
            const xhr = new XMLHttpRequest();

            // Send an AJAX GET request with the search query
            xhr.open("GET", `search_coach.php?search=${encodeURIComponent(searchQuery)}`, true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    document.getElementById("coach-list").innerHTML = xhr.responseText; // Update results
                }
            };
            xhr.send(); // Send the request
        }
    </script>

</head>

<body>
    <?php include 'navigation.php'; ?>


    <div class="search-bar">
        <input type="text" id="search" onkeyup="searchCoaches()" placeholder="Search by coach name, state, or type..."
            class="search-input" />
    </div>

    <div id="coach-list">
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
            echo "<p>No coaches found.</p>";
        }
        ?>
    </div>

    <?php include 'footer.html'; ?>

</body>

</html>