<?php
    include 'header.php';
    include 'db_helperforBOOKS.php';


    //Tạo 1 mảng tours chứa các tours trong csdl
    $tours = getTours();


    //Dùng kiểm tra xem có lấy dc dữ liệu chưa
    // print("<pre>");
    // print_r($tours);
    // die();


    

?>
<!-- banner section begin -->

        <div class="banner">
            <img src="https://gotravel.webtravel.vn/assets/image/destination-detail.jpg">
            <div class="banner-txt"><h2>TOUR LIST</h2></div>
        </div>

<!-- banner section end -->




<!-- main section begin -->

<div class="Main">

        <div class="main-tour">



<!-- load tất cả các tour có trong csdl -->
        <?php
            foreach($tours as $tour){
        ?>
            <div class="list__tour">
                <div class="list__tour__des">
                    <div class="tour__image">
                        <a href="tourDetail.php?tid=<?php  echo $tour['MaTour']?>"><img src="<?php echo $tour['LinkAnh']; ?>" alt=""></a>
                    </div>
                    <div class="tour__des">
                        <div class="tour__code">
                            <p id="tour-code">Tour code: <span id="code"><?php echo $tour['MaTour']?></span></p>
                        </div>
                        <div class="tour__title">
                            <a href="tourDetail.php?tid=<?php  echo $tour['MaTour']?>"><?php echo $tour['DiaDiem']; ?></a>
                            <span>$<?php echo $tour['GiaTien']; ?></span>
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
            </div>

        <?php
            }
        ?>


        <div class="sidebar__tour">
            <div class="find__destinations">
                <h4>Find Your Destination</h4>
                <form action="" class="form-search">
                    <div class="form__group__search">
                        <i class="search-icon ti-search"></i>
                        <input type="text" placeholder="Search tour">
                    </div>
                    <div class="form__group__search">
                        <i class="fa fa-solid fa-compass"></i>
                        <input type="text" placeholder="Where to ?">
                    </div>
                    <div class="form__group__search">
                        <i class="fa fa-light fa-calendar"></i>
                        <select name="" id="">
                            <option value="">Month</option>
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>  
                    <div class="choose">
                        <div class="group__check">
                            <input type="checkbox" name="" id="romantic">
                            <label for="romantic"><span>Romantic</span></label>
                        </div>
                        <div class="group__check">
                            <input type="checkbox" name="" id="exotic">
                            <label for="exotic"><span>Exotic</span></label>
                        </div>
                        <div class="group__check">
                            <input type="checkbox" name="" id="vacation">
                            <label for="vacation"><span>Vacation</span></label>
                        </div>
                    </div>
        
                    <button>Search</button>
                    
                </form>
            </div>
        </div>

</div>



<!-- main section end -->


<?php
    include 'footer.php';
?>