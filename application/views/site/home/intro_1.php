<section class="intro_1">
    <div class="container">
        <div class="col-sm-12 col-md-12">
            <div class="title-section"><h2>Dịch vụ đa dạng, mọi lúc mọi nơi</h2></div>
            <div class="intro-item">
                <div class="intro-img">
                    <img src="<?php echo public_url('images/intro/2.png') ?>">
                </div>
                <div class="intro-text">
                    <h2>Dịch vụ:</h2>
                    <p>
                        - Đăng tin rao vặt 1 <br>
                        - Đăng tin rao vặt 2 <br>
                        - Đăng tin rao vặt 3 <br>
                        - Đăng tin rao vặt 4 <br>
                        - Đăng tin rao vặt
                    </p>
                </div>
            </div>

            <div class="intro-item">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                    </ol>

                    <div class="carousel-inner">
                        <?php foreach ($ads as $key=>$value){ ?>
                        <div class="item active">
                            <img class="image" src="<?php echo public_url('images/intro/step1.png') ?>" alt="Bước 1">
                            <div class="text">
                                <span><?= $value->title ?></span>
                                <h2><?= $value->title ?></h2>
                                <p><?= $value->content ?></p>
                            </div>
                        </div>
                        <?php } ?>

                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

            <!--            <div class="intro-item">-->
            <!--                <div class="intro-img">-->
            <!--                    <img src="--><?php //echo public_url('images/intro/2.png')?><!--">-->
            <!--                </div>-->
            <!--                <div class="intro-text">-->
            <!--                    <h2>Thao tác đơn giản:</h2>-->
            <!--                    <p>-->
            <!--                        Mọi thao tác nằm gọn trong chiếc điện thoại thông minh, người dùng chỉ cần vài bước đơn giản trên màn hình điện thoại đã có thể tìm được người cung cấp dịch vụ một cách nhanh chóng, thuận tiện.-->
            <!--                </div>-->
            <!--            </div>-->

            <div class="intro-item">
                <div class="intro-img">
                    <img src="<?php echo public_url('images/intro/3.png') ?>">
                </div>
                <div class="intro-text">
                    <h2>Dịch vụ hoàn hảo:</h2>
                    <p>
                        Mục tiêu của chúng tôi là: Mang lại cho người tiêu dùng sự tiện lợi khi sử dung. Minh bạch trong giá cả. Đa dạng về dịch vụ. Hạn chế được rủi ro trong khi thuê dịch vụ. Lý lịch của người lao động được kiểm tra rõ ràng,... Có GAIA mọi việc trở nên đơn giản và dẽ dàng hơn bao giờ hết!
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>