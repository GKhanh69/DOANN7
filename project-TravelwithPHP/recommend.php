<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F5-Travel</title>

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/recommend.css">
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="project.js">
</head>

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
                                <b id="login-btn" onclick="document.getElementById('login-form-container').style.display='block'">LOGIN | SIGN UP</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <div id="nav-container">
                <ul id="nav">
                    <li><a href = "index.php">HOME</a></li>
                    <li><a href = "about.php">ABOUT</a></li>
                    <li><a href = "recommend.php">RECOMMEND</a></li>
                    <li><a href = "books.php">BOOK NOW</a></li>
                    <li><a href = "blog.php">BLOG</a></li>
                    <li><a href = "contact.php">CONTACT</a></li>
                </ul>
            </div>
            <div class="title">
                    <b style = "font-family: 'Courier New', Courier, monospace; color: #fff; font-size: 24px;">F5 TRAVEL</b>
            </div>
            <div class="search-btn">
                <i class="search-icon ti-search"></i>
            </div>
        </div>




<!--<div class="banner">
    <img src="https://www.blogcaycanh.vn/files/large/7fd6423ab73c83b">
    <div class="banner-txt"><h2>VIỆT NAM - ĐẤT NƯỚC - CON NGƯỜI</h2></div>
</div>-->
<section class="home" id="home">

    <div class="content">
        <h3>beautiful vietnam</h3>
        
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="assets/img/h1.mp4"></span>
        <span class="vid-btn" data-src="assets/img/h2.mp4"></span>
        <span class="vid-btn" data-src="assets/img/h3.mp4"></span>
        <span class="vid-btn" data-src="assets/img/h4.mp4"></span>
        <span class="vid-btn" data-src="assets/img/h5.mp4"></span>
        <span class="vid-btn" data-src="assets/img/h6.mp4"></span>
    </div>

    <div class="video-container">
        <video src="assets/img/h1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>





