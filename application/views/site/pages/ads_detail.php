<section class="contact">
    <div class="container-fluid">
        <!--        <div class="title-section"><h2>Chi tiết bài rao</h2></div>-->
        <div class="col-md-8 col-sm-12 col-xs-12 mt-2" style="">
            <ol class="breadcrumb">
<!--                <li><a href="--><?php //echo base_url('rao-vat') ?><!--">Rao vặt</a></li>-->
                <li class="" style="color: red;text-transform: uppercase;"><?php echo $ads->title ?></li>
            </ol>
            <div class="item-news-1" style="padding: 10px">
                <!--                <span>--><?php //echo date('d/m/Y', strtotime($ads->created_at)) ?><!--</span>-->
                <!--                <h3 class="title-news-1 text-info">--><?php //echo $ads->title ?><!--</h3>-->
                <!--                <h4 class="text-danger">--><?php //echo $ads->title ?><!--</h4>-->
                <div class="col-md-4 col-sm-4">
                    <img src="<?php echo public_url('images/ads/' . $ads->img) ?>">
                </div>

                <div class="col-md-8 col-sm-8">

                    <div class="box-info" style="">
                        <div class="block">
                            <div class="col-left">Mã tin</div>
                            <div class="col-right"><b><?php
                                    if ($ads->code == 0) {
                                        echo generateRandomString(6);
                                    } else {
                                        echo $ads->code;
                                    } ?></b></div>
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

                    <div class="title-hd text-uppercase"><h7>mô tả</h7></div>

                    <?php echo trim($ads->content) ?>

                </div>

                <?php if($ads->lightSlider != '') { ?>




                <div class="content-news-1 col-md-12 col-sm-12" style="margin-top: -127px; ">
                    <div class="title-hd text-uppercase"><h7>ảnh bài viết</h7></div>
                    <?php if ($ads->lightSlider != NULL) { ?>

                        <div class="demo">
                            <ul id="lightSlider">
                                <?php
                                $tags = explode('-', $ads->lightSlider);
                                foreach ($tags as $k => $val) { ?>
                                    <li data-thumb="<?php echo public_url('images/ads/' . $val) ?>">
                                        <img src="<?php echo public_url('images/ads/' . $val) ?>"/>
                                    </li>
                                <?php } ?>

                            </ul>
                        </div>

                    <?php } ?>

                </div>

                <?php } ?>

            </div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12 mt-2" style="box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);">
            <div class="left-title">Nổi bật cùng chuyên mục</div>
            <?php foreach ($highlight as $key => $value) {
                if ($ads->id != $value->id) {
                    ?>
                    <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                        <div class="mb-5" style="border: 1px solid #dedede;float: left">
                            <div class="col-md-4 col-sm-4 col-xs-4">
                                <img src="<?php echo public_url('images/ads/' . $value->img) ?>">
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-8" style="padding: 5px">
                                <h5 class="title-news-1 text-info" style="color: red;text-transform: uppercase">
                                    <?php echo $value->title ?></h5>
                            </div>
                        </div>
                    </a>
                <?php }
            } ?>
        </div>
    </div>
</section>


<style>

    #details-auto .box-info .block {
        width: 100%;
        width: 300px;
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
        width:420px;
    }
    ul {
        list-style: none outside none;
        padding-left: 0;
        margin-bottom:0;
    }
    li {
        display: block;
        /*float: left;*/
        margin-right: 6px;
        cursor:pointer;
    }
    img {
        display: block;
        height: auto;
        max-width: 100%;
    }
</style>
