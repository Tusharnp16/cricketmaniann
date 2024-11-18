<?php

include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

   
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    
    if ($_FILES["image"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

   
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

   
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            
            $query = "INSERT INTO equipment VALUES (0,?, ?, ?, ?)";
            $stmt = $conn->prepare($query);

            if ($stmt) {
                $stmt->bind_param("ssds", $name, $description, $price, $target_file);
                if ($stmt->execute()) {
                    echo "New cricket equipment added successfully!";
                } else {
                    echo "Error: " . $stmt->error;
                }
                $stmt->close();
            } else {
                echo "Error preparing the statement: " . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Add Cricket Equipment</title>
</head>
<body>
    <h2>Add Cricket Equipment</h2>
    <form method="POST" action="" enctype="multipart/form-data">
        <label for="name">Equipment Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price" step="0.01" required><br><br>

        <label for="image">Upload Image:</label><br>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>

        <input type="submit" value="Add Equipment">
    </form>
</body>
</html>
