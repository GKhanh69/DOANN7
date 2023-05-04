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

function getTours($uemail) {
    $tours = array();
    $conn = getCon();
    $sql = "SELECT tb_booktour.MaTour,tb_booktour.NumberTicket,tb_booktour.Total,tb_login.EMail
    from tb_login,tb_booktour
    WHERE tb_login.EMail='$uemail' AND tb_booktour.Email='$uemail'";
   
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            array_push($tours, $row);
        }
    }

    closeCon($conn);
    return $tours;
}
?>