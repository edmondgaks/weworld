<?php
if(isset($_POST['submit'])) {


$name = $_POST['name'];
$email = $_POST['email'];
$how = $_POST['how'];
$message = $_POST['message'];

if(($name="") || ($email=="")) {
    echo "Please provide all information";
}


else {
    
    define("HOST","localhost");
    // echo "I have full details";
    $DB_host = "localhost";
    $DB_user = "root";
    $DB_password = "";
    $DB_name = "omnifood";
    $connection = mysqli_connect(HOST,$DB_user,$DB_password,$DB_name);
}


if(!$connection) {
    echo "Connection error";
} else {
    $insertQuery= "INSERT INTO clients(name,email,how,message) values('$name','$email','$how','$message')";
    $insert = mysqli_query($connection,$insertQuery) or die("Error occured".mysqli_error($connection));
    if($insert) {
        echo "DATA added Successfully";
    }
}

}

?>