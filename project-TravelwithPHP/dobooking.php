<?php 
session_start(); 

function getCon() {
    $sname= "localhost";
    $unmae= "root";
    $password = "";
    $db_name = "qlwebdulich";
    $conn = new mysqli($sname, $unmae, $password, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function closeCon($conn) {
    $conn->close();
}


$MaTour = $_POST['Tourid'];
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Date = $_POST['Date'];
$NumberTicket = $_POST['NumberoTicket'];
$Message = $_POST['Message'];
$Total = $_POST['NumberoTicket'];

    $conn = getCon();
    $sql = "INSERT INTO `tb_booktour` (`MaTour`, `Name`, `Email`, `Phone`, `Date`, `NumberTicket`, `Message`, `Total`) VALUES ('$MaTour', '$Name', '$Email', '$Phone', '$Date', '$NumberTicket', '$Message', '$Total')";
    $conn->query($sql);
    closeCon($conn);
    header('location: books.php');


?>