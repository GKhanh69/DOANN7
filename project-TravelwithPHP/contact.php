<?php
    include 'header.php';
?>
   
</div>
	<div class="contact_us_container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Contact Us</h2>
				<input type="text" class="field" placeholder="Your Name">
				<input type="text" class="field" placeholder="Your Email">
				<input type="text" class="field" placeholder="Phone">
				<textarea placeholder="Message" class="field"></textarea>
                <form action="https://forms.gle/sp5momLksYqyvkfe9">
                <button class="btn">Send</button>
                </form>
			</div>
		</div>
	</div>
    <div class="super_container">
        <!-- About -->
        <div class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        
                        <!-- About - Image -->
    
                        <div class="about_image">
                            <img src="https://i.pinimg.com/564x/ff/08/1b/ff081baa83422d64b3c4d26c58c6fefd.jpg" alt="" style="width: 400px; height: 400px;">
                        </div>
    
                    </div>
    
                    <div class="col-lg-4">
                        
                        <!-- About - Content -->
    
                        <div class="about_content">
                            <div class="about_logo">
                                <div class="logo"><a href="#"><img src="" alt=""><h4>f5 travel</h4></a></div>
                            </div>
                            <p class="about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula iaculis consequat nisl. Nunc et suscipit urna pretium.</p>
                            <ul class="about_social_list">
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-reddit"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" ></i></a></li>
                                <li><a href="#"><i class="fa fa-behance" ></i></a></li>
                            </ul>
                        </div>
    
                    </div>
    
                    <div class="col-lg-3">
                        
                        <!-- About Info -->
    
                        <div class="about_info">
                            <ul class="contact_info_list">
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="assets/img/placeholder.svg" alt="" style="max-width: 20px; padding-right: 5px;"></div></div>
                                    <div class="contact_info_text">4127 Raoul Wallenber 45b-c Gibraltar</div>
                                </li>
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="assets/img/phone-call.svg" alt="" style="max-width: 20px; padding-right: 5px;"></div></div>
                                    <div class="contact_info_text">2556-808-8613</div>
                                </li>
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="assets/img/message.svg" alt="" style="max-width: 20px; padding-right: 5px;"></div></div>
                                    <div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">contactme@gmail.com</a></div>
                                </li>
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="assets/img/planet-earth.svg" alt="" style="max-width: 20px; padding-right: 5px;"></div></div>
                                    <div class="contact_info_text"><a href="https://colorlib.com">www.colorlib.com</a></div>
                                </li>
                            </ul>
                        </div>
    
                    </div>
    
                </div>
            </div>
        </div>
    
        <!-- Google Map -->
            
        <div class="travelix_map">
            <div id="google_map" class="google_map">
                <div class="map_container">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    
    
    </div>
    
    <script src="contactjs/min.js"></script>
    <script src="contactjs/popper.js"></script>
    <script src="contactjs/bootstrap.min.js"></script>
    <script src="contactjs/parallax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
    <script src="contactjs/contact_custom.js"></script>
    <link rel="stylesheet" href="project.js">
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

</script>
</body>
</html>
