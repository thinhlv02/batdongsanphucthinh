<section class="contact">
    <div class="container">
        <div class="row">
            <!--        <div class="title-section"><h2>Chi tiết bài rao</h2></div>-->
            <div class="col-md-12  col-sm-12 col-xs-12 mt-2" style="">
                <ol class="breadcrumb">
                    <!--                <li><a href="--><?php //echo base_url('rao-vat') ?><!--">Rao vặt</a></li>-->
                    <li class="" style="color: red;text-transform: uppercase;"><?php echo $ads->title ?></li>
                </ol>
                <div class="item-news-1" style="">
                    <!--                <span>--><?php //echo date('d/m/Y', strtotime($ads->created_at)) ?><!--</span>-->
                    <!--                <h3 class="title-news-1 text-info">--><?php //echo $ads->title ?><!--</h3>-->
                    <!--                <h4 class="text-danger">--><?php //echo $ads->title ?><!--</h4>-->
                    <div class="col-md-12 col-sm-12">
                        <img  id="myImg" src="<?php echo public_url('images/ads/' . $ads->img) ?> "  style="width:100%;">

    <!--                    <img id="myImg" src="https://www.w3schools.com/howto/img_snow.jpg" alt="Snow" style="width:100%;max-width:300px">-->

                        <!-- The Modal -->
                        <div id="myModal" class="modal">
                            <span class="close">&times;</span>
                            <img class="modal-content" id="img01">
                            <div id="caption"></div>
                        </div>

                        <script>
                            // Get the modal
                            var modal = document.getElementById("myModal");

                            // Get the image and insert it inside the modal - use its "alt" text as a caption
                            var img = document.getElementById("myImg");
                            var modalImg = document.getElementById("img01");
                            var captionText = document.getElementById("caption");
                            img.onclick = function(){
                                modal.style.display = "block";
                                modalImg.src = this.src;
                                captionText.innerHTML = this.alt;
                            }

                            // Get the <span> element that closes the modal
                            var span = document.getElementsByClassName("close")[0];

                            // When the user clicks on <span> (x), close the modal
                            span.onclick = function() {
                                modal.style.display = "none";
                            }
                        </script>
                    </div>

                    <div class="col-md-12 col-sm-12">

                        <div class="box-info" style="">
                            <div class="block">
                                <div class="col-left">Mã tin</div>
                                <div class="col-right"><b>
                                        <?php
                                        echo $ads->id.'000';
    //                                    if ($ads->code == 0) {
    //                                        echo generateRandomString(6);
    //                                    } else {
    //                                        echo $ads->code;
    //                                    } ?>
                                    </b></div>
                            </div>
                            <div class="block">
                                <div class="col-left">Lượt xem</div>
                                <div class="col-right"><b><?php echo $ads->view ?></b></div>
                            </div>
                            <div class="block">
                                <div class="col-left">Hình thức</div>
                                <div class="col-right"><b>Bán đất</b></div>
                            </div>
                            <div class="block">
                                <div class="col-left">Địa chỉ:</div>
                                <div class="col-right"><b><?php echo $ads->area ?></b></div>
                            </div>
                            <div class="block">
                                <div class="col-left">Diện tích</div>
                                <div class="col-right"><b><span><?php echo $ads->acreage ?> m</span><sup>2</sup></b></div>
                            </div>
                            <div class="block">
                                <div class="col-left">Giá</div>
                                <div class="col-right"><b><?php echo $ads->price ?> (VNĐ)</b></div>
                            </div>
                            <div class="block">
                                <div class="col-left">Ngày đăng</div>
                                <div class="col-right"><b><?php echo date('d-m-Y', strtotime($ads->created_at)) ?></b></div>
                            </div>
                        </div>

                    </div>

                    <div class="content-news-1 col-md-12 col-sm-12" style="margin-top: 10px">

                        <div class="title-hd text-uppercase">
                            <h7>mô tả</h7>
                        </div>

                        <?php echo trim($ads->content) ?>

                    </div>

                    <div class="content-news-1 col-md-12 col-sm-12">
                        <div class="title-hd text-uppercase">
                            <h7>ảnh bài viết</h7>
                        </div>

                        <div class="demo">
                            <ul id="lightSlider">
                                <?php
                                $lightSlider_str = $ads->lightSlider != '' ? $ads->img . '#' . $ads->lightSlider : $ads->img;
                                $tags = explode('#', $lightSlider_str);
                                foreach ($tags as $k => $val) { ?>
    <!--                                <li style="width: 450px; height: 338px"-->
                                    <li style=""
                                        data-thumb="<?php echo public_url('images/ads/' . $val) ?>">
    <!--                                    <img style="width: 450px; height: 338px" alt="--><?//= $val ?><!--"-->
                                        <img style="" alt="<?= $val ?>"
                                             src="<?php echo public_url('images/ads/' . $val) ?>"/>
                                    </li>
                                <?php } ?>

                            </ul>
                        </div>

                    </div>

                </div>

            </div>


            <div class="row">
                            <div class="col-md-12  col-sm-12 col-xs-12 mt-2" style="box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);">
                                <div class="left-title">Nổi bật cùng chuyên mục</div>
                <?php foreach ($highlight as $key => $value) { ?>
                    <?php if ($key > 0) { ?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                <div class="item-news">
                                    <div class="img-news" style="background-image: url(<?php echo public_url('images/ads/' . $value->img) ?>)">
                                        <div class="content-news">
                                            <div>
                                                <strong style="color: #fff"><?php echo $value->title ?></strong>
                                            </div>
                                            <p style="color: #fff"><?php echo $value->intro ?></p>
                                            <a href="<?php echo base_url('tin-tuc/' . create_slug($value->title) . '-' . $value->id) ?>" class="btn btn-primary mt-5">Xem thêm</a>
                                        </div>
                                        <div class="title-news">
                                            <span style="font-size: 13px"><?php echo date('d/m/Y', strtotime($value->created_at)) ?></span><br>
                                            <strong><?php echo $value->title ?></strong>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } else { ?>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                <div class="item-news">
                                    <div class="img-news" style="background-image: url(<?php echo public_url('images/news/' . $value->img) ?>)">
                                        <div class="content-news">
                                            <div><strong><?php echo $value->title ?></strong></div>
                                            <p><?php echo $value->intro ?></p>
                                            <a href="<?php echo base_url('tin-tuc/' . create_slug($value->title) . '-' . $value->id) ?>" class="btn btn-primary mt-5">Xem thêm</a>
                                        </div>
                                        <div class="title-news">
                                            <span style="font-size: 13px"><?php echo date('d/m/Y', strtotime($value->created_at)) ?></span><br>
                                            <strong><?php echo $value->title ?></strong>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
            </div>

<!--            <div class="col-md-12  col-sm-12 col-xs-12 mt-2" style="box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);">-->
<!--                <div class="left-title">Nổi bật cùng chuyên mục</div>-->
<!--                --><?php //foreach ($highlight as $key => $value) {
//                    if ($ads->id != $value->id) {
//                        ?>
<!--                        <a href="--><?php //echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?><!--">-->
<!--                            <div class="mb-5" style="border: 1px solid #dedede;float: left">-->
<!--                                <div class="col-md-4 col-sm-4 col-xs-4">-->
<!--                                    <img src="--><?php //echo public_url('images/ads/' . $value->img) ?><!--">-->
<!--                                </div>-->
<!--                                <div class="col-md-8 col-sm-8 col-xs-8" style="padding: 5px">-->
<!--                                    <h5 class="title-news-1 text-info" style="color: red;text-transform: uppercase">-->
<!--                                        --><?php //echo $value->title ?><!--</h5>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    --><?php //}
//                } ?>
<!--            </div>-->
        </div>
    </div>
</section>


<style>

    #details-auto .box-info .block {
        width: 100%;
        /*width: 300px;*/
    }

    #details-auto .block {
        /* width: 360px !important; */
        float: left;
        margin-top: 0px !important;
        margin-bottom: 0px !important;
        padding-bottom: 0px !important;
    }

    .block {
        border-bottom: 1px solid #e5e5e5;
        width: 100%;
        display: inline-block;
        padding-bottom: 0px;
        margin-top: 2px;
    }

    #details-auto .col-left {
        float: left;
        width: 124px;
    }

    .block .col-left {
        float: left;
        width: 126px;
    }

    .col-left {
        float: left;
    }

    #details-auto .col-right {
        float: left;
        width: 176px;
    }

    .block .col-right {
        float: left;
        width: calc(100% - 200px);
    }

    .col-right {
        float: right;
    }

    .title-hd {
        width: 100%;
        /* height: 28px; */
        line-height: 28px;
        color: white;
        background: #15a1b1;
        /* padding-left: 25px; */
        padding: 1px;
        padding-left: 5px;
        margin-bottom: 8px;
    }

</style>


<script>
    $('#lightSlider').lightSlider({
        gallery: true,
        auto: true,
        item: 1,
        loop: true,
        slideMargin: 0,
        thumbItem: 9
    });


</script>

<style>
    .demo {
        /*width: 420px;*/
    }

    ul {
        list-style: none outside none;
        padding-left: 0;
        margin-bottom: 0;
    }

    li {
        display: block;
        /*float: left;*/
        margin-right: 6px;
        cursor: pointer;
    }

    img {
        display: block;
        height: auto;
        max-width: 100%;
    }
</style>

<style>
    body {font-family: Arial, Helvetica, sans-serif;}

    #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    #myImg:hover {opacity: 0.7;}

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
        margin: auto;
        display: block;
        /*width: 80%;*/
        width: 100%;
        /*max-width: 700px;*/
        max-width: 1170px;
    }

    /* Caption of Modal Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    /* Add Animation */
    .modal-content, #caption {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
        from {-webkit-transform:scale(0)}
        to {-webkit-transform:scale(1)}
    }

    @keyframes zoom {
        from {transform:scale(0)}
        to {transform:scale(1)}
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 100px ;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
        .modal-content {
            width: 100%;
        }
    }
</style>
