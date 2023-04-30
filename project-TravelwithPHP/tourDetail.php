<?php
    include 'header.php';
    include 'db_helperforBOOKS.php';


    //Tạo 1 biến tourrID chứa Mã tour trên thanh chứa link (thanh URL) dc tạo từ trang books.php
    $tourId = $_GET['tid'];

    //Dùng lệnh get tour dc tạo trong db_helperforBOOKS.php để lấy Bộ csdl trùng mã tour với tourID
    $tour = getTour($tourId);


    //Dùng kiểm tra xem có lấy dc dữ liệu chưa
    // print("<pre>");
    // print_r($tour);
    // die();
?>

<!-- banner section begin -->

<div class="banner">
    <img src="https://gotravel.webtravel.vn/assets/image/tour-detail-banner.jpg">
    <div class="banner-txt"><h2>TOUR DETAIL</h2></div>
</div>



<!-- banner section end -->


<!-- Detail section start-->


<div class="tour__detail">
    <div class="main__tour__detail">
        <div class="main__tour__detail__content">
            <div class="event__content">


                <div class="tab-container">
                    <ul class="tabs">
                        <a href="#information"><li class="list__tabs current" data-tab="date"><i class="fa fa-light fa-file-invoice"></i><p>INFORMATION</p></li></a>
                        <a href="#gallery"><li class="list__tabs" data-tab="nameAZ"><i class="fa fa-regular fa-camera"></i><p>GALLERY</p></li></a>
                        <a href="#review"><li class="list__tabs" data-tab="reviews"><i class="fa fa-light fa-users"></i><p>REVIEWS</p></li></a>
                    </ul>
                </div>


                <p id="tour-code">Tour code: <span name="MaTour" id="code"><?php echo $tour['MaTour']?></span></p>

                <div class="main__tab">
                    <div id="date" class="tab-content current">
                        <div class="main__tab__content">
                           <div class="title___information" id="information">
                                <h3><?php echo $tour['DiaDiem']?></h3>
                                <div class="price">
                                    <p><?php echo $tour['GiaTien']?><span><?php echo $tour['GiaTien']?></span></p>
                                    <span class="person">/ per person</span>
                                </div>
                           </div>
                           <p class="info__intro">
                                <?php echo $tour['ChiTiet']?>
                           </p>
                           <ul class="list__info__tour">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $tour['SoNgay']?> days</li>
                                <li><i class="fa fa-light fa-users"></i> <?php echo $tour['DoTuoi']?>+ Age</li>
                                <li><i class="fa fa-solid fa-map"></i> Sightseeing</li>
                                <li><i class="fa fa-sharp fa-regular fa-landmark"></i> <?php echo $tour['TheLoai']?></li>
                           </ul>

                           <ul class="list__info__destinations">
                                <li class="list__info">
                                    <strong>Destination</strong>
                                    <p><?php echo $tour['DiaDiem']?></p>
                                </li>
                                <li class="list__info">
                                    <strong>Departure</strong>
                                    <p>Trụ sở F5 TRAVEL tại TPHCM</p>
                                </li>
                                <li class="list__info">
                                    <strong>Departure Time</strong>
                                    <p> 9:30 AM.</p>
                                </li>
                                <li class="list__info">
                                    <strong>Return Time</strong>
                                    <p> 5:30 PM.</p>
                                </li>
                                <li class="list__info">
                                    <strong>Dress Code</strong>
                                    <p>Tự do</p>
                                </li>
                                <li class="list__info">
                                    <strong>Included</strong>
                                    <ul>
                                        <li><?php echo $tour['DiaDiem']?></li>
                                        <li>Entry Fees</li>
                                        <li>5 Star Accommodation</li>
                                        <li>Personal Guide</li>
                                    </ul>
                                </li>
                                <li class="list__info">
                                    <strong>Not Included</strong>
                                    <div class="not__include">
                                        <p>Departure Taxes</p>
                                        <p>Breakfast</p>
                                    </div>
                                </li>
                           </ul>






                           <div class="our__gallery" id="gallery">
                                <h3>FROM OUR GALLERY</h3>
                                <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, loreendum auctor nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                                <div class="main__our__gallery">
                                    <div class="list__gallery"><img src="assets/img/HUE.jpg"></div>
                                    <div class="list__gallery"><img src="assets/img/HA.jpg"></div>
                                    <div class="list__gallery"><img src="assets/img/HG.jpg"></div>
                                    <div class="list__gallery"><img src="assets/img/MCC.jpg"></div>
                                    <div class="list__gallery"><img src="assets/img/blog/golden-bridge.jpg"></div>
                                    <div class="list__gallery"><img src="assets/img/blog/da-nang.jpg"></div>
                                    <div class="list__gallery"><img src="assets/img/blog/haley.jpg"></div>
                                    <div class="list__gallery"><img src="assets/img/blog/da-lat.jpg"></div>
                                    <div class="list__gallery"><img src="assets/img/blog/hcmc.jpg"></div>

                                </div>
                           </div>



                           <div class="review" id="review">
                                <div class="opening">
                                    <h1>A WONDERFUL JOURNEY</h1>
                                </div>
                                <div class="op-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                                </div>
                                <div class="rating">
                                    <div class="standard">
                                        <div class="stand">
                                            <p>Foods</p>
                                            <div class="stand-star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="stand">
                                            <p>Services</p>
                                            <div class="stand-star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="stand">
                                            <p>Accomodation</p>
                                            <div class="stand-star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="stand">
                                            <p>Destination</p>
                                            <div class="stand-star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="stand">
                                            <p>Overall</p>
                                            <div class="stand-star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="comment">
                                    <div class="cmt">
                                        <p>Comments:</p>
                                    </div>


                                    <div class="PostItem-wrapper">
                                        <div class="PostItem-header">
                                            <div class="PostItem-author">
                                                <a href="#">
                                                    <div class="blog-avatar">
                                                        <img src = "./assets/img/blog/haley.jpg" alt = "Tran">
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <span>Ngoc Tran</span>
                                                </a>
                                            </div>
                                            <div class="PostItem-actions">
                                                <div class="blog-bookmark">
                                                    <a href="#">
                                                        <i class = "ti-bookmark"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="PostItem-body">
                                            <div class="PostItem-info">
                                                <a href="#">
                                                    <h2 class = PostItem-title>Nha Trang</h2>
                                                </a>
                                                <p class = "PostItem-des">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                </p>
                                                <div class="PostItem-time">
                                                    <span>4 days ago</span>
                                                    <span class = "PostItem-dot">.</span>
                                                    5 minutes reading
                                                </div>
                                            </div>
                                            <div class="PostItem-thumb">
                                                <a href="#">
                                                    <img src = "./assets/img/blog/nha-trang.jpg" alt = "review Nha Trang">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           </div>
                        </div>
                    </div>

                </div>
                
            </div>
        </div>
        <div class="sidebar__book__tour">
            <h5>BOOK THIS TOUR</h5>
            <form action="dobooking.php" class="form-book-tour" method="post">             
                <div class="row1">
                    <div class="col-12 list__form">
                        <input name="Tourid" type="text" placeholder="<?php echo $tourId ?>" value="<?php echo $tourId ?>"  readonly>
                    </div>
                    <div class="col-12 list__form">
                        <div class="icon__form">
                            <i class="fa fa-solid fa-pen"></i>
                        </div>
                        <input name="Name" type="text" placeholder="Name *">
                    </div>
                    <div class="col-12 list__form">
                        <div class="icon__form">
                            <i class="fa fa-solid fa-envelope"></i>
                        </div>
                        <input name="Email" type="text" placeholder="Email *">
                    </div>
                    <div class="col-12 list__form">
                        <div class="icon__form">
                            <i class="fa fa-solid fa-phone"></i>
                        </div>
                        <input name="Phone" type="text" placeholder="Phone">
                    </div>
                    <div class="col-12 list__form">
                        <div class="icon__form">
                            <i class="fa fa-regular fa-calendar"></i>
                        </div>
                        <input name="Date" type="text" placeholder="Date * (yyyy/mm/dd)">
                    </div>
                    <div class="col-12 list__form">
                        <div class="icon__form">
                            <i class="fa fa-regular fa-calendar"></i>
                        </div>
                        <input name="NumberoTicket" type="number" placeholder="Number of ticket *" min="1">
                    </div>
                    <div class="col-12 list__form">
                        <textarea name="Message" id="" cols="30" rows="3" placeholder="Message"></textarea>
                    </div>
                    <div class="col-12 list__form" >
                        <input name="Money" type="text" value = "<?php echo $tour['GiaTien'] ?>" readonly>
                    </div>
                </div>
                <div class="btn-book-tour">
                    <input type="submit" value="click" name="submit" onclick="clickonBook()"> 
                </div>
            
            </form>
        </div>
    </div>
</div>


<script>
    function clickonBook(){
        alert("Thank for using our sevices");
    }
</script>

<!-- Detail section end-->


<?php
    include 'footer.php';
?>