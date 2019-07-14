<section class="news">
    <div class="container-fluid">
<!--        <div class="box-module">-->
<!--            <div class="bg-modul"><i class="glyphicon glyphicon-star"></i> Tin Vip</div>-->
<!--        </div>-->
        <div class="col-sm-3 col-md-3">
            <h2>Tìm kiếm</h2>
            <form action="">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

        </div>
        <div class="col-sm-6 col-md-6">


<!--            <h2>Carousel Example</h2>-->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->

                <ol class="carousel-indicators">
                    <?php foreach ($vip as $key => $value) {
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
                    <?php foreach ($vip as $key => $value) {
//                        echo $key;
                        ?>
                    <div class="item <?php if ($key ==0 ) echo 'active'; ?>">
                        <img src="<?php echo public_url('images/ads/'.$value->img)?>" alt="Los Angeles" style="width:100%;">
                        <div class="carousel-caption">
                            <h3>Los Angeles</h3>
                            <p>LA is always so much fun!</p>
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
        <div class="col-sm-3 col-md-3"></div>
    </div>
</section>