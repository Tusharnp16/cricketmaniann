<!DOCTYPE html>
<html>

<head>
    <title>Cricket Equipment List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0px;
            color: #333;
        }

        h2 {
            margin: 10px;
            text-align: center;
            color: #4CAF50;
            margin-bottom: 20px;
        }

        table {
            width: 80%;
            margin: 0px  auto 20px;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th,
        td {
            text-align: left;
            padding: 12px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        img {
            display: block;
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
    </style>
</head>

<body>

    <?php include 'navigation.php'; ?>
    <?php
    include("connection.php");

    $query = "SELECT * FROM equipment";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        echo "<h2>Cricket Equipment List</h2>";
        echo "<table>
            <tr>
                <th>Name</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th>
                 <th>Buy Count</th>
            </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>" . htmlspecialchars($row['id']) . "</td>
                <td>" . htmlspecialchars($row['name']) . "</td>
                <td>" . htmlspecialchars($row['description']) . "</td>
                <td>$" . number_format($row['price'], 2) . "</td>
                <td><img src='" . htmlspecialchars($row['imgurl']) . "' alt='Equipment Image' width='150'></td>
                <td>" .number_format($row['buycount'],) . "</td>
              </tr>";
        }

        echo "</table>";
    } else {
        echo "<h2>No equipment found.</h2>";
    }

    $conn->close();
    ?>

    <?php include 'footer.html'; ?>
</body>

</html>