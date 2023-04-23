<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form action="dosignup.php" method="post">
        <h2>SIGN UP</h2>
        <?php if(isset($_GET['error'])){?>
            <p class="error"><?php echo $_GET['error'];?></p>
        <?php } ?>
        <label>First name</label>
        <input type="text" name="fname" placeholder="fname"><br>
        <label>Last name</label>
        <input type="text" name="lname" placeholder="lname"><br>
        <label>Email</label>
        <input type="email" name="email" placeholder="email"><br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br> 
        <button type="submit">Sign up</button>
        <p>Already have an account? <a href="login.php" >Login</a></p>
    </form>
    
</body>

</html>