<section class="news pt-0">


    <div class="container">
        <div class="col-sm-12 col-md-12">
            <div class="row two_cols">


<!--                <div class="col-xs-9 left" style="border: 1px solid #dddddd">-->
                <div class="col-xs-9 left12 " style="">
<!--                    <div class="box-module">-->
<!--                        <div class="bg-modul"><i class="glyphicon glyphicon-tag"></i> Tin giá hấp dẫn</div>-->
<!--                    </div>-->
                    <!--Begin two_cols-->
                    <div class="left_box top2_box">
                        <p class="title_box"><strong>TIN GIÁ HẤP DẪN</strong></p>

                        <div class="row12 body_top2_box">

                            <?php foreach ($ads_center as $key => $value) { ?>
                            <div class="col-xs-6 top2 top2_up">
                                <div class="row12 _vip_hot">
                                    <div class="col-xs-5 ltop2">
                                        <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>"><img
                                                    src="<?php echo public_url('images/ads/' . $value->img) ?>"
                                                    alt="<?php echo $value->title ?>"></a>
                                        <div class="code_row">PT-<?php echo $value->id.substr($value->code,0,3) ?></div>
                                    </div>

                                    <div class="col-xs-7 rtop2">
                                        <h3>
                                            <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                                <?php echo $value->title ?> </a>
                                            <span></span>
                                        </h3>
                                        <div><?php echo $value->intro ?>
                                        </div>
                                        <p>
                                            <strong>DTMB:</strong> <?php echo $value->acreage ?> m2 - <strong>Giá:</strong>
                                            <span>
                                           <?php echo $value->price ?> VND												</span>
                                        </p>
                                    </div>
                                </div>

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
                            </div>

                            <?php } ?>
                            <div class="col-xs-6 top2 top2_up d-none">
                                <div class="row12 _vip_hot">
                                    <div class="col-xs-5 ltop2">
                                        <a href="/ban-nha-so-212-trung-hanh-hai-an-hai-phong-bds58634.htm"><img
                                                    src="http://nhadathaiphong.vn/images/attachment/thumb/43651.jpg"
                                                    alt="Bán nhà số 212 Trung Hành, Hải An, Hải Phòng"></a>
                                        <div class="code_row">HP-58634</div>
                                    </div>

                                    <div class="col-xs-7 rtop2">
                                        <h3>
                                            <a href="/ban-nha-so-212-trung-hanh-hai-an-hai-phong-bds58634.htm">Bán
                                                nhà
                                                số 212 Trung Hành, Hải An, Hải Phòng </a>
                                            <span></span>
                                        </h3>
                                        <div>Nhà xây 4 tầng kiên cố, nằm sau nhà mặt đường, ngõ rộng 3m, dân cư văn
                                            minh, gần trường, chợ, bệnh viện, hướng Đông Nam - Tây Bắc, sổ đỏ chính
                                            chủ
                                        </div>
                                        <p>
                                            <strong>DTMB:</strong> 40 m2 - <strong>Giá:</strong>
                                            <span>
                                            1.7 tỷ VND												</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="icon_viphot">
                                    <img src="<?php echo public_url('images/icon_new.gif') ?>"
                                         alt="Bán nhà số 212 Trung Hành, Hải An, Hải Phòng">
                                </div>
                            </div>

                            <div class="col-xs-6 top2 top2_up d-none">
                                <div class="row12 _vip_hot">
                                    <div class="col-xs-5 ltop2">
                                        <a href="/ban-nha-so-212-trung-hanh-hai-an-hai-phong-bds58634.htm"><img
                                                    src="http://nhadathaiphong.vn/images/attachment/thumb/43651.jpg"
                                                    alt="Bán nhà số 212 Trung Hành, Hải An, Hải Phòng"></a>
                                        <div class="code_row">HP-58634</div>
                                    </div>

                                    <div class="col-xs-7 rtop2">
                                        <h3>
                                            <a href="/ban-nha-so-212-trung-hanh-hai-an-hai-phong-bds58634.htm">Bán
                                                nhà
                                                số 212 Trung Hành, Hải An, Hải Phòng </a>
                                            <span></span>
                                        </h3>
                                        <div>Nhà xây 4 tầng kiên cố, nằm sau nhà mặt đường, ngõ rộng 3m, dân cư văn
                                            minh, gần trường, chợ, bệnh viện, hướng Đông Nam - Tây Bắc, sổ đỏ chính
                                            chủ
                                        </div>
                                        <p>
                                            <strong>DTMB:</strong> 40 m2 - <strong>Giá:</strong>
                                            <span>
                                            1.7 tỷ VND												</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="icon_viphot">
                                    <img src="<?php echo public_url('images/icon_new.gif') ?>"
                                         alt="Bán nhà số 212 Trung Hành, Hải An, Hải Phòng">
                                </div>
                            </div>

                            <div class="col-xs-6 top2 top2_up d-none">
                                <div class="row12 _vip_hot">
                                    <div class="col-xs-5 ltop2">
                                        <a href="/ban-nha-so-212-trung-hanh-hai-an-hai-phong-bds58634.htm"><img
                                                    src="http://nhadathaiphong.vn/images/attachment/thumb/43651.jpg"
                                                    alt="Bán nhà số 212 Trung Hành, Hải An, Hải Phòng"></a>
                                        <div class="code_row">HP-58634</div>
                                    </div>

                                    <div class="col-xs-7 rtop2">
                                        <h3>
                                            <a href="/ban-nha-so-212-trung-hanh-hai-an-hai-phong-bds58634.htm">Bán
                                                nhà
                                                số 212 Trung Hành, Hải An, Hải Phòng </a>
                                            <span></span>
                                        </h3>
                                        <div>Nhà xây 4 tầng kiên cố, nằm sau nhà mặt đường, ngõ rộng 3m, dân cư văn
                                            minh, gần trường, chợ, bệnh viện, hướng Đông Nam - Tây Bắc, sổ đỏ chính
                                            chủ
                                        </div>
                                        <p>
                                            <strong>DTMB:</strong> 40 m2 - <strong>Giá:</strong>
                                            <span>
                                            1.7 tỷ VND												</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="icon_viphot">
                                    <img src="<?php echo public_url('images/icon_new.gif') ?>"
                                         alt="Bán nhà số 212 Trung Hành, Hải An, Hải Phòng">
                                </div>
                            </div>

                        </div>

                    </div>
                    <!--End two_cols-->
                </div>


                <div class="col-xs-3 right">
                    <!--Begin two_cols-->
                    <div class="right_box vip_box">
                        <p class="title_box"><a href="/tin-vip.htm"><strong>TIN VIP</strong></a></p>
                        <div>
                            <div class="bx-wrapper" style="max-width: 100%; margin: 0px auto;">
