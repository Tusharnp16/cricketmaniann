
<?php 
session_start();
if(isset($_SESSION['name'])){
    $name = $_SESSION['name'];
    echo $name;
}

if(isset($_SESSION['type'])){
    $type = $_SESSION['type'];
    echo $type;
}


?>