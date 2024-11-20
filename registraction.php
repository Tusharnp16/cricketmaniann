<?php
// Database connection settings

include("connection.php");

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $types = $_POST['types'];
    $board = $_POST['board'];
    $password = $_POST['password'];
    $confirmp = $_POST['confirmp'];


    if ($password === $confirmp) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    
        $query = "INSERT INTO players VALUES (0,'$name', '$email', '$address', $mobile, '$gender', '$nationality','$board', '$types','$hashed_password')";


        if(mysqli_query($conn,$query)){
            echo "Registration successful!";
            header("location: login.html");
        }else{
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }

    /*    if ($conn->query($query) === TRUE) {
            echo "Registration successful!";
            header("location: login.html");
        } else {
            echo "Error: " . $query . "<br>" . $conn->error;
        }
    } else {
        echo "Passwords do not match!";
    }*/
}


?>
