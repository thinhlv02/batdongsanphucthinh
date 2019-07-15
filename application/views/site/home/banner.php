<section class="news mt-3">
    <div class="container-fluid">
        <!--        <div class="box-module">-->
        <!--            <div class="bg-modul"><i class="glyphicon glyphicon-star"></i> Tin Vip</div>-->
        <!--        </div>-->
        <div class="col-sm-3 col-md-3">
            <div class="card">
                <div class="card-body">


<!--                    <div class="box-module">-->
<!--                        <div class="bg-modul"><i class="glyphicon glyphicon-search"></i> Tìm kiếm</div>-->
<!--                    </div>-->
                    <div class="page-title text-center">
                        <h4>Tìm kiếm</h4>
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

<!--                        <div class="form-group">-->
<!--                            <label for="email">Loại</label>-->
<!--                            <select class="form-control">-->
<!--                                <option value=""> -- Loại --</option>-->
<!--                            </select>-->
<!--                        </div>-->

                        <button type="submit" class="btn btn-primary">Tìm kiếm</button>

                    </form>

                </div>
            </div>

        </div>
        <div class="col-sm-6 col-md-6">
            <div class="card">
                <div class="card-body">

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <?php foreach ($ads_left as $key => $value) {
                                ?>
                                <li data-target="#myCarousel" data-slide-to="<?php echo $key ?>" class="<?php if ($key == 0) echo 'active'; ?>"></li>
                            <?php } ?>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <?php foreach ($ads_left as $key => $value) {
//                        echo $key;
                                ?>
                                <div class="item <?php if ($key == 0) echo 'active'; ?>">
<!--                                    <img src="--><?php //echo public_url('images/ads/' . $value->img) ?><!--" alt="$value->img" style="width:100% ">-->
                                    <img src="<?php echo public_url('images/ads/' . $value->img) ?>" alt="$value->img" style="width:590px; height: 295px"">
                                    <div class="carousel-caption">
                                        <h3><?php echo $value->title ?></h3>
                                        <p><?php echo $value->intro ?></p>
                                    </div>
                                </div>
                            <?php } ?>

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
            </div>
        </div>

        <div class="col-sm-3 col-md-3">
            <div class="card">
                <div class="card-body">

<!--                    <div class="box-module mt-2">-->
<!--                        <div class="bg-modul"><i class="glyphicon glyphicon-file"></i>Tin tức mới</div>-->
<!--                    </div>-->

                    <div id="myCarouse2" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <?php foreach ($ads_right as $key => $value) {
                                ?>
                                <li data-target="#myCarouse2" data-slide-to="<?php echo $key ?>" class="<?php if ($key == 0) echo 'active'; ?>"></li>
                            <?php } ?>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <?php foreach ($ads_right as $key => $value) {
//                        echo $key;
                                ?>
                                <div class="item <?php if ($key == 0) echo 'active'; ?>">
<!--                                    <img src="--><?php //echo public_url('images/ads/' . $value->img) ?><!--" alt="$value->img" style="width:100% ">-->
                                    <img src="<?php echo public_url('images/ads/' . $value->img) ?>" alt="$value->img" style="width:300px; height: 295px">
                                    <div class="carousel-caption">
                                        <h3><?php echo $value->title ?></h3>
                                        <p><?php echo $value->intro ?></p>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarouse2" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarouse2" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

<!--                    <div class="box-links-right">-->
<!--                        <p>-->
<!--                            <span style="font-size:12px">-->
<!--                                <span  style="font-family:tahoma,geneva,sans-serif"><strong>KHU VỰC&nbsp;HÀ NỘI</strong></span></span>-->
<!--                        </p>-->
<!---->
<!--                        <ul>-->
<!---->
<!--                            --><?php //foreach ($news as $key=>$value){ ?>
<!---->
<!--                            <li>-->
<!--                                <a href="--><?php //echo base_url('tin-tuc/'.create_slug($value->name).'-'.$value->id)?><!--">-->
<!--                                    --><?php //echo $value->name?>
<!--                                </a>-->
<!--                            </li>-->
<!---->
<!--                            --><?php //} ?>
<!---->
<!--                        </ul>-->
<!---->
<!--                    </div>-->
                </div>
            </div>
        </div>

    </div>

</section>