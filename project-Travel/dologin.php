<?php 
session_start(); 
include "db_conn.php";
if (isset($_POST['email']) && isset($_POST['PassWord'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $email = validate($_POST['email']);
    $pass = validate($_POST['PassWord']);
    if (empty($email)) {
        header("Location: login.php?error=EMAIL is required");
        exit();
    }
    else if(empty($pass)){
        header("Location: login.php?error=PassWord is required");
        exit();
    }
    else{
        $sql = "SELECT * FROM tb_login WHERE EMail='$email' AND PassWord='$pass'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['EMail'] === $email && $row['PassWord'] === $pass) {
                echo "Logged in!";
                $_SESSION['email'] = $row['EMail'];
                $_SESSION['lname'] = $row['LName'];
                $_SESSION['fname'] = $row['FName'];
                header("Location: home.php");
                exit();
            }else{
                header("Location: login.php?error=Incorect EMail or PassWord");
                exit();
            }
        }else{
            header("Location: login.php?error=Incorect EMail or PassWord");
            exit();
        }
    }

}else{
    // header("Location: index.php");
    // exit();
}
?>
