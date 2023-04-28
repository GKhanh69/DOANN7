<?php 
session_start(); 
include "db_conn.php";

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Subject = $_POST['Subject'];
$Message = $_POST['Message'];

if (empty($Name)) {
    header("Location: index.php?error=Name is required");
    exit();
}
else if(empty($Email)){
    header("Location: index.php?error=Email is required");
    exit();
}
else if(empty($Subject)){
    header("Location: index.php?error=Subject is required");
    exit();
}
else if(empty($Message)){
    header("Location: index.php?error=Message is required");
    exit();
}



else{
    $sql = "INSERT into tb_contact (Name,Email,Subject,Message) values('$Name','$Email','$Subject','$Message')";
    mysqli_query($conn,$sql);
    header('location: index.php');
    mysqli_close($conn);
    exit();
}
?>