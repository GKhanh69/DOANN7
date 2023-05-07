<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F5-Travel</title>
    <link rel="stylesheet" href="./assets/css/user.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/books.css">
    <link rel="stylesheet" href="./assets/css/blog.css">
    <link rel="stylesheet" href="./assets/css/tourDetail.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.4.0/css/all.css">
    <link rel="stylesheet" href="project.js">
	<link rel="stylesheet" type="text/css" href="./assets/css/contact.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/contact_responsive.css">

</head>
<body>

    <div id = "main">
        <div id = "header">
            <div class = "header-topbar">
                <div class="grid-wide">
                    <div class="header-topbar-container">
                        <div class="row">
                            <div class="left-topbar">
                                <span style = "font-size: 10px;"> +89 797 278 779</span>
                                <a href="#">
                                    <i class = "ti-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class = "ti-instagram"></i>
                                </a>
                                <a href="#">
                                    <i class = "ti-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class = "ti-pinterest-alt"></i>
                                </a>
                            </div>

                            <div class="right-topbar">
                                <b>
                                    <?php
                                        if(!isset($_SESSION['email'])){ 
                                            echo '<a href="';
                                            echo 'login.php">';
                                            echo "LOGIN | SIGN UP";
                                        }
                                        else {
                                            echo '<a href="';
                                            echo 'user.php">';
                                            echo $_SESSION['fname'] . $_SESSION['lname'];
                                        }
                                    ?>
                                    </a> 
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div id="nav-container">
                <ul id="nav">
                    <li><a href = "index.php">HOME</a></li>
                    <li><a href = "about.html">ABOUT</a></li>
		    <li><a href = "recommend.php">RECOMMEND</a></li>
                    <li><a href = "books.php">BOOK NOW</a></li>
                    <li><a href = "blog.php">BLOG</a></li>
                    <li><a href = "contact.php">CONTACT</a></li>
		    <div id="search-container">
                    <li>
                    <div id="search-container">
                       <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                          <input type="text" name="search" placeholder="Search...">
                          <button type="submit">Search</button>
                        </form>
                        <i class="fa fa-search" id="search-icon"></i>
                    </div>
                    </li>
                </ul>
            </div>
            <div class="title">
                    <b style = "font-family: 'Courier New', Courier, monospace; color: #fff; font-size: 24px;">F5 TRAVEL</b>
            </div>
            <div class="search-btn">
                <i class="search-icon ti-search"></i>
            </div>
        </div>
<style>
    #search-container form {
        display: none;
    }

    #search-container.show-form form {
        display: block;
    }

    #search-icon {
        cursor: pointer;
    }
</style>

<script>
    const searchContainer = document.getElementById("search-container");
    const searchIcon = document.getElementById("search-icon");

    searchIcon.addEventListener("click", () => {
        searchContainer.classList.toggle("show-form");
    });
</script>




<style>
#search-form {
  float: right;
  margin-top: 8px; /* chỉnh khoảng cách với nav */
}

#search-form input[type="text"] {
  padding: 8px;
  border: none;
  border-bottom: 2px solid #ccc;
  font-size: 16px;
  width: 200px;
}

#search-form button[type="submit"] {
  padding: 8px 16px;
  background-color: #555;
  color: #fff;
  border: none;
  font-size: 16px;
  cursor: pointer;
  margin-left: 10px;
}

</style>
    
<?php
// Kết nối đến CSDL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlwebdulich";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// Kiểm tra nút tìm kiếm đã được nhấn chưa
if(isset($_GET['search'])) {
    // Lấy từ khóa tìm kiếm
    $search = $_GET['search'];

    // Thực hiện truy vấn
    $sql = "SELECT * FROM tb_tourdulich WHERE DiaDiem LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);

    // Kiểm tra kết quả trả về
    if(mysqli_num_rows($result) > 0) {
        // Hiển thị thông tin tour du lịch
        while($tour = mysqli_fetch_assoc($result)) {
            ?>
            <div class="tour__image">
                <div class="list__tour__des">
                    <a href="tourDetail.php?tid=<?php  echo $tour['MaTour']?>"><img src="<?php echo $tour['LinkAnh']; ?>" alt=""></a>
                </div>
                <div class="tour__des">
                    <div class="tour__code">
                        <p id="tour-code">Tour code: <span id="code"><?php echo $tour['MaTour']?></span></p>
                    </div>
                    <div class="tour__title">
                        <a href="tourDetail.php?tid=<?php  echo $tour['MaTour']?>"><?php echo $tour['DiaDiem']; ?></a>
                        <span>Vnd <?php echo $tour['GiaTien']; ?></span>
                    </div>
                    <div class="rating__tour">
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <p>Xem thêm chi tiết</p>
                    </div>
                </div>
                <div class="tour__info">
                    <p><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $tour['SoNgay']?> Days</p>
                    <p><i class="fa fa-light fa-users"></i> <?php echo $tour['DoTuoi']?>+</p>
                </div>
            </div>
            <?php
        }
    } else {
        // Hiển thị thông báo khi không tìm thấy kết quả
        echo "Không tìm thấy tour du lịch phù hợp";
    }
}
    
