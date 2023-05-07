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



<!-- news section ends -->
<div class="content-section" id="news">
    <section class="news" id="news">

        <h1 class="section-heading">
            <span>N</span>
            <span>E</span>
            <span>W</span>
            <span>S</span>
            
        </h1>
    
        <div class="box-container">
    
            <div class="box">
                <img src="assets/img/SD.jpg">
                <div class="content">
                    <h3>Sơn Đoòng</h3>
                    <p>Hang động tự nhiên lớn nhất hành tinh</p>
                    <a href="https://oxalisadventure.com/vi/cave/hang-son-doong/"> <button name="button" type="button">See more</button> </a>
    
                </div>
            </div>
            <div class="box">
                <img src="assets/img/DL.jpg" alt="">
                <div class="content">
                    <h3>Đà Lạt</h3>
                    <p>Một đêm lang thang</p>
                    <a href="https://dalattrongtoi.com/da-lat-trong-toi/da-lat-mot-dem-lang-thang.html"> <button name="button" type="button">See more</button> </a>
                </div>
            </div>
            <div class="box">
                <img src="assets/img/DN.jpg" alt="">
                <div class="content">
                    <h3>Đà Nẵng</h3>
                    <p>Thành phố đáng sống</p>
                    <a href="https://danangbest.com/dia-diem-du-lich-gan-day.html"> <button name="button" type="button">See more</button> </a>
                </div>
            </div>
            <div class="box">
                <img src="assets/img/SP.jpg" alt="">
                <div class="content">
                    <h3>Sa Pa</h3>
                    <p>Nơi gặp gỡ đất trời</p>
                    <a href="https://toigingiuvedep.vn/hinh-anh-sapa-dep/"> <button name="button" type="button">See more</button> </a>
                </div>
            </div>
            <div class="box">
                <img src="assets/img/PT.jpg" alt="">
                <div class="content">
                    <h3>Phan Thiết</h3>
                    <p>Vẻ đẹp miền cát trắng</p>
                    <a href="https://sgtravel.vn/phan-thiet-ve-dep-mien-cat-trang/"> <button name="button" type="button">See more</button> </a> 
                </div>
            </div>
            <div class="box">
                <img src="assets/img/HN.jpg" alt="">
                <div class="content">
                    <h3>Hà Nội</h3>
                    <p>Thủ đô nghìn năm văn hiến</p>
                    <a href="https://dulichkhampha24.com/gioi-thieu-ve-ha-noi.html"> <button name="button" type="button">See more</button> </a> 
                </div>
            </div>
            <div class="box">
                <img src="assets/img/PN.jpg" alt="">
                <div class="content">
                    <h3>Phong Nha</h3>
                    <p>Kỳ quan đệ nhất động</p>
                    <a href="https://phongnhaexplorer.com/phong-nha/dong-phong-nha-4.html"> <button name="button" type="button">See more</button> </a> 
                </div>
            </div>
            <div class="box">
                <img src="assets/img/NT.jpg" alt="">
                <div class="content">
                    <h3>Nha Trang</h3>
                    <p>Thành phố biển xinh đẹp</p>
                    <a href="https://www.dulichvtv.com/blog/nha-trang-thanh-pho-bien-xinh-dep/"> <button name="button" type="button">See more</button> </a> 
                </div>
            </div>
            <div class="box">
                <img src="assets/img/CN.jpg" alt="">
                <div class="content">
                    <h3>Chợ nổi</h3>
                    <p>Độc đáo miền sông nước</p>
                    <a href="https://vn.alongwalker.co/tap-nap-cho-noi-cai-rang-sac-mau-van-hoa-mien-tay-doc-dao-s336392.html"> <button name="button" type="button">See more</button> </a> 
                </div>
            </div>
    
        </div>
    
</div>


    

<!-- news section ends-->


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
<script>
function clickonContact() {
  alert("Thank for your contact");
}
</script>
                                    <button class="contact-form-submit-btn" type="submit" onclick = "clickonContact()">
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
