<?php
include("connection.php");

if (isset($_POST['submit'])) {
    $type=$_POST['type'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Debug: check if input data is received correctly
    echo "Email: $email<br>";
    echo "Password: $password<br>";

    $query = "SELECT * FROM players WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Debug: check if a user is found
    if ($result->num_rows > 0) {
        echo "User found.<br>";
        $row = $result->fetch_assoc();
    
        // Debug: display hashed password for comparison
        echo "Hashed password from DB: " . $row['password'] . "<br>";

        if (password_verify($password, $row['password'])) {
            echo "Login successful! Welcome, " . $row['name'];
            echo $type;
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "No user found with this email!";
    }

    $stmt->close();
}

$conn->close();
?>
