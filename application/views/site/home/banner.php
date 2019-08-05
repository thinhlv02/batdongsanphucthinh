<section class="news pt-0 ">
    <div class="container">
        <!--        <div class="box-module">-->
        <!--            <div class="bg-modul"><i class="glyphicon glyphicon-star"></i> Tin Vip</div>-->
        <!--        </div>-->
        <div class="row">

<!--            load form search-->
            <?php $this->load->view('site/home/form_search') ?>

            <!--            load form search-->

            <div class="col-sm-6 col-md-6">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <!--                    <ol class="carousel-indicators">-->
                    <!--                        --><?php //foreach ($ads_left as $key => $value) {
                    //                            ?>
                    <!--                            <li data-target="#myCarousel" data-slide-to="-->
                    <?php //echo $key ?><!--" class="--><?php //if ($key == 0) echo 'active'; ?><!--"></li>-->
                    <!--                        --><?php //} ?>
                    <!--                    </ol>-->

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php foreach ($ads_left as $key => $value) {
//                        echo $key;
                            ?>
                            <div class="item <?php if ($key == 0) echo 'active'; ?>"
                                 onclick="updateView('<?php echo $value->id; ?>');">
                                <!--                                    <img src="-->
                                <?php //echo public_url('images/ads/' . $value->img) ?><!--" alt="$value->img" style="width:100% ">-->
                                <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                    <img src="<?php echo public_url('images/ads/' . $value->img) ?>"
                                         alt="<?php echo $value->img ?>" style="width:100%; height: 320px">
                                </a>
                                <!--                                <div class="carousel-caption">-->
                                <!--                                    <h4><a style="color: white !important;" href="-->
                                <?php //echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?><!--">-->
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
                    <!--                                <li data-target="#myCarouse2" data-slide-to="-->
                    <?php //echo $key ?><!--" class="--><?php //if ($key == 0) echo 'active'; ?><!--"></li>-->
                    <!--                            --><?php //} ?>
                    <!--                        </ol>-->

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php foreach ($ads_right as $key => $value) {
//                        echo $key;
                            ?>
                            <div class="item <?php if ($key == 0) echo 'active'; ?>"
                                 onclick="updateView('<?php echo $value->id; ?>');">
                                <!--                                    <img src="-->
                                <?php //echo public_url('images/ads/' . $value->img) ?><!--" alt="$value->img" style="width:100% ">-->
                                <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                    <img src="<?php echo public_url('images/ads/' . $value->img) ?>" alt="$value->img"
                                         style="width: 100%; height: 320px ">
                                </a>


                                <!--                                    <div class="carousel-caption">-->
                                <!--                                        <h4><a class="" href="-->
                                <?php //echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?><!--">-->
                                <?php //echo $value->intro ?><!--</a></h4>-->
                                <!--                                        <p>-->
                                <?php //echo $value->intro ?><!--</p>-->
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
                <!--                                <a href="-->
                <?php //echo base_url('tin-tuc/'.create_slug($value->name).'-'.$value->id)?><!--">-->
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

        getAjax('<?php echo base_url('home/ajax_book') ?>', params, 'POST', '', false, _onSuccess);

        //getAjax('<?php //echo admin_url('ads/ajax_get_list_ward'); ?>//', params, '', 'GET', '', false, _onSuccess);


    });

</script>