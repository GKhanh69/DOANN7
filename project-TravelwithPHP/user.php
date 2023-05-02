<?php
include "header.php";
?>

<div class="user">
    <div class="user-aside">
        <div class="user-panel">
            <div class="user-img">
                <img src="./assets/img/avt.png" style="display: block; width: 60%; height: auto; margin-left: auto; margin-right: auto;">
            </div>
            <div class="user-name">
                <p><strong>Quyên</strong></p>
            </div>     
        </div>
        <div class="user-router">
            <ul class="list-1">
                <a href="user1.html">
                    <i class="fa-solid fa-user"></i>
                    <strong>Thông tin cơ bản</strong>
                </a>
                <a href="user2.html">
                    <i class="fa-solid fa-plane-departure"></i>
                    <strong>Các tour đã đặt</strong>
                </a>
            </ul>
            <ul class="list-2">
                <a href="user3.html">
                    <i class="fa-solid fa-key"></i>
                    <strong>Đổi mật khẩu</strong>
                </a>
                <a href="#">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <strong>Đăng xuất</strong>
                </a>
            </ul>     
        </div>
    </div>
    <div class="user-main">
        <h2>Thông tin cơ bản</h2>    
        <h4 style="padding-top: 50px; margin-left: 12%;">Tài khoản liên kết</h4>
        <div class="list-button">
            <a href="#" class="button-facebook">
                <span class="button-icon">
                    <i class="fa-brands fa-facebook-f"></i>
                </span>
                <strong class="button-text">
                    Connect Facebook
                </strong>
            </a>
            <a href="#" class="button-google">
                <span class="button-icon">
                    <i class="fa-brands fa-google-plus-g"></i>
                </span>
                <strong class="button-text">
                    Connect Google
                </strong>
            </a>
            <a href="#" class="button-twitter">
                <span class="button-icon">
                    <i class="fa-brands fa-twitter"></i>
                </span>
                <strong class="button-text">
                    Connect Twitter
                </strong>
            </a>
        </div>
        <h4 style="padding-top: 50px; margin-left: 12%;">Dữ liệu cá nhân</h4>
        <div class="textbox">
            <label for="name">Họ tên:</label> 
            <input type="text" id="name" name="name" placeholder="Họ tên" class="form-control"><br>
        </div> 
        <div class="textbox">
            <label for="birthday">Ngày sinh:</label> 
            <input type="text" id="birthday" name="birthday" placeholder="Ngày sinh" class="form-control"><br>
        </div>
        <div class="textbox">
            <label for="phonenumber">Số điện thoại:</label> 
            <input type="text" id="phonenumber" name="phonenumber" placeholder="Số điện thoại" class="form-control"><br>
        </div>
        <div class="textbox">
            <label for="bio">Tiểu sử:</label> 
            <textarea type="text" id="bio" rows = "7" cols = "60" name="bio" placeholder="Thêm tiểu sử" class="form-control"></textarea><br>
        </div>
        <div class="button">
            ​<a href="#" class="button-change">
                <strong class="button-text1">
                    Lưu thay đổi
                </strong>
            </a>
        </div>
    </div>
</div>

<?php
    include 'footer.php';
?>