<?php
session_start();

if (!isset($_SESSION['name']) || !isset($_SESSION['type'])) {
    header("Location: login.php");
    exit();
}

include("connection.php");

$type = $_SESSION['type'];
$name = $_SESSION['name'];


if ($type == 'admin') {
    $tablename = 'admin';
} elseif ($type == 'coach') {
    $tablename = 'coach';
} else {
    $tablename = 'players';
}


$query = "SELECT * FROM $tablename WHERE name = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $name);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $userData = $result->fetch_assoc();
} else {
    echo "No data found for the user.";
    exit();
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ucfirst($type); ?> Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .profile-form {
            margin: 50px auto;
            max-width: 600px;
            padding: 20px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            color: #007bff;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control[readonly] {
            background-color: #e9ecef;
            cursor: not-allowed;
        }

        label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="profile-form">
            <h2 class="form-title"><?php echo ucfirst($type); ?> Profile</h2>
            <form>

                <div class="form-group">
                    <label for="name" class="label">Name:</label>
                    <input type="text" class="form-control" id="name" value="<?php echo $userData['name']; ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="email" class="label">Email:</label>
                    <input type="text" class="form-control" id="email" value="<?php echo $userData['email']; ?>"
                        readonly>
                </div>

                <?php if ($type !== 'admin'): ?>
                    <div class="form-group">
                        <label for="mobile" class="label">Mobile:</label>
                        <input type="text" class="form-control" id="mobile" value="<?php echo $userData['mobile']; ?>"
                            readonly>
                    </div>

                    <div class="form-group">
                        <label for="gender" class="label">Gender:</label>
                        <input type="text" class="form-control" id="gender" value="<?php echo $userData['gender']; ?>"
                            readonly>
                    </div>

                    <div class="form-group">
                        <label for="nationality" class="label">Nationality:</label>
                        <input type="text" class="form-control" id="nationality"
                            value="<?php echo $userData['nationality']; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="type" class="label">Type:</label>
                        <input type="text" class="form-control" id="type" value="<?php echo $userData['type']; ?>" readonly>
                    </div>


                    <?php if ($type == 'coach'): ?>
                        <div class="form-group">
                            <label for="experience" class="label">Experience:</label>
                            <input type="text" class="form-control" id="experience"
                                value="<?php echo $userData['experience']; ?>" readonly>
                        </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="cricketboard" class="label">Cricket Board:</label>
                        <input type="text" class="form-control" id="cricketboard" value="<?php echo $userData['board']; ?>"
                            readonly>
                    </div>
                <?php endif; ?>

                <center>
                    <a href="home.php" class="btn btn-primary">Back</a>
                </center>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>