<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Equipment</title>
    <link rel="stylesheet" type="text/css" href="alluser.css">

    <script>
        function showAlert() {
            alert('Item Not available currently!');
        }
    </script>
</head>

<body>
    <?php include 'navigation.php'; ?>

    <header class="headingn">
        <h1 class="title">Contactus List</h1>
    </header>

    <?php
    include("connection.php");

    $query = "SELECT * FROM contact";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo "<table class='player-table'>";
        echo "<thead>
                <tr>
                    <th>Id</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                     <th>Subject</th>
                    <th>Message</th>
                    <th>Action</th>
                </tr>
              </thead>";
        echo "<tbody>";

        while ($row = $result->fetch_assoc()) {
            $image_url = "uploads/player.png";
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "<td><img src='" . htmlspecialchars($image_url) . "' alt='" . htmlspecialchars($row['name']) . "' class='player-image' /></td>";
            echo "<td>" . htmlspecialchars($row['name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['subject']) . "</td>";
            echo "<td>" . htmlspecialchars($row['message']) . "</td>";
            echo "<td>
            <form method='POST' action='delete.php'>
                <input type='hidden' name='id' value='" . htmlspecialchars($row['id']) . "'>
                  <input type='hidden' name='table' value='contact'>
                <button type='submit' class='delete-button'>Delete</button>
            </form>
          </td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<p>No players found.</p>";
    }

    $conn->close();
    ?>


    <?php include 'footer.html'; ?>

</body>

</html>