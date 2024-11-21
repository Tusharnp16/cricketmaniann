<?php
// Database connection settings

include("connection.php");

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $state = $_POST['address'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $board = $_POST['board'];
    $types = $_POST['types'];
    $experience = $_POST['experience'];
    $password = $_POST['password'];
    $confirmp = $_POST['confirmp'];


    if ($password === $confirmp) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    
        $query = "INSERT INTO coach VALUES (0,'$name', '$email', '$state', $mobile, '$gender', '$nationality','$board', '$types','$experience',0,'$hashed_password')";


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
