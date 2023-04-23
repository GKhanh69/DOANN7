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


function getTours() {
    $tours = array();
    $conn = getCon();
   
    $sql = "SELECT * FROM tb_tourdulich";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($tours, $row);
        }
    }

    closeCon($conn);
    return $tours;
}

function getTour($tourId) {
    $conn = getCon();
    $tour = [];
   
    $sql = "SELECT * FROM tb_tourdulich where MaTour='".$tourId."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $tour = $result->fetch_assoc();
    }

    closeCon($conn);
    return $tour;
}


?>