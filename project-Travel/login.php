<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form action="dologin.php" method="post">
        <h2>LOGIN</h2>
        <?php if(isset($_GET['error'])){?>
            <p class="error"><?php echo $_GET['error'];?></p>
        <?php } ?>
        <label>Email</label>
        <input type="text" name="email" placeholder="email"><br>
        <label>Password</label>
        <input type="password" name="PassWord" placeholder="Password"><br> 
        <button type="submit">Login</button>
        <p>Forget password? <a href="#">Click here</a></p>
        <p>Don't have and account? <a href="registation.php" >Sign Up</a></p>
    </form>
    
</body>

</html>