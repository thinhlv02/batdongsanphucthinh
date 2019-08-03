<section class="news pt-0">
    <div class="container">

        <div class="col-sm-12 col-md-12">
            <!--            <div class="title-section"><h2>Tin rao nổi bật</h2></div>-->
            <!--            <div class="sub-title-section">Khám phá tại đây</div>-->
            <div class="row" style="border: 1px solid #dddddd">
                <div class="box-module">
                    <div class="bg-modul"><i class="glyphicon glyphicon-tag"></i> Bất động sản nổi bật</div>
                </div>

<!--                --><?php //pre_arr($lstProvince) ?>

                <?php foreach ($ads_center as $key => $value) { ?>

                    <div class="col-md-2 col-sm-6 col-xs-12 item _hot" onclick="updateView('<?php echo $value->id; ?>');">
                        <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                            <img style="width: 100%;height: 150px"
                                 src="<?php echo public_url('images/ads/' . $value->img) ?>"
                                 alt="<?php echo $value->title ?>"></a>
                        <div class="icon_viphot">
                            <?php if ($value->icon_new == 1) { ?>
                                <img src="<?php echo public_url('images/icon_new.gif') ?>"
                                     alt="<?php echo $value->title ?>">

                            <?php } ?>

                            <?php if ($value->icon_vip == 1) { ?>
                                <img src="<?php echo public_url('images/icon_vip.gif') ?>"
                                     alt="<?php echo $value->title ?>">

                            <?php } ?>

                            <?php if ($value->icon_hot == 1) { ?>

                                <img src="<?php echo public_url('images/icon_hot.gif') ?>"
                                     alt="<?php echo $value->title ?>">
                            <?php } ?>

                        </div>

                        <div class="code_row">PT-<?php echo $value->id ?></div>

                        <h3 style="height: 44px;font-size: 13px; ">
                            <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>"><?php echo $value->title ?></a>
                        </h3>

                        <p><?php echo $value->intro ?></p>
                        <div class="row area">
                            <div class="col-xs-12  larea">DTMB: <?php echo $value->acreage ?> m2</div>
                            <div style="clear: both"></div>
                            <div class="col-xs-12  rarea">DTSD: <?php echo $value->acreage ?> m2</div>
                        </div>
                        <div class="price">
                            <div class="col-xs-5 lprice">
<!--                                <i class="fa fa-map-marker"></i>-->
                            <?php echo isset($lstProvince[$value->province_id]) ? $lstProvince[$value->province_id]->_name : 'KXĐ'; ?>
                            </div>
                            <div class="col-xs-7 rprice">
                                <?php echo $value->price ?>
                            </div>
                        </div>

                    </div>

                <?php } ?>

                <?php foreach ($ads_center as $key => $value) { ?>

                    <div class="col-md-2 col-sm-6 col-xs-12 card12 d-none"
                         onclick="updateView('<?php echo $value->id; ?>');">
                        <div class="card-body12 mb-2">
                            <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                <div class="item-news">
                                    <div class="img-news"
                                         style="background-image: url(<?php echo public_url('images/ads/' . $value->img) ?>)">
                                        <div class="content-news">
                                            <div>
                                                <h6 style="color: red" class="shadow20"><?php echo $value->title ?></h6>
                                            </div>
                                            <!--                                            <p style="color: #fff">-->
                                            <?php //echo $value->intro ?><!--</p>-->
                                            <!--                                            <a href="-->
                                            <?php //echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?><!--" class="btn btn-primary mt-5">Xem thêm</a>-->
                                        </div>
                                        <div class="title-news shadow20">
                                            <!--                                            <span style="font-size: 13px">-->
                                            <?php //echo date('d/m/Y', strtotime($value->created_at)) ?><!--</span><br>-->
                                            <p class="mb-0 "><?php echo substr($value->title, 0, 60) ?></p>
                                        </div>

                                    </div>
                                </div>
                            </a>

                            <div class="icon_viphot">
                                <?php if ($value->icon_new == 1) { ?>
                                    <img src="<?php echo public_url('images/icon_new.gif') ?>"
                                         alt="BÁN NHÀ MẶT ĐƯỜNG SỐ 101 HOÀNG NGỌC PHÁCH(THUỘC DỰ ÁN XD HÀ NỘI), LÊ CHÂN, HẢI PHÒNG">

                                <?php } ?>

                                <?php if ($value->icon_vip == 1) { ?>
                                    <img src="<?php echo public_url('images/icon_vip.gif') ?>"
                                         alt="BÁN NHÀ MẶT ĐƯỜNG SỐ 101 HOÀNG NGỌC PHÁCH(THUỘC DỰ ÁN XD HÀ NỘI), LÊ CHÂN, HẢI PHÒNG">

                                <?php } ?>

                                <?php if ($value->icon_hot == 1) { ?>

                                    <img src="<?php echo public_url('images/icon_hot.gif') ?>"
                                         alt="BÁN NHÀ MẶT ĐƯỜNG SỐ 101 HOÀNG NGỌC PHÁCH(THUỘC DỰ ÁN XD HÀ NỘI), LÊ CHÂN, HẢI PHÒNG">
                                <?php } ?>
                            </div>


                        </div>
                    </div>

                <?php } ?>
            </div>
            <!--            <div style="text-align: center">-->
            <!--                <a href="-->
            <?php //echo base_url('rao-vat.html') ?><!--" class="btn btn-primary" style="margin-top: 2px">Xem thêm</a>-->
            <!--            </div>-->
        </div>
    </div>
</section>

<style>
    .code_row {
        background: rgba(255, 255, 255, .8);
        position: absolute;
        top: 5px;
        right: 5px;
        font-size: 11px;
        line-height: 18px;
        padding: 0 5px;
        font-weight: 600;
    }

    /*.body_hotLand_home .item .area {*/
    .area {
        font-weight: 600;
        font-size: 12px;
        margin: 10px 0;
    }

    .price {
        font-weight: 600;
    }

    .body_hotLand_home .item .price, .lprice {
        text-align: center;
        background: #eeeeee;
        line-height: 30px;
    }

    .body_hotLand_home .item .price, .rprice {
        text-align: center;
        background: #e40b00;
        line-height: 30px;
        color: #fff;
    }

    .body_hotLand_home, .item, ._hot {
        border-color: #f00;
    }

    .body_hotLand_home, .item, ._hot {
        border: 2px solid #f00;
        background: #fffce6;
    }

    .body_hotLand_home, .item {
        /*width: 19%;*/
        /*margin-right: 1.25%;*/
        margin-bottom: 20px;
        position: relative;
        border: 1px solid #055699;
        padding: 5px;
    }

    .body_hotLand_home, .item h3 {
        height: 40px;
        overflow: hidden;
        margin: 10px 0;
    }

    .body_hotLand_home, .item > p {
        line-height: 18px;
        height: 72px;
        overflow: hidden;
    }

    .body_hotLand_home, .item h3 a {
        font-size: 13px;
        font-weight: 600;
        display: inline-block;
        line-height: 20px;
        color: #055699;
    }
</style>