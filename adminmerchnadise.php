<?php

include("connection.php");

$query = "SELECT * FROM equipment";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo "<h2>Cricket Equipment List</h2>";
    echo "<table border='1'>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
            </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row['name']) . "</td>
                <td>" . htmlspecialchars($row['description']) . "</td>
                <td>$" . number_format($row['price'], 2) . "</td>
                <td><img src='" . htmlspecialchars($row['imgurl']) . "' alt='Equipment Image' width='150' height='150'></td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No equipment found.";
}

$conn->close();
?>