<!-- recommend section starts  -->
<div class="content-section" id="recommend">

    <h2 class="section-heading">
        <span>R</span>
        <span>E</span>
        <span>C</span>
        <span>O</span>
        <span>M</span>
        <span>M</span>
        <span>E</span>
        <span>N</span>
        <span>D</span>
    </h2>

    <div class="box-container">

        <div class="box">
            <img src="./assets/img/HA.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Hội An </h3>
                <p>Thành phố Hội An nằm bên bờ bắc hạ lưu sông Thu Bồn. Hội An là một đô thị cổ của Việt Nam</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $850.00 <span>$900.00</span> </div>
                <a href="books.php" class="btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <img src="./assets/img/VHL.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Vịnh Hạ Long </h3>
                <p>Vịnh Hạ Long là một vịnh nhỏ thuộc phần bờ tây vịnh Bắc Bộ tại khu vực biển Đông Bắc Việt Nam, bao gồm vùng biển đảo của thành phố Hạ Long thuộc tỉnh Quảng Ninh.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $850.00 <span>$900.00</span> </div>
                <a href="books.php" class="btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <img src="./assets/img/MCC.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Mù Cang Chải </h3>
                <p>Mù Cang Chải là huyện vùng cao phía Tây của tỉnh Yên Bái, cách trung tâm thành phố Yên Bái 180km, cách thủ đô Hà Nội hơn 300km về phía Tây Bắc. Vùng đất này nằm dưới chân của dãy núi Hoàng Liên Sơn, ở độ cao trên 2.000m so với mặt biển.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $850.00 <span>$900.00</span> </div>
                <a href="books.php" class="btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <img src="./assets/img/PQ.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Phú Quốc </h3>
                <p>Phú Quốc là một hòn đảo nằm trong vịnh Thái Lan và là đảo lớn nhất Việt Nam. Về hành chính, đảo Phú Quốc cùng với các đảo nhỏ hơn ở lân cận và quần đảo Thổ Chu cách 55 hải lý về phía tây nam hợp thành thành phố đảo Phú Quốc trực thuộc tỉnh Kiên Giang.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $850.00 <span>$900.00</span> </div>
                <a href="books.php" class="btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <img src="./assets/img/HUE.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Huế </h3>
                <p>Huế từng là vùng đất cố đô mang đậm dấu ấn lịch sử. Quần thể di tích Cố đô Huế được UNESCO ghi danh là Di sản Văn hoá Thế giới đầu tiên vào năm 1993.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $850.00 <span>$900.00</span> </div>
                <a href="books.php" class="btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <img src="./assets/img/HG.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Hà Giang </h3>
                <p>Hà Giang là một tỉnh thuộc vùng Đông Bắc Bộ, Việt Nam.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $850.00 <span>$900.00</span> </div>
                <a href="books.php" class="btn">Book now</a>
            </div>
        </div>

        <div class="box">
            <img src="assets/img/LS.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Lý Sơn </h3>
                <p>Lý Sơn là một trong những địa điểm du lịch Quảng Ngãi nổi tiếng. Đây là hòn đảo hiếm hoi vẫn giữ được vẻ đẹp hoang sơ, với làn những bãi cát trắng trải dài, dòng nước trong như ngọc và núi non hùng vĩ.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $850.00 <span>$900.00</span> </div>
                <a href="books.php" class="btn">Book now</a>
            </div>
        </div>
        <div class="box">
            <img src="./assets/img/TA.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Tràng An </h3>
                <p>Quần thể danh thắng Tràng An là một vùng du lịch tổng hợp gồm các di sản văn hóa và thiên nhiên thế giới do UNESCO công nhận ở Ninh Bình, Việt Nam</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $850.00 <span>$900.00</span> </div>
                <a href="books.php" class="btn">Book now</a>
            </div>
        </div>
        <div class="box">
            <img src="./assets/img/HaNoi.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Hà Nội </h3>
                <p>Hà Nội- Thủ đô nghìn năm tuổi, giàu bản sắc, văn hóa truyền thống dân tộc</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $850.00 <span>$900.00</span> </div>
                <a href="books.php" class="btn">Book now</a>
            </div>
        </div>





    </div>

</div>


<!-- recommend section ends -->




<!-- footer section -->
<div class = "footer">

    <div class="box-container">

        <div class="box">
            <h3>About Us</h3>
            <p>F5 Travel has the mission of raising the level of tourism in Vietnam and bringing Vietnam's image to all five continents by providing unique experiences, products, and services containing cultural and spiritual values, preserving culture, and maintaining national identity.</p>
        </div>
        <div class="box">
            <h3>Branch Locations</h3>
            <a href="#">Hà Nội</a>
            <a href="#">Đà Nẵng</a>
            <a href="#">Đà Lạt</a>
            <a href="#">Hồ Chí Minh</a>
        </div>
        <div class="box">
            <h3>Quick Links</h3>
            <a href="#">home</a>
            <a href="#">book</a>
            <a href="#">packages</a>
            <a href="#">services</a>
            <a href="#">gallery</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>
        <div class="box">
            <h3>Follow Us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">linkedin</a>
        </div>

    </div>

    <h1 class="credit"> Created by <span> nhóm 7 </span> | All rights reserved! </h1>

</div>
<!-- ================================================= -->

<script src="project.js"></script>

<script>
var modal = document.getElementById('login-form-container');

window.onclick = function(event){
    if(event.target==modal){
        modal.style.display = "none";
    }
}


let videoBtn = document.querySelectorAll('.vid-btn');
videoBtn.forEach(btn =>{
    btn.addEventListener('click', ()=>{
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#video-slider').src = src;
    });
});


var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    loop:true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
    },
});

var swiper = new Swiper(".brand-slider", {
    spaceBetween: 20,
    loop:true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        450: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
        },
        991: {
          slidesPerView: 4,
        },
        1200: {
          slidesPerView: 5,
        },
      },
});

</script>

</body>
</html>
