<section class="news mt-3">
    <div class="container-fluid">
<!--        <div class="box-module">-->
<!--            <div class="bg-modul"><i class="glyphicon glyphicon-star"></i> Tin Vip</div>-->
<!--        </div>-->
        <div class="col-sm-3 col-md-3">
            <div class="box-module">
                <div class="bg-modul"><i class="glyphicon glyphicon-search"></i> Tìm kiếm</div>
            </div>
            <form action="">
<!--                <div class="form-group">-->
<!--                    <label for="email">Mã tin:</label>-->
<!--                    <input type="email" class="form-control" id="email" placeholder="Nhập mã tin" name="code">-->
<!--                </div>-->
                <div class="form-group">
                    <label for="email">Tỉnh thành</label>
                    <select class="form-control">
                        <option value=""> -- Chọn Tỉnh thành --</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Quận Huyện</label>
                    <select class="form-control">
                        <option value=""> -- Chọn Quận Huyện --</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="email">Xã / Phường</label>
                    <select class="form-control">
                        <option value=""> -- Xã / Phường --</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="email">Loại</label>
                    <select class="form-control">
                        <option value=""> -- Loại --</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Tìm kiếm</button>

            </form>

        </div>
        <div class="col-sm-6 col-md-6">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->

                <ol class="carousel-indicators">
                    <?php foreach ($banner_center as $key => $value) {
//                        echo $key;
                        ?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo $key ?>" class="<?php if ($key ==0 ) echo 'active'; ?>"></li>

<!--                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>-->
<!--                    <li data-target="#myCarousel" data-slide-to="1"></li>-->
<!--                    <li data-target="#myCarousel" data-slide-to="2"></li>-->
                    <?php } ?>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php foreach ($banner_center as $key => $value) {
//                        echo $key;
                        ?>
                    <div class="item <?php if ($key ==0 ) echo 'active'; ?>">
                        <img src="<?php echo public_url('images/ads/'.$value->img)?>" alt="$value->img" style="width:100% ">
                        <div class="carousel-caption">
                            <h3><?php echo $value->title ?></h3>
                            <p><?php echo $value->intro ?></p>
<!--                            <p>LA is always so much fun!</p>-->
                        </div>
                    </div>
                    <?php } ?>

<!--                    <div class="item">-->
<!--                        <img src="chicago.jpg" alt="Chicago" style="width:100%;">-->
<!--                        <div class="carousel-caption">-->
<!--                            <h3>Chicago</h3>-->
<!--                            <p>Thank you, Chicago!</p>-->
<!--                        </div>-->
<!--                    </div>-->

<!--                    <div class="item">-->
<!--                        <img src="ny.jpg" alt="New York" style="width:100%;">-->
<!--                        <div class="carousel-caption">-->
<!--                            <h3>New York</h3>-->
<!--                            <p>We love the Big Apple!</p>-->
<!--                        </div>-->
<!--                    </div>-->

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


        </div>
        <div class="col-sm-3 col-md-3">
            <div class="box-module mt-2">
                <div class="bg-modul"><i class="glyphicon glyphicon-file"></i>Liên kết được quan tâm</div>
            </div>
            <div class="box-links-right"><p><span style="font-size:12px"><span
                                style="font-family:tahoma,geneva,sans-serif"><strong>KHU VỰC&nbsp;HÀ NỘI</strong></span></span>
                </p>
                <ul>
                    <li>
                        <a href="http://batdongsanphucthinh.vn/ban-can-ho-chung-cu-tai-sun-grand-city-ancora-luong-yen-s1422162">Chung
                            cư&nbsp;Sun Grand City Ancora Residence</a></li>
                    <li>
                        <a href="http://batdongsanphucthinh.vn/ban-can-ho-chung-cu-tai-the-garden-hills-99-tran-binh-s260117">Chung
                            cư The garden Hills - 99 Trần Bình&nbsp;</a></li>
                    <li><a href="http://batdongsanphucthinh.vn/ban-can-ho-chung-cu-tai-an-binh-city-s1172432">Chung
                            cư An Bình City</a></li>
                    <li><a href="http://batdongsanphucthinh.vn/ban-can-ho-chung-cu-tai-goldmark-city-s578392">Chung
                            cư Goldmark City</a></li>
                    <li>
                        <a href="http://batdongsanphucthinh.vn/ban-can-ho-chung-cu-tai-tu-hiep-plaza-s1172600?page=12">Chung
                            cư Tứ Hiệp Plaza</a></li>
                    <li>
                        <a href="http://batdongsanphucthinh.vn/ban-can-ho-chung-cu-tai-vinhomes-green-bay-me-tri-s1988923">Chung
                            cư&nbsp;Vinhomes Green Bay Mễ Trì</a></li>
                    <li>
                        <a href="http://batdongsanphucthinh.vn/ban-can-ho-chung-cu-tai-vinhomes-sky-lake-s1225279">Chung
                            cư Vinhomes Sky Lake</a></li>
                    <li>
                        <a href="http://batdongsanphucthinh.vn/cho-thue-van-phong-mat-bang-kinh-doanh-tai-ha-noi-s49598">Văn
                            phòng - mặt bằng kinh doanh tại Hà Nội</a></li>
                    <li><a href="http://batdongsanphucthinh.vn/nha-ban-tai-duong-pho-phao-dai-lang-s1419515">Nhà
                            bán tại phố Pháo Đài Láng</a></li>
                    <li>
                        <a href="http://batdongsanphucthinh.vn/ban-can-ho-chung-cu-tai-md-complex-my-dinh-s813995">Chung
                            cư Mdcomplex Mỹ Đình</a></li>
                </ul>
                <p>
                    <span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif"><strong>KHU VỰC&nbsp;TP.HCM</strong></span></span>
                </p>
                <ul>
                    <li><a href="http://batdongsanphucthinh.vn/cho-thue-can-ho-chung-cu-tai-quan-7-s37553">Cho
                            thuê căn hộ chung cư Quận 7</a></li>
                    <li><a href="http://batdongsanphucthinh.vn/cho-thue-can-ho-chung-cu-tai-quan-4-s37550">Cho
                            thuê căn hộ chung cư Quận&nbsp;4</a></li>
                    <li>
                        <a href="http://batdongsanphucthinh.vn/cho-thue-can-ho-chung-cu-tai-quan-5-s37551?page=1">Cho
                            thuê căn hộ chung cư Quận&nbsp;5</a></li>
                    <li><a href="http://batdongsanphucthinh.vn/ban-can-ho-chung-cu-tai-him-lam-phu-an-s1422099">Căn
                            hộ Him Lam Phú An</a></li>


                </ul>
            </div>
        </div>
    </div>
</section>