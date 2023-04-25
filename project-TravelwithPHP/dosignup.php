<?php 
session_start(); 
include "db_conn.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['password'];

if (empty($fname)) {
    header("Location: registation.php?error=first Name is required");
    exit();
}
else if(empty($lname)){
    header("Location: registation.php?error=last Name is required");
    exit();
}
else if(empty($email)){
    header("Location: registation.php?error=email is required");
    exit();
}
else if(empty($pass)){
    header("Location: registation.php?error=password is required");
    exit();
}

else{
    $sql = "INSERT into tb_login (FName,LName,EMail,PassWord) values('$fname','$lname','$email','$pass')";
    mysqli_query($conn,$sql);
    echo "sign up succesfull";
    header('location: registation.php');
}