<!--                                <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 2520px;">-->
<!--                                <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative;">-->
                                    <ul class="vip_slider"
                                        style="width: auto; position: relative; transition-duration: 0s; transform: translate3d(0px, -2520px, 0px);">

                                        <?php
//                                        var_dump($layer_right);
                                        foreach ($layer_right as $key => $value) { ?>

                                        <li style="float: none; list-style: none; position: relative; width: 298px;"
                                            class="bx-clone">
                                            <dl class="">
                                                <dt>
                                                    <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>"><img
                                                                src="<?php echo public_url('images/ads/' . $value->img) ?>"
                                                                alt="<?php echo $value->title ?>"></a>
                                                    <div class="icon_viphot">
                                                        <img src="<?php echo public_url('images/icon_new.gif') ?>"
                                                             alt="<?php echo $value->title ?>">
                                                    </div>
                                                </dt>
                                                <dd>
                                                    <h3>
                                                        <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                                            <?php echo $value->title ?></a></h3>
                                                    <p class="mt-0 mb-0"><strong>Diện tích:</strong> <?php echo $value->acreage ?> m2</p>
                                                    <p class="mt-0 mb-0"><strong>Giá:</strong> <span><?php echo $value->price ?> tỷ</span></p>
                                                    <p class="mt-0 mb-0"><strong>Hướng:</strong> KXD</p>
                                                </dd>
                                            </dl>
                                        </li>

                                        <?php } ?>

                                        <li class="d-none" style="float: none; list-style: none; position: relative; width: 298px;"
                                            class="bx-clone">
                                            <dl class="">
                                                <dt>
                                                    <a href="/ban-nha-so-212-trung-hanh-hai-an-hai-phong-bds58634.htm"><img
                                                                src="http://nhadathaiphong.vn/images/attachment/thumb/43651.jpg"
                                                                alt="Bán nhà số 212 Trung Hành, Hải An, Hải Phòng"></a>
                                                    <div class="icon_viphot">
                                                        <img src="<?php echo public_url('images/icon_new.gif') ?>"
                                                             alt="Bán nhà số 212 Trung Hành, Hải An, Hải Phòng"></div>
                                                </dt>
                                                <dd>
                                                    <h3>
                                                        <a href="/ban-nha-so-212-trung-hanh-hai-an-hai-phong-bds58634.htm">Bán
                                                            nhà số 212 Trung Hành, Hải An, Hải Phòng</a></h3>
                                                    <p><strong>Diện tích:</strong> 40 m2</p>
                                                    <p><strong>Giá:</strong> <span>1.7 tỷ</span></p>
                                                    <p><strong>Hướng:</strong> Đông Nam</p>
                                                </dd>
                                            </dl>
                                        </li>
                                        <li class="d-none" style="float: none; list-style: none; position: relative; width: 298px;"
                                            class="bx-clone">
                                            <dl class=" _vip">
                                                <dt>
                                                    <a href="/ban-nha-so-21217-le-loi-ngo-quyen-hai-phong--bds55535.htm"><img
                                                                src="http://nhadathaiphong.vn/images/attachment/thumb/88559.jpg"
                                                                alt="Bán nhà số 21/217 Lê Lợi, Ngô Quyền, Hai Phòng "></a>
                                                    <div class="icon_viphot">
                                                        <img src="<?php echo public_url('images/icon_new.gif') ?>"
                                                             alt="Bán nhà số 21/217 Lê Lợi, Ngô Quyền, Hai Phòng ">
                                                    </div>
                                                </dt>
                                                <dd>
                                                    <h3>
                                                        <a href="/ban-nha-so-21217-le-loi-ngo-quyen-hai-phong--bds55535.htm">Bán
                                                            nhà số 21/217 Lê Lợi, Ngô Quyền, Hai Phòng </a></h3>
                                                    <p><strong>Diện tích:</strong> 80 m2</p>
                                                    <p><strong>Giá:</strong> <span>Thỏa thuận</span></p>
                                                    <p><strong>Hướng:</strong> Liên hệ</p>
                                                </dd>
                                            </dl>
                                        </li>
                                        <li class="d-none" style="float: none; list-style: none; position: relative; width: 298px;"
                                            class="bx-clone">
                                            <dl class="">
                                                <dt>
                                                    <a href="/ban-nha-so-6688-thien-loi-le-chan-hai-phong-bds29782.htm"><img
                                                                src="http://nhadathaiphong.vn/images/attachment/thumb/99120.jpg"
                                                                alt="Bán nhà số 6/688 Thiên Lôi, Lê Chân, Hải Phòng"></a>
                                                    <div class="icon_viphot">
                                                        <img src="<?php echo public_url('images/icon_new.gif') ?>"
                                                             alt="Bán nhà số 6/688 Thiên Lôi, Lê Chân, Hải Phòng"></div>
                                                </dt>
                                                <dd>
                                                    <h3>
                                                        <a href="/ban-nha-so-6688-thien-loi-le-chan-hai-phong-bds29782.htm">Bán
                                                            nhà số 6/688 Thiên Lôi, Lê Chân, Hải Phòng</a></h3>
                                                    <p><strong>Diện tích:</strong> 56 m2</p>
                                                    <p><strong>Giá:</strong> <span>1.82 tỷ</span></p>
                                                    <p><strong>Hướng:</strong> Đông Bắc</p>
                                                </dd>
                                            </dl>
                                        </li>

                                    </ul>
