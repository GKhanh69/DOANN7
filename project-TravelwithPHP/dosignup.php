<?php 
session_start(); 
include "db_conn.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['password'];

if (empty($fname)) {
    header("Location: index.php?error=first Name is required");
    exit();
}
else if(empty($lname)){
    header("Location: index.php?error=last Name is required");
    exit();
}
else if(empty($email)){
    header("Location: index.php?error=email is required");
    exit();
}
else if(empty($pass)){
    header("Location: index.php?error=password is required");
    exit();
}

else{
    $sql = "INSERT into tb_login (FName,LName,EMail,PassWord) values('$fname','$lname','$email','$pass')";
    mysqli_query($conn,$sql);
    echo "sign up succesfull";
    header('location: registation.php');
}
