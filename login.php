<?php
session_start(); // Start the session

include("connection.php");

if (isset($_POST['submit'])) {
    $type = $_POST['type'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($type == 'admin') {
        $tablename = 'admin';
    } elseif ($type == 'coach') {
        $tablename = 'coach';
    } else {
        $tablename = 'players';
    }

    $query = "SELECT * FROM $tablename WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if ($type == 'admin') {
            $query2 = "SELECT * FROM admin WHERE email = ? AND passwordd = ?";
            $stmt2 = $conn->prepare($query2);
            $stmt2->bind_param("ss", $email, $password);
            $stmt2->execute();
            $result2 = $stmt2->get_result();

            if ($result2->num_rows > 0) {

                $_SESSION['name'] = $row['name']; 
                $_SESSION['type'] = $type;

                header("Location: home.php");
                exit;
            } else {
                echo "Invalid password please!";
            }
        } else {
            if (password_verify($password, $row['password'])) {

               
                $_SESSION['name'] = $row['name']; 
                $_SESSION['type'] = $type;

                header("Location: home.php");
                exit;
            } else {
                echo "Invalid password please!";
            }
        }
    } else {
        echo "No user found with this email!";
    }

    $stmt->close();
}

$conn->close();
?>
