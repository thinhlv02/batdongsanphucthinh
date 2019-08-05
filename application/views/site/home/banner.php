<section class="news pt-0 ">
    <div class="container">
        <!--        <div class="box-module">-->
        <!--            <div class="bg-modul"><i class="glyphicon glyphicon-star"></i> Tin Vip</div>-->
        <!--        </div>-->
        <div class="row">

            <div class="col-sm-2 col-md-2">
                <div class="box-module mt-2">
                    <div class="bg-modul"><h1>
                            <i class="glyphicon glyphicon-search"></i>tìm kiếm</h1></div>
                </div>
                <div class="card" style="background: #5caceb33 !important;">
                    <div class="card-body pt-0 " style="height: 295px;">
<!--                        <div class="box-module">-->
<!--                            <div class="bg-modul"><i class="glyphicon glyphicon-search"></i> Tìm kiếm</div>-->
<!--                        </div>-->
<!--                        <div class="page-title text-center" style="">-->
<!--                            <h4 class="border-bottom">Chức năng tìm kiếm</h4>-->
<!--                            <button type="button" class="btn btn-success">Thanh tìm kiếm <span class="badge"></span></button>-->
<!--                        </div>-->

<!--                        <form id="formAddProduct_book" method="post" enctype="multipart/form-data">-->

                        <form id="formAddProduct_book12" data-parsley-validate class="" method="get" action="<?php echo base_url('tim-kiem') ?>"
                                  enctype="multipart/form-data">
                            <!--                <div class="form-group">-->
                            <!--                    <label for="email">Mã tin:</label>-->
                            <!--                    <input type="email" class="form-control" id="email" placeholder="Nhập mã tin" name="code">-->
                            <!--                </div>-->
                            <div class="form-group">
                                <label for="email">Tỉnh thành</label>
                                    <select class="form-control" name="province" onchange="get_district(this)">
                                    <option value=""> - Chọn Tỉnh thành -</option>
                                    <?php foreach ($lstProvince as $key => $value) { ?>
                                        <option value="<?= $value->id ?>" <?php if (isset($_POST['type']) && $_POST['type'] == $key) echo 'selected' ?>>
                                            <?php echo $value->_name ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email">Quận Huyện</label>
                                <div class="" id="divDistrict">
                                    <select class="form-control" name="district">
                                        <option value="0"> - Chọn Quận Huyện -</option>
                                    </select>
                                 </div>
                            </div>

                            <div class="form-group">
                                <label for="email">Xã / Phường</label>
                                <div class="" id="divWard">
                                    <select class="form-control" name="ward">
                                        <option value="0"> - Xã / Phường -</option>
                                    </select>
                                </div>
                            </div>

    <!--                        <div class="form-group">-->
    <!--                            <label for="email">Loại</label>-->
    <!--                            <select class="form-control">-->
    <!--                                <option value=""> -- Loại --</option>-->
    <!--                            </select>-->
    <!--                        </div>-->
                            <div class="text-center">

<!--                            <button style="background: #5caceb " type="submit" class="btn btn-default">Tìm kiếm</button>-->
                            </div>

                        </form>

                    </div>
                </div>

            </div>
            <div class="col-sm-6 col-md-6">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
<!--                    <ol class="carousel-indicators">-->
<!--                        --><?php //foreach ($ads_left as $key => $value) {
//                            ?>
<!--                            <li data-target="#myCarousel" data-slide-to="--><?php //echo $key ?><!--" class="--><?php //if ($key == 0) echo 'active'; ?><!--"></li>-->
<!--                        --><?php //} ?>
<!--                    </ol>-->

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php foreach ($ads_left as $key => $value) {
//                        echo $key;
                            ?>
                            <div class="item <?php if ($key == 0) echo 'active'; ?>" onclick="updateView('<?php echo $value->id; ?>');">
<!--                                    <img src="--><?php //echo public_url('images/ads/' . $value->img) ?><!--" alt="$value->img" style="width:100% ">-->
                                <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                <img src="<?php echo public_url('images/ads/' . $value->img) ?>" alt="<?php echo $value->img ?>" style="width:100%; height: 320px">
                                </a>
<!--                                <div class="carousel-caption">-->
<!--                                    <h4><a style="color: white !important;" href="--><?php //echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?><!--">-->
<!--                                            --><?php //echo $value->intro ?>
<!--                                        </a></h4>-->
<!--                                            <p><a class="text-danger" href="">-->
<!--                                                --><?php //echo $value->intro ?>
<!--                                            </a></p>-->
<!--                                </div>-->
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

            <div class="col-sm-4 col-md-4">

<!--                    <div class="box-module mt-2">-->
<!--                        <div class="bg-modul"><i class="glyphicon glyphicon-file"></i>Tin tức mới</div>-->
<!--                    </div>-->

                    <div id="myCarouse2" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
<!--                        <ol class="carousel-indicators">-->
<!--                            --><?php //foreach ($ads_right as $key => $value) {
//                                ?>
<!--                                <li data-target="#myCarouse2" data-slide-to="--><?php //echo $key ?><!--" class="--><?php //if ($key == 0) echo 'active'; ?><!--"></li>-->
<!--                            --><?php //} ?>
<!--                        </ol>-->

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <?php foreach ($ads_right as $key => $value) {
//                        echo $key;
                                ?>
                                <div class="item <?php if ($key == 0) echo 'active'; ?>" onclick="updateView('<?php echo $value->id; ?>');">
<!--                                    <img src="--><?php //echo public_url('images/ads/' . $value->img) ?><!--" alt="$value->img" style="width:100% ">-->
                                    <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                        <img src="<?php echo public_url('images/ads/' . $value->img) ?>" alt="$value->img" style="width: 100%; height: 320px ">
                                    </a>


<!--                                    <div class="carousel-caption">-->
<!--                                        <h4><a class="" href="--><?php //echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?><!--">--><?php //echo $value->intro ?><!--</a></h4>-->
<!--                                        <p>--><?php //echo $value->intro ?><!--</p>-->
<!--                                    </div>-->
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

</section>

<script>
    function get_district(sel) {
        var id = sel.value;
        console.log(id);
        if (id == 0) {
            $('#selectDistrict').empty();
            $('#selectWard').empty();
            $('#selectStreet').empty();
        } else {
            // ajax
            var params = {
                'id': id
            };

            // console.log(params);
            var _onSuccess = function (data) {
                // console.log(data);
                if (data == 'NOT_LOGIN') {
                    window.location.reload(true);
                } else if (data === 'false') {

                } else {
                    // console.log(data);
                    $("#divDistrict").html(data);
                }
            };//

            getAjax('<?php echo base_url('home/ajax_get_list_district'); ?>', params, '', 'GET', '', false, _onSuccess);
        }
    }

    function get_ward(sel) {
        var id = sel.value;
        console.log(id);
        if (id == 0) {
            $('#selectWard').empty();
            $('#selectStreet').empty();
        } else {
            var params = {
                'id': id
            };

            var _onSuccess = function (data) {
                // console.log(data);
                if (data == 'NOT_LOGIN') {

                } else if (data === 'false') {

                } else {
                    $("#divWard").html(data);
                }
            };

            getAjax('<?php echo base_url('home/ajax_get_list_ward'); ?>', params, '', 'GET', '', false, _onSuccess);
        }
    }

    //search submit
    $("#formAddProduct_book").submit(function (e) {
        //prevent Default functionality
        e.preventDefault();
        // console.log('abc');
        // var data = $("#formAddProduct_book").serialize() + '&userid=' + userid+ '&server='+server;
        var params = $("#formAddProduct_book").serialize();
        console.log('data submit11111111 ' + params);

        var _onSuccess = function (data) {
            console.log(data);
            if (data == 'NOT_LOGIN') {

            } else if (data === 'false') {

            } else {
                console.log(data);
                // $("#divStreet").html(data);
            }
        };

        getAjax('<?php echo base_url('home/ajax_book') ?>', params, 'POST','',false, _onSuccess);

        //getAjax('<?php //echo admin_url('ads/ajax_get_list_ward'); ?>//', params, '', 'GET', '', false, _onSuccess);


    });

</script>