<!--                                </div>-->
<!--                                <div class="bx-controls bx-has-controls-direction">-->
<!--                                    <div class="bx-controls-direction"><a class="bx-prev" href="">Prev</a><a-->
<!--                                                class="bx-next"-->
<!--                                                href="">Next</a>-->
<!--                                    </div>-->
<!--                                </div>-->
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!--Begin two_cols-->

                </div>
            </div>

        </div>
    </div>


</section>

<style>
    .title_box strong, .title_boxM strong {
        border-bottom: 2px solid #e40b00;
        display: inline-block;
        font-size: 20px;
        line-height: 32px;
        position: relative;
        margin-bottom: -1px;
        font-weight: 600;
        text-transform: uppercase;
    }

    .body_top2_box ._vip_hot, .body_top2_box ._vip {
        background: -webkit-linear-gradient(#f6e97f, #fff);
        background: -o-linear-gradient(#f6e97f, #fff);
        background: -moz-linear-gradient(#f6e97f, #fff);
        /* background: linear-gradient(#f6e97f, #fff); */
    }

    .body_top2_box .top2 {
        border-bottom: 2px dotted #ddd;
        padding-bottom: 20px;
        margin-bottom: 20px;
        position: relative;
    }

    .body_top2_box .top2 > div._vip_hot {
        border: 2px solid #f00;
        height: 136px;
    }

    .body_top2_box .top2 .rtop2 p {
        font-size: 11.5px;
        font-weight: 600;
    }

    .body_top2_box .top2 .rtop2 p strong {
        font-weight: normal;
    }

    .body_top2_box .top2 .rtop2 p span {
        color: #e40b00;
        display: -webkit-inline-box;
        font-size: 12px;
    }

    .body_top2_box .top2 .rtop2 h3 span {
        width: 60px;
        /*display: inline-block;*/
        border-bottom: 3px solid #d3d3d3;
        /*margin-top: 5px;*/
    }

    .body_top2_box .top2 .ltop2 a {
        height: 130px;
        align-items: center;
        justify-content: center;
        background: #ddd;
        display: flex;
        display: -webkit-flex;
    }

    .body_top2_box .top2 .ltop2 a img {
        width: 100%;
        height: 100%;
    }

    .body_top2_box .top2 .rtop2 h3 a {
        color: #04578b;
        font-size: 13px;
        font-weight: 600;
        line-height: 18px;
        display: block;
        max-height: 36px;
        overflow: hidden;
    }

    .body_top2_box .top2 .rtop2 h3 {
        margin: 0 !important;
    }

    /*//colum3*/
    .vip_box>div {
        background: #f5f5f5;
        border: 1px solid #e7e7e7;
    }

    .vip_box>div dl {
        padding: 14px;
        border-bottom: 2px dotted #ccc;
    }

    .vip_box>div dl {
        padding: 14px;
        border-bottom: 2px dotted #ccc;
    }

    .vip_box>div dl {
        padding: 14px;
        border-bottom: 2px dotted #ccc;
    }

    .vip_box>div dl {
        padding: 14px;
        border-bottom: 2px dotted #ccc;
    }

    .vip_box>div dl dt {
        float: left;
        position: relative;
    }

    .vip_box>div dl dt a {
        display: block;
        width: 80px;
        height: 65px;
        margin-top: 4px;
    }

    .vip_box>div dl dd h3 a {
        display: inline-block;
        line-height: 18px;
        font-size: 13px;
        font-weight: 600;
        color: #04538b;
    }
    .vip_box>div dl dd h3 {
        margin: 0px !important;
    }

    .vip_box>div dl dd {
        margin-left: 90px;
    }


    .vip_box>div dl dt div {
        margin-top: 4px;
        text-align: center;
    }
    /*//colum3*/

</style>

<script type="text/javascript">
    $(document).ready(function() {

        var slider= $('.vip_slider').bxSlider({
            mode: 'vertical',
            auto: true,
            minSlides: 30,
            maxSlides: 30,
            moveSlides: 1,
            pager: false
        });

        $('.bx-next').click(function(){
            slider.goToNextSlide();
            return false;
        });

        $('.bx-prev').click(function(){
            slider.goToPrevSlide();
            return false;
        });

    });
</script>