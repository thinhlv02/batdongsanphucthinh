<section class="contact">
    <div class="container">
        <!--        <div class="title-section"><h2>Kết quả tìm kiếm</h2></div>-->

        <div class="col-md-3 col-sm-12 col-xs-12 d-none">
            <div class="left-title">Nổi bật</div>
            <?php foreach ($highlight as $key => $value) { ?>
                <a href="<?php echo base_url('tin-tuc/' . create_slug($value->title) . '-' . $value->id) ?>">
                    <div class="item-news-1">
                        <div class="img-news-1">
                            <img src="<?php echo public_url('images/news/' . $value->img) ?>">
                        </div>
                        <div style="padding: 10px">
                            <h4 class="title-news-1"><?php echo $value->title ?></h4>
                            <p class="content-news-1"><?php echo $value->intro ?></p>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>

        <div class="col-md-9 col-sm-12 col-xs-12 d-none">
            <div class="left-title">Tin mới</div>
            <?php foreach ($news as $key => $value) { ?>
                <?php if ($key > 0) { ?>
                    <a href="<?php echo base_url('tin-tuc/' . create_slug($value->title) . '-' . $value->id) ?>">
                        <div class="item-news-1">
                            <div class="row">
                                <div class="img-news-1 col-md-6 col-sm-6 col-xs-12">
                                    <img src="<?php echo public_url('images/news/' . $value->img) ?>">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div style="margin: 10px">
                                        <h2 class="title-news-1"><?php echo $value->title ?></h2>
                                        <p class="content-news-1"><?php echo $value->intro ?></p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </a>
                <?php } else { ?>
                    <a href="<?php echo base_url('tin-tuc/' . create_slug($value->title) . '-' . $value->id) ?>">
                        <div class="item-news-1">
                            <div class="img-news-1">
                                <img src="<?php echo public_url('images/news/' . $value->img) ?>">
                            </div>
                            <div style="padding: 10px">
                                <h4 class="title-news-1"><?php echo $value->title ?></h4>
                                <p class="content-news-1"><?php echo $value->intro ?></p>
                            </div>
                        </div>
                    </a>
                <?php } ?>
            <?php } ?>
            <div class="navigation" style="margin-top: 20px">
                <?php echo $paginator; ?>
            </div>
        </div>

        <?php $this->load->view('site/home/form_search') ?>

        <div class="col-xs-10  left catland_page">

            <!--Begin land_box-->
            <div class="_box">
                <p class="title_box"><strong>Tìm kiếm nhà đất</strong></p>
<!--                --><?php //echo $code; ?>
                <div class="listland_box body_hotLand_home row12">

                    <?php foreach ($lstSearch as $key => $value) { ?>

                    <div class="col-xs-4 item">
                    <div class="card">
                    <div class="card-body border-primary">
                        <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>"><img
                                    src="<?php echo public_url('images/ads/' . $value->img) ?>"
                                    alt="<?php echo $value->title ?>"></a>
                        <div class="icon_viphot">
                        </div>

                        <div class="code_row">PT-<?php echo $value->id.substr($value->code,0,3) ?></div>
                        <h3>
                            <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                <?php echo $value->title ?></a></h3>

                        <p><?php echo $value->intro ?></p>

                        <div class="row area">
                            <div class="col-xs-6 larea">DTMB: 43 m2</div>
                            <div class="col-xs-6 rarea">DTSD: 43 m2</div>
                        </div>

                        <div class="row12 price">
                            <div class="col-xs-5 lprice"><i class="fa fa-map-marker"></i> <?php echo $value->province_name ?></div>
                            <div class="col-xs-7 rprice">Giá:
                                <?php echo $value->price ?> VND
                            </div>
                        </div>

                    </div>
                    </div>
                    </div>

                    <?php } ?>


                    <div class="col-xs-4 item d-none">
                        <a href="/ban-dat-khu-ben-lang-hai-an-bds58379.htm"><img
                                    src="<?php echo public_url('images/noimage.jpg') ?>"
                                    alt="BÁN ĐẤT KHU BẾN LÁNG _HẢI AN"></a>
                        <div class="icon_viphot">
                        </div>

                        <div class="code_row">HP-58379</div>
                        <h3>
                            <a href="/ban-dat-khu-ben-lang-hai-an-bds58379.htm">BÁN ĐẤT KHU BẾN LÁNG _HẢI AN</a></h3>

                        <p>Bán nhà khu Bến Láng dtmb 81m2(4.5x18) x 5 tầng hướng ĐTT giá 4.5 tỷ Nhà xây độc lập, thiết
                            kế khung cột kiên cố, kiến trúc hiện đại, nội thất sang tr</p>

                        <div class="row area">
                            <div class="col-xs-6 larea">DTMB: 81 m2</div>
                            <div class="col-xs-6 rarea">DTSD: 81 m2</div>
                        </div>

                        <div class="row12 price">
                            <div class="col-xs-5 lprice"><i class="fa fa-map-marker"></i> Hải An</div>
                            <div class="col-xs-7 rprice">Giá:
                                4.5 tỷ VND
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-4 item d-none">
                        <a href="/phan-phoi-du-an-chung-cu-cao-cap-phong-cach-nhat-ban---the-minato-residence-bds56630.htm"><img
                                    src="http://nhadathaiphong.vn/images/attachment/thumb/1422Qu%E1%BA%A3ng%20tr%C6%B0%E1%BB%9Dng%20hoa%20anh%20%C4%91%C3%A0o.jpg"
                                    alt="Phân phối dự án chung cư cao cấp phong cách Nhật Bản - The Minato Residence"></a>
                        <div class="icon_viphot">
                        </div>

                        <div class="code_row">HP-56630</div>
                        <h3>
                            <a href="/phan-phoi-du-an-chung-cu-cao-cap-phong-cach-nhat-ban---the-minato-residence-bds56630.htm">Phân
                                phối dự án chung cư cao cấp phong cách Nhật Bản - The Minato Residence</a></h3>

                        <p>Phân phối dự án chung cư cao cấp phong cách Nhật Bản - The Minato Residence</p>

                        <div class="row area">
                            <div class="col-xs-6 larea">DTMB: 47 m2</div>
                            <div class="col-xs-6 rarea">DTSD: 47 m2</div>
                        </div>

                        <div class="row12 price">
                            <div class="col-xs-5 lprice"><i class="fa fa-map-marker"></i> Lê Chân</div>
                            <div class="col-xs-7 rprice">Giá:
                                1.89 tỷ VND
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-4 item _vip d-none">
                        <a href="/ban-can-ho-so-11-tang-12-toa-nha-shp-plaza-so-12-lach-tray-ngo-quyen-hai-phong-bds55761.htm"><img
                                    src="http://nhadathaiphong.vn/images/attachment/thumb/36095.jpg"
                                    alt="Bán căn hộ số 11 tầng 12 tòa nhà SHP Plaza, số 12 Lạch Tray, Ngô Quyền, Hải Phòng"></a>
                        <div class="icon_viphot">
                            <img src="<?php echo public_url('images/icon_vip.gif') ?>"
                                 alt="Bán căn hộ số 11 tầng 12 tòa nhà SHP Plaza, số 12 Lạch Tray, Ngô Quyền, Hải Phòng">
                        </div>

                        <div class="code_row">HP-55761</div>
                        <h3>
                            <a href="/ban-can-ho-so-11-tang-12-toa-nha-shp-plaza-so-12-lach-tray-ngo-quyen-hai-phong-bds55761.htm">Bán
                                căn hộ số 11 tầng 12 tòa nhà SHP Plaza, số 12 Lạch Tray, Ngô Quyền, Hải Phòng</a></h3>

                        <p>Căn hộ cao cấp rộng 69.1m2, nằm trên tòa nhà SHP Plaza, vị trí đẹp, trung tâm thành phố, gần
                            trường, chợ, bệnh viện, siêu thị, bảo vệ 24/24</p>

                        <div class="row area">
                            <div class="col-xs-6 larea">DTMB: 69.1 m2</div>
                            <div class="col-xs-6 rarea">DTSD: 69.1 m2</div>
                        </div>

                        <div class="row12 price">
                            <div class="col-xs-5 lprice"><i class="fa fa-map-marker"></i> Ngô Quyền</div>
                            <div class="col-xs-7 rprice">Giá:
                                2.65 tỷ VND
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-4 item d-none">
                        <a href="/vinhomes-marina---khu-do-thi-sinh-thai-dang-song-tai-hai-phong-bds47046.htm"><img
                                    src="<?php echo public_url('images/noimage.jpg') ?>"
                                    alt="VINHOMES MARINA - KHU ĐÔ THỊ SINH THÁI ĐÁNG SỐNG TẠI HẢI PHÒNG"></a>
                        <div class="icon_viphot">
                        </div>

                        <div class="code_row">HP-47046</div>
                        <h3>
                            <a href="/vinhomes-marina---khu-do-thi-sinh-thai-dang-song-tai-hai-phong-bds47046.htm">VINHOMES
                                MARINA - KHU ĐÔ THỊ SINH THÁI ĐÁNG SỐNG TẠI HẢI PHÒNG</a></h3>

                        <p>Dự án đẹp nhất Hải Phòng nổi bât với hồ điều hòa rộng7,2 ha, kiến trúc Hy lạp phong cách bậc
                            nhất. </p>

                        <div class="row area">
                            <div class="col-xs-6 larea">DTMB: 75 m2</div>
                            <div class="col-xs-6 rarea">DTSD: 264 m2</div>
                        </div>

                        <div class="row12 price">
                            <div class="col-xs-5 lprice"><i class="fa fa-map-marker"></i> Lê Chân</div>
                            <div class="col-xs-7 rprice">Giá:
                                4.3 tỷ VND
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-4 item d-none">
                        <a href="/ban-hoac-cho-thue-can-ho-cao-cap-tang-12-shp-plaza-so-12-lach-tray-ngo-quyen-hai-phong--bds46764.htm"><img
                                    src="http://nhadathaiphong.vn/images/attachment/thumb/8964625641527440_931526067034477_4907247581630824448_n.jpg"
                                    alt="BÁN HOẶC CHO THUÊ CĂN HỘ CAO CẤP TẦNG 12 SHP PLAZA SỐ 12 LẠCH TRAY, NGÔ QUYỀN, HẢI PHÒNG "></a>
                        <div class="icon_viphot">
                        </div>

                        <div class="code_row">HP-46764</div>
                        <h3>
                            <a href="/ban-hoac-cho-thue-can-ho-cao-cap-tang-12-shp-plaza-so-12-lach-tray-ngo-quyen-hai-phong--bds46764.htm">BÁN
                                HOẶC CHO THUÊ CĂN HỘ CAO CẤP TẦNG 12 SHP PLAZA SỐ 12 LẠCH TRAY, NGÔ QUYỀN, HẢI
                                PHÒNG </a></h3>

                        <p>Căn hộ có view rất đẹp 1 mặt hướng về sân vận động 1 mặt hướng về nhà hát lớn, giấy tờ đầy đủ
                            chính chủ</p>

                        <div class="row area">
                            <div class="col-xs-6 larea">DTMB: 116 m2</div>
                            <div class="col-xs-6 rarea">DTSD: 116 m2</div>
                        </div>

                        <div class="row12 price">
                            <div class="col-xs-5 lprice"><i class="fa fa-map-marker"></i> Ngô Quyền</div>
                            <div class="col-xs-7 rprice">Giá:
                                3.85 tỷ VND
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-4 item d-none">
                        <a href="/ban-nha-4-tang-doc-lap-90-m2ngo-275-tran-nguyen-han-le-chan-hai-phong-bds41658.htm"><img
                                    src="http://nhadathaiphong.vn/images/attachment/thumb/67Zalo_636566102642270234.jpg"
                                    alt="Bán nhà 4 tầng độc lập 90 m2ngõ 275 Trần Nguyên Hãn Lê Chân, Hải Phòng."></a>
                        <div class="icon_viphot">
                        </div>

                        <div class="code_row">HP-41658</div>
                        <h3>
                            <a href="/ban-nha-4-tang-doc-lap-90-m2ngo-275-tran-nguyen-han-le-chan-hai-phong-bds41658.htm">Bán
                                nhà 4 tầng độc lập 90 m2ngõ 275 Trần Nguyên Hãn Lê Chân, Hải Phòng.</a></h3>

                        <p>Nhà 4 tầng 2 mặt tiền xây độc lập nằm trong ngõ 275 Trần Nguyên Hãn, vị trí đắc địa xây hiệm
                            đại, kết cấu tốt </p>

                        <div class="row area">
                            <div class="col-xs-6 larea">DTMB: 90 m2</div>
                            <div class="col-xs-6 rarea">DTSD: 350 m2</div>
                        </div>

                        <div class="row12 price">
                            <div class="col-xs-5 lprice"><i class="fa fa-map-marker"></i> Lê Chân</div>
                            <div class="col-xs-7 rprice">Giá:
                                5.1 tỷ VND
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-4 item d-none">
                        <a href="/ban-can-ho-du-an-vincity-phan-khuc-bat-dong-san-dai-chung-tai-cac-thanh-pho-lon-ha-noi-ho-chi-minh-hai-phong-bds33817.htm"><img
                                    src="http://nhadathaiphong.vn/images/attachment/thumb/377Vincity-gia-lam-tong-quan-01.jpg"
                                    alt="Bán căn hộ dự án Vincity phân khúc bất động sản đại chúng tại các thành phố lớn Hà Nội, Hồ Chí Minh, Hải Phòng"></a>
                        <div class="icon_viphot">
                        </div>

                        <div class="code_row">HP-33817</div>
                        <h3>
                            <a href="/ban-can-ho-du-an-vincity-phan-khuc-bat-dong-san-dai-chung-tai-cac-thanh-pho-lon-ha-noi-ho-chi-minh-hai-phong-bds33817.htm">Bán
                                căn hộ dự án Vincity phân khúc bất động sản đại chúng tại các thành phố lớn Hà Nội, Hồ
                                Chí Minh, Hải Phòng</a></h3>

                        <p>Khu đô thị Vincity chuẩn sống Vinhomes 5 sao đảm bảo là một không gian xanh, sinh thái trong
                            lành cho người Việt</p>

                        <div class="row area">
                            <div class="col-xs-6 larea">DTMB: 50 m2</div>
                            <div class="col-xs-6 rarea">DTSD: 50 m2</div>
                        </div>

                        <div class="row12 price">
                            <div class="col-xs-5 lprice"><i class="fa fa-map-marker"></i> Quận/huyện khác</div>
                            <div class="col-xs-7 rprice">Giá:
                                Thỏa thuận
                            </div>
                        </div>

                    </div>

                    <div class="clearfix"></div>

                </div>
            </div>
            <!--End detail_land-->


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

    .body_hotLand_home .item > a {
        display: block;
        height: 170px;
        background: #ddd;
    }

    .body_hotLand_home .item > a img {
        width: 100%;
        height: 100%;
    }

    .body_hotLand_home .item h3 {
        height: 40px;
        overflow: hidden;
        margin: 10px 0;
    }

    .body_hotLand_home .item h3 a {
        font-size: 14px;
        font-weight: 600;
        display: inline-block;
        line-height: 20px;
        color: #000;
    }

    .body_hotLand_home .item > p {
        line-height: 18px;
        height: 72px;
        overflow: hidden;
    }

    .body_hotLand_home .item .area {
        font-weight: 600;
        font-size: 12px;
        margin: 10px 0;
    }

    .body_hotLand_home .item .price .lprice {
        text-align: center;
        background: #eeeeee;
        line-height: 30px;
    }

    .body_hotLand_home .item .price .rprice {
        text-align: center;
        background: #e40b00;
        line-height: 30px;
        color: #fff;
    }

    .body_hotLand_home .item {
        /*width: 19%;*/
        /*margin-right: 1.25%;*/
        margin-bottom: 20px;
        position: relative;
        border: 2px solid #eee;
        padding: 5px;
    }
</style>