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


    <div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Thông tin tour</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Mã tour</th>
								<th>Email</th>
								<th>Số vé</th>
								<th>Giá</th>
							</tr>
						</thead>
						<tbody>
							<?php
							?>

							<tr>
								<td>
									<p>asd</p>
								</td>
								<td>asd</td>
								<td>asd</td>
								<td>
									<span class="update edit">Edit</span>
									<span class="update delete">Delete</span>
								</td>
							</tr>
							
							<?php
								
							?>
						</tbody>
					</table>
				</div>
			</div>


    </div>
            



</div>

<?php
    include 'footer.php';
?>