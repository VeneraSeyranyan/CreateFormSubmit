<?php
$servername = "localhost";
$username = "root";
$password = "Pass123!@#";
$dbname = "Users";
//
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$image=$_FILES['image'];
$imagefilename=$image['name'];
//Database connection establishment
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
    die('Connection Faild  : '.$conn->connect_error);
}else{
    $stmt= $conn->prepare("insert into users(name,email,message,image)
                 values(?,?,?,?)");
    $stmt->bind_param("ssss",$name,$email,$message,$imagefilename);
    $stmt->execute();
    echo "registration successfully";
    $stmt->close();
    $conn->close();
}