<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Equipment</title>
    <link rel="stylesheet" type="text/css" href="merchnadise.css"> 

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

    $query = "SELECT name,description,price,imgurl FROM equipment";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {

        
        echo "<h1 class='maniamer'>Cricket Mania's Merchandise </h1>";
        echo "<div class='equipment-list'>";

        while ($row = $result->fetch_assoc()) {
            echo "<div class='equipment-item'>";
            echo "<div class='equipment-image'>";
            echo "<img src='" . htmlspecialchars($row['imgurl']) . "' alt='Equipment Image'>";
            echo "</div>";
            echo "<div class='equipment-details'>";
            echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
            echo "<p>" . htmlspecialchars($row['description']) . "</p>";
            echo "<p><strong>Price: $</strong>" . number_format($row['price'], 2) . "</p>";
            echo "<button class='buy-button' onclick='showAlert()'>Buy Now</button>";
            echo "</div>";
            echo "</div>";
        }

        echo "</div>";
    } else {
        echo "No equipment found.";
    }

    $conn->close();
    ?>

<?php include 'footer.html'; ?>

</body>

</html>