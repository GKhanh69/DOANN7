<?php
include 'header.php';
 ?>
        <!-- Slider -->

        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 3</div>
                                <img style="height: 100% width 100%;" src="./assets/img/slider/golden-bridge.jpg">
                            <div class="text">GOLDEN BRIDGE</div>
                        </div>
          
                        <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                                <img style="height: 100% width 100%;" src="./assets/img/slider/ha-noi.jpg">
                            <div class="text">HA NOI</div>
                        </div>
          
                        <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                                <img style="height: 100% width 100%;" src="./assets/img/slider/hoi-an.jpg">
                        <div class="text">HOI AN</div>
                        </div>
          
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          </div>
          <br>
          
          <!-- The dots/circles -->
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div>
        </div>




<!-- login form container  -->

<!-- LOgin form end  -->




<!-- About section begin -->

            <div class="content-section" id = "about">
                <h2 class="section-heading">
                    <span>A</span>
                    <span>B</span>
                    <span>O</span>
                    <span>U</span>
                    <span>T</span>
                    <span class="space"> </span>
                    <span>U</span>
                    <span>S</span>
                </h2>
                <p class="section-sub-heading">Meet our team members</p>
                <p class="about-text">
                    F5 Travel has the mission of raising the level of tourism in Vietnam and bringing Vietnam's image to all five continents by providing unique experiences, products, and services containing cultural and spiritual values, preserving culture, and maintaining national identity.
                </p>
                <!-- avatar -->
                <div class="member-list">
                    <div class="member-item">
                        <a href="#">Ngoc Tran</a>
                        <img src = "./assets/img/team/female.jpg" alt="Name" class = "member-img" >
                    </div>
                    <div class="member-item">
                        <a href="#">Nha Triet</a>
                        <img src = "./assets/img/team/female.jpg" alt="Name" class = "member-img" >
                    </div>
                    <div class="member-item">
                        <a href="#">Tu Quyen</a>
                        <img src = "./assets/img/team/female.jpg" alt="Name" class = "member-img" >
                    </div>
                    <div class="member-item">
                        <a href="#">Gia Khanh</a>
                        <img src = "./assets/img/team/male.jpg" alt="Name" class = "member-img" >
                    </div>
                    <div class="member-item">
                        <a href="#">Thanh Dat</a>
                        <img src = "./assets/img/team/male.jpg" alt="Name" class = "member-img" >
                    </div>
                    <!-- clear float, vì khi dùng float property thì f12 trên web sẽ k thấy các item được bao trọn -->
                    <div class="clear"></div>
                </div>
            </div>



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
                <a href="books.php" class="btn">Book now</a>
            </div>
        </div>

    </div>

</div>

<!-- recommend section ends -->


 <!-- services section starts  -->

<div class="content-section" id="services">

    <h2 class="section-heading">
        <span>S</span>
        <span>E</span>
        <span>R</span>
        <span>V</span>
        <span>I</span>
        <span>C</span>
        <span>E</span>
        <span>S</span>
    </h2>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-hotel"></i>
            <h3>affordable hotels</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>safty guide</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
            <h3>around the world</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-plane"></i>
            <h3>fastest travel</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>
        <div class="box">
            <i class="fas fa-hiking"></i>
            <h3>adventures</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore commodi earum, quis voluptate exercitationem ut minima itaque iusto ipsum corrupti!</p>
        </div>

    </div>

</div>

<!-- services section ends -->

<!-- contact section starts  -->
<div class="content-section" id = "contact">
    <h2 class="section-heading">
        <span>C</span>
        <span>O</span>
        <span>N</span>
        <span>T</span>
        <span>A</span>
        <span>C</span>
        <span>T</span>
    </h2>
    <div class="home-contact">
        <div class="contact-background">
            <div class="grid-wide">
                <div class="contact-container">
                    <div class="row">
                        <div class="contact-left"></div>
                        <div class="contact-right">
                            <div class="contact-container-form">
                                <div class="contact-title">
                                    <h2>Get In Touch</h2>
                                </div>
                                <form action="db_helperforCONTACT.php" method="post" class="contact-form">
                                    <input name="Name" type="text" placeholder="Name" class="contact-form-name">
                                    <input name="Email" type="text" placeholder="E-mail" class="contact-form-email">
                                    <input name="Subject" type="text" placeholder="Subject" class="contact-form-subject">
                                    <textarea name="Message" id cols="30" rows="10" placeholder="Message" style="font-size: 17px;"></textarea>
                                    <button class="contact-form-submit-btn" type="submit">
                                        SEND MESSAGE
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact section ends  -->

<?php 
    include 'footer.php';
?>