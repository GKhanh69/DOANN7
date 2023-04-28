<?php 
session_start();
if (isset($_SESSION['lname']) && isset($_SESSION['fname'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></h1>
     <a href="index.php">Continue to page</a>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>