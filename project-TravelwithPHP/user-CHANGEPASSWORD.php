<?php
include "header.php";
include "dologin.php";
?>

<div class="user">
    <div class="user-aside">
        <div class="user-panel">
            <div class="user-img">
                <img src="./assets/img/avt.png" style="display: block; width: 60%; height: auto; margin-left: auto; margin-right: auto;">
            </div>
            <div class="user-name">
                <p><strong><?php echo $_SESSION['fname'];echo $_SESSION['lname'] ?><br></strong></p>
                <p><strong><?php echo $_SESSION['email'];?><br></strong></p>

            </div>     
        </div>
        <div class="user-router">
            <ul class="list-1">
                <a href="user.php">
                    <i class="fa-solid fa-user"></i>
                    <strong>Trang người dùng</strong>
                </a>
                <a href="user-CHANGEPASSWORD.php">
                    <i class="fa-solid fa-key"></i>
                    <strong>Đổi mật khẩu</strong>
                </a>
                <script>
                    function LOGOUT(){
                        alert("Đăng xuất!");
                    }
                </script>
                <a href="logout.php" onclick="LOGOUT()">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <strong>Đăng xuất</strong>
                </a>
            </ul>  
        </div>
    </div>
    <div class="user-main">
        <h2>Đổi mật khẩu</h2>    
        <div class="textbox">
            <label for="name">Mật khẩu cũ</label> 
            <input type="text" id="name" name="name" placeholder="Mật khẩu cũ" class="form-control"><br>
        </div> 
        <div class="textbox">
            <label for="birthday">Mật khẩu mới</label> 
            <input type="text" id="birthday" name="birthday" placeholder="Mật khẩu mới" class="form-control"><br>
        </div>
        <div class="textbox">
            <label for="phonenumber">Nhập lại mật khẩu mới</label> 
            <input type="text" id="phonenumber" name="phonenumber" placeholder="Nhập mật khẩu mới" class="form-control"><br>
        </div>
        <div class="changepasswordbtn">
            <a href="#">Link Button</a>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>