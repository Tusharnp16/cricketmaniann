<!DOCTYPE html>
<html>
<head>
    <title>Add Cricket Equipment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        h2 {
            text-align: center;
            color: #4CAF50;
            margin-top: 20px;
        }

        form {
            background: #fff;
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"], input[type="number"], textarea, input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #004a99;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>
<?php include 'navigation.php'; ?>

    <h2>Add Cricket Equipment</h2>
    <div class="container">
        <form method="POST" action="" enctype="multipart/form-data">
            <label for="name">Equipment Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" required></textarea>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" required>

            <label for="image">Upload Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required>

            <input type="submit" value="Add Equipment">
        </form>
    </div>
    <footer>
        <?php include 'footer.html'; ?>
    </footer>
</body>
</html>
