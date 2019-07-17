<section class="news">
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-9 col-md-9">

                <div id="center-body">

                    <div id="raovat-nb">
                        <div class="box-module mt-2">
                            <div class="bg-modul"><i class="glyphicon glyphicon-th"></i> Tin rao nổi bật</div>
                        </div>
                        <div class="clearfix" id="box-home-svip">

                            <?php foreach ($ads_center as $key => $value) { ?>

                                <div class="item-re-list clearfix" style="border-color: #f00" onclick="updateView('<?php echo $value->id; ?>');">
                                    <!--                                <div class="box-img-thumb col-sm-3 col-md-3">-->
                                    <div class="box-img-thumb">
                                        <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                            <img src="<?php echo public_url('images/ads/' . $value->img) ?>"
                                                 alt="<?php echo $value->title ?>">
                                        </a>
                                    </div>
                                    <!--                                <div class="box-info-list col-sm-9 col-md-9">-->
                                    <div class="box-info-list">
                                        <div class="clearfix box-title-item">
                                            <label class="label label-danger">NỔI BẬT</label>
                                            <h3 class="sieu-vip-title">
                                                <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                                    <?php echo $value->title ?> </a>
                                            </h3>
                                        </div>
                                        <p><?php echo $value->intro ?>
                                            <img style="width: 34px;height: 21px;float: left;display: inline;" src="<?php echo public_url('images/hot-icon.gif' ) ?>"
                                        </p>
                                        <div class="price-list mb-3">
                                            <span>Diện tích</span>:
                                            <strong><?php echo $value->acreage . ' m2' ?></strong>
                                        </div>
                                        <div class="price-list mb-3">
                                            <span>Giá</span>: <strong><?php echo $value->price ?></strong>
                                        </div>
                                        <div class="price-list mb-3">
                                            <span>Khu vực</span>: <strong> <?php echo $value->area ?> </strong>

                                        </div>
                                        <div class="price-list mb-3">
                                            <span>Link bài viết</span>: <a href="<?php echo $value->link ?>"
                                                                           target="_blank">
                                                <?php echo $value->link ?></a>

                                            <span class="pull-right time">
                                             <i class="glyphicon glyphicon-time"></i>
                                            <?php echo date('Y-m-d', strtotime($value->created_at)) ?>
                                        </span>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>

                            <div class="pull-right mt-10 viewall">
                                <a href="/bat-dong-san-ban-tai-viet-nam-s32113"><i class="glyphicon glyphicon-th"></i>
                                    Xem tất cả</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-10">
                        <div class="col-sm-6">
                            <div class="bg-modul"><h2>Dự án nổi bật</h2></div>
                            <div class="border-box col-hom-news">
                                <div style="width:100%;height:395px;overflow:hidden">
                                    <div class="bx-wrapper" style="max-width: 100%;">
                                        <div class="bx-viewport"
                                             style="width: 100%; overflow: hidden; position: relative; height: 360px;">
                                            <ul class="project-hot"
                                                style="width: 1015%; position: relative; transition-duration: 0.5s; transform: translate3d(-1993px, 0px, 0px);">
                                                <li style="float: left; list-style: none; position: relative; width: 325.5px;"
                                                    class="bx-clone"><a href="/du-an/opal-garden-271"> <img
                                                                src="https://batdongsan24h.com.vn/images/private/2016/10/20/131214310105824608.jpg?w=325&amp;h=190&amp;mode=crop"
                                                                alt="Opal Garden" title="Opal Garden"> </a> <a
                                                            href="/du-an/opal-garden-271">Opal Garden</a>
                                                    <p class="description text-muted">Opal Garden là khu phức hợp được
                                                        đầu tư xây dựng bởi tập đoàn Đất Xanh. Chủ đầu tư mong muốn mang
                                                        đến một không gian sống hiện đại, tiện nghi, hệ thống tiện ích
                                                        đẳng cấp cùng hệ sinh thái cây xanh hài hòa.</p></li>
                                                <li style="float: left; list-style: none; position: relative; width: 325.5px;">
                                                    <a href="/du-an/a1-a2-a3-vinhomes-gardenia-my-dinh-1315"> <img
                                                                src="https://batdongsan24h.com.vn/images/private/2016/12/01/131250386311955428.jpg?w=325&amp;h=190&amp;mode=crop"
                                                                alt="A1- A2- A3 Vinhomes Gardenia Mỹ Đình"
                                                                title="A1- A2- A3 Vinhomes Gardenia Mỹ Đình"> </a> <a
                                                            href="/du-an/a1-a2-a3-vinhomes-gardenia-my-dinh-1315">A1-
                                                        A2- A3 Vinhomes Gardenia Mỹ Đình</a>
                                                    <p class="description text-muted">Khu căn hộ chung cư cao tầng The
                                                        Arcadia gồm 3 tòa tháp A1, A2, A3 cao từ 37 đến 39 tầng thuộc
                                                        khu đô thị mới Vinhomes Gardenia Mỹ Đình Trong đó, A1, A2 nhìn
                                                        nhau, cao 37 tầng và tòa trung tâm A3 cao 39 tầng hướng view
                                                        đường Hàm Nghi</p></li>
                                                <li style="float: left; list-style: none; position: relative; width: 325.5px;">
                                                    <a href="/du-an/the-panorama-427"> <img
                                                                src="https://batdongsan24h.com.vn/images/private/2016/10/27/131220335448098789.jpg?w=325&amp;h=190&amp;mode=crop"
                                                                alt="The Panorama" title="The Panorama"> </a> <a
                                                            href="/du-an/the-panorama-427">The Panorama</a>
                                                    <p class="description text-muted">The Panorama là khu căn hộ đẳng
                                                        cấp, sẽ thiết lập một tiêu chuẩn sống mới tại Tp.HCM bởi sự kết
                                                        hợp hài hòa giữa vị trí hiếm có, quy hoạch và kiến trúc của Khu
                                                        Kênh Đào.</p></li>
                                                <li style="float: left; list-style: none; position: relative; width: 325.5px;">
                                                    <a href="/du-an/van-phuc-riverside-city-400"> <img
                                                                src="https://batdongsan24h.com.vn/images/private/2016/10/25/131218850179006051.jpg?w=325&amp;h=190&amp;mode=crop"
                                                                alt="Van Phuc Riverside City"
                                                                title="Van Phuc Riverside City"> </a> <a
                                                            href="/du-an/van-phuc-riverside-city-400">Van Phuc Riverside
                                                        City</a>
                                                    <p class="description text-muted">Được quy hoạch xây dựng trên khu
                                                        đất có diện tích 198 ha, Khu đô thị Van Phuc Riverside City có
                                                        diện tích đất ở là 50,43%, phần diện tích của khu đô thị sẽ được
                                                        dành cho cây xanh, mặt nước, giao thông.</p></li>
                                                <li style="float: left; list-style: none; position: relative; width: 325.5px;">
                                                    <a href="/du-an/citizen-ts-trung-son-289"> <img
                                                                src="https://batdongsan24h.com.vn/images/private/2016/10/22/131215826916768746.jpg?w=325&amp;h=190&amp;mode=crop"
                                                                alt="Citizen TS Trung Sơn" title="Citizen TS Trung Sơn">
                                                    </a> <a href="/du-an/citizen-ts-trung-son-289">Citizen TS Trung
                                                        Sơn</a>
                                                    <p class="description text-muted">Căn hộ CitiZen TS (CitiZen Trung
                                                        Sơn) là dự án thứ 3 của chủ đầu tư Hưng Thịnh tại khu vực Nam
                                                        Sài Gòn, sau dự án Florita và SaiGon Mia.</p></li>
                                                <li style="float: left; list-style: none; position: relative; width: 325.5px;">
                                                    <a href="/du-an/skyway-residence-287"> <img
                                                                src="https://batdongsan24h.com.vn/images/private/2016/10/22/131215817095771496.jpg?w=325&amp;h=190&amp;mode=crop"
                                                                alt="Skyway Residence" title="Skyway Residence"> </a> <a
                                                            href="/du-an/skyway-residence-287">Skyway Residence</a>
                                                    <p class="description text-muted">Dự án căn hộ Skyway Residence nằm
                                                        trong khu dân cư Conic 29 ha, có quy mô gồm 2 block cao 20
                                                        tầng, với 1 tầng hầm.</p></li>
                                                <li style="float: left; list-style: none; position: relative; width: 325.5px;">
                                                    <a href="/du-an/vincom-shophouse-tra-vinh-276"> <img
                                                                src="https://batdongsan24h.com.vn/images/private/2016/10/21/131215124081870282.jpg?w=325&amp;h=190&amp;mode=crop"
                                                                alt="Vincom Shophouse Trà Vinh"
                                                                title="Vincom Shophouse Trà Vinh"> </a> <a
                                                            href="/du-an/vincom-shophouse-tra-vinh-276">Vincom Shophouse
                                                        Trà Vinh</a>
                                                    <p class="description text-muted">Nằm trong tổ hợp Trung tâm thương
                                                        mại Shophose Vincom rộng hơn 9.100m2, khu nhà phố thương mại
                                                        Vincom Shophouse Trà Vinh hứa hẹn đem đến cho bạn không gian
                                                        sống tiện ích.</p></li>
                                                <li style="float: left; list-style: none; position: relative; width: 325.5px;">
                                                    <a href="/du-an/the-navita-272"> <img
                                                                src="https://batdongsan24h.com.vn/images/private/2016/10/20/131214326073544654.jpg?w=325&amp;h=190&amp;mode=crop"
                                                                alt="The Navita" title="The Navita"> </a> <a
                                                            href="/du-an/the-navita-272">The Navita</a>
                                                    <p class="description text-muted">The Navita nằm trong Khu phức hợp
                                                        Lan Phương Garden rộng 8,4 ha, gồm 8 cao ốc, các TTTM và một số
                                                        nền đất.</p></li>
                                                <li style="float: left; list-style: none; position: relative; width: 325.5px;">
                                                    <a href="/du-an/opal-garden-271"> <img
                                                                src="https://batdongsan24h.com.vn/images/private/2016/10/20/131214310105824608.jpg?w=325&amp;h=190&amp;mode=crop"
                                                                alt="Opal Garden" title="Opal Garden"> </a> <a
                                                            href="/du-an/opal-garden-271">Opal Garden</a>
                                                    <p class="description text-muted">Opal Garden là khu phức hợp được
                                                        đầu tư xây dựng bởi tập đoàn Đất Xanh. Chủ đầu tư mong muốn mang
                                                        đến một không gian sống hiện đại, tiện nghi, hệ thống tiện ích
                                                        đẳng cấp cùng hệ sinh thái cây xanh hài hòa.</p></li>
                                                <li style="float: left; list-style: none; position: relative; width: 325.5px;"
                                                    class="bx-clone"><a
                                                            href="/du-an/a1-a2-a3-vinhomes-gardenia-my-dinh-1315"> <img
                                                                src="https://batdongsan24h.com.vn/images/private/2016/12/01/131250386311955428.jpg?w=325&amp;h=190&amp;mode=crop"
                                                                alt="A1- A2- A3 Vinhomes Gardenia Mỹ Đình"
                                                                title="A1- A2- A3 Vinhomes Gardenia Mỹ Đình"> </a> <a
                                                            href="/du-an/a1-a2-a3-vinhomes-gardenia-my-dinh-1315">A1-
                                                        A2- A3 Vinhomes Gardenia Mỹ Đình</a>
                                                    <p class="description text-muted">Khu căn hộ chung cư cao tầng The
                                                        Arcadia gồm 3 tòa tháp A1, A2, A3 cao từ 37 đến 39 tầng thuộc
                                                        khu đô thị mới Vinhomes Gardenia Mỹ Đình Trong đó, A1, A2 nhìn
                                                        nhau, cao 37 tầng và tòa trung tâm A3 cao 39 tầng hướng view
                                                        đường Hàm Nghi</p></li>
                                            </ul>
                                        </div>
                                        <div class="bx-controls bx-has-pager">
                                            <div class="bx-pager bx-default-pager">
                                                <div class="bx-pager-item"><a href="" data-slide-index="0"
                                                                              class="bx-pager-link">1</a></div>
                                                <div class="bx-pager-item"><a href="" data-slide-index="1"
                                                                              class="bx-pager-link">2</a></div>
                                                <div class="bx-pager-item"><a href="" data-slide-index="2"
                                                                              class="bx-pager-link">3</a></div>
                                                <div class="bx-pager-item"><a href="" data-slide-index="3"
                                                                              class="bx-pager-link">4</a></div>
                                                <div class="bx-pager-item"><a href="" data-slide-index="4"
                                                                              class="bx-pager-link">5</a></div>
                                                <div class="bx-pager-item"><a href="" data-slide-index="5"
                                                                              class="bx-pager-link active">6</a></div>
                                                <div class="bx-pager-item"><a href="" data-slide-index="6"
                                                                              class="bx-pager-link">7</a></div>
                                                <div class="bx-pager-item"><a href="" data-slide-index="7"
                                                                              class="bx-pager-link">8</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-modul"><h2>Không gian sống</h2></div>
                            <div class="border-box col-hom-news" style="height:415px"><a
                                        href="/tin-tuc/ha-noi-chu-nha-hoi-han-vi-sua-nha-qua-dep-7862.html"> <img
                                            src="https://batdongsan24h.com.vn/images/private/2017/10/13/131523657644051181.jpg?w=325&amp;h=190&amp;mode=crop"
                                            class="img-responsive center-block"
                                            alt="Hà Nội: Chủ nhà hối hận vì sửa nhà quá đẹp"> <br> <span
                                            class="title-raovat">Hà Nội: Chủ nhà hối hận vì sửa nhà quá đẹp</span> </a>
                                <p><a href="/tin-tuc/can-ho-72m2-dep-nhu-khach-san-cua-nu-chu-nha-doc-than-7853.html">
                                        <i class="glyphicon glyphicon-triangle-right"></i> Căn hộ 72m2 đẹp như khách sạn
                                        của nữ chủ nhà độc thân </a></p>
                                <p><a href="/tin-tuc/ngoi-nha-nho-cap-4-dien-tich-44m2-nhu-resort-5752.html"> <i
                                                class="glyphicon glyphicon-triangle-right"></i> Ngôi nhà nhỏ cấp 4 diện
                                        tích 44m2 như 'resort' </a></p>
                                <p><a href="/tin-tuc/can-ho-8m2-dang-mo-uoc-danh-cho-hoi-doc-than-5747.html"> <i
                                                class="glyphicon glyphicon-triangle-right"></i> Căn hộ 8m2 đáng mơ
                                        ước dành cho hội độc thân </a></p>
                                <p><a href="/tin-tuc/nha-cap-4-kieu-thai-tai-nghe-an-ngang-khach-san-3-sao-5714.html">
                                        <i class="glyphicon glyphicon-triangle-right"></i> Nhà cấp 4 kiểu Thái tại Nghệ
                                        An ngang khách sạn 3 sao </a></p></div>
                        </div>
                    </div>

                    <div class="box-module mt-2">
                        <div class="bg-modul"><h1><i class="glyphicon glyphicon-th"></i> Tin rao mới cập nhật</h1></div>
                    </div>
                    <div class="clearfix">

                        <?php foreach ($ads_new as $key => $value) { ?>
                            <div class="item-re-list clearfix">
                                <!--                            <div class="box-img-thumb col-sm-3 col-md-3">-->
                                <div class="box-img-thumb">
                                    <a
                                            href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                        <img src="<?php echo public_url('images/ads/' . $value->img) ?>"
                                             alt="<?php echo $value->title ?>">
                                    </a></div>
                                <!--                            <div class="box-info-list col-sm-9 col-md-9">-->
                                <div class="box-info-list">
                                    <h3><a
                                                href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                            <?php echo $value->title ?>
                                        </a>
                                    </h3>
                                    <p><?php echo $value->intro ?>
                                        ...</p>
                                    <div class="price-list mb-3"><span>Diện tích</span>:
                                        <strong><?php echo $value->acreage ?> m2</strong></div>
                                    <div class="price-list mb-3"><span>Giá</span>:
                                        <strong><?php echo $value->price ?></strong></div>
                                    <div class="price-list mb-3"><span>Khu vực</span>:
                                        <strong> <?php echo $value->area ?> </strong> <span class="pull-right time"> <i
                                                    class="glyphicon glyphicon-time"></i> <?php echo date('Y-m-d', strtotime($value->created_at)) ?> </span>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>

                    </div>

                </div>

            </div>

            <div class="col-sm-3 col-md-3">

                <div id="right">
                    <div class="box-module mt-2">
                        <div class="bg-modul">Liên kết được quan tâm</div>
                    </div>
                    <div>
<!--                        <div class="container">-->
<!--                            <h2>Basic List Group</h2>-->
                        <ul class="list-group">
                            <?php foreach ($news as $key=>$value){ ?>
                            <li class="list-group-item">

                                <a href="<?php echo base_url('tin-tuc/'.create_slug($value->name).'-'.$value->id)?>">
                                    <?php echo $value->name?>
                                </a>
                            </li>
                                <?php } ?>
                            <li class="list-group-item">Second item</li>
                            <li class="list-group-item">Third item</li>
                        </ul>
<!--                        </div>-->
                    </div>
                    <div class="box-links-right"><p><span style="font-size:12px"><span
                                        style="font-family:tahoma,geneva,sans-serif"><strong>KHU VỰC&nbsp;HÀ NỘI</strong></span></span>
                        </p>
                        <ul class="list-group">
                            <?php foreach ($news as $key=>$value){ ?>
                                <li class="list-group-item">

                                    <a href="<?php echo base_url('tin-tuc/'.create_slug($value->name).'-'.$value->id)?>">
                                        <?php echo $value->name?>
                                    </a>
                                </li>
                            <?php } ?>
                            <li class="list-group-item">Second item</li>
                            <li class="list-group-item">Third item</li>
                        </ul>
                        <p>
                            <span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif"><strong>KHU VỰC&nbsp;TP.HCM</strong></span></span>
                        </p>
                        <ul class="list-group">
                            <?php foreach ($news as $key=>$value){ ?>
                                <li class="list-group-item">

                                    <a href="<?php echo base_url('tin-tuc/'.create_slug($value->name).'-'.$value->id)?>">
                                        <?php echo $value->name?>
                                    </a>
                                </li>
                            <?php } ?>
                            <li class="list-group-item">Second item</li>
                            <li class="list-group-item">Third item</li>
                        </ul>
                    </div>
                    <div class="box-module">
                        <div class="bg-modul" style="margin-top:10px"><i class="glyphicon glyphicon-link"></i> Phong
                            thủy
                        </div>
                    </div>
                    <ul class="list-group">
                        <?php foreach ($news as $key=>$value){ ?>
                            <li class="list-group-item">

                                <a href="<?php echo base_url('tin-tuc/'.create_slug($value->name).'-'.$value->id)?>">
                                    <?php echo $value->name?>
                                </a>
                            </li>
                        <?php } ?>
                        <li class="list-group-item">Second item</li>
                        <li class="list-group-item">Third item</li>
                    </ul>
                    <div class="box-module">
                        <div class="bg-modul" style="margin-top:10px"><i class="glyphicon glyphicon-link"></i> Góc lắng
                            nghe
                        </div>
                    </div>
                    <ul class="list-group">
                        <?php foreach ($news as $key=>$value){ ?>
                            <li class="list-group-item">

                                <a href="<?php echo base_url('tin-tuc/'.create_slug($value->name).'-'.$value->id)?>">
                                    <?php echo $value->name?>
                                </a>
                            </li>
                        <?php } ?>
                        <li class="list-group-item">Second item</li>
                        <li class="list-group-item">Third item</li>
                    </ul>
                </div>


            </div>


        </div>
    </div>
</section>

<style>

    .item-re-list {
        border: 1px #b0aeae solid;
        margin-top: 10px;
        width: 100%;
        padding: 10px;
    }

    .box-img-thumb {
        /*width: 150px;*/
        width: 16%;
        float: left;
        margin-right: 15px;
    }

    #box-home-svip .box-info-list {
        /*width: 521px;*/
        /*width: 721px;*/
    }

    .box-info-list {
        float: left;
        /*width: 538px;*/
        width:82%;
    }

    /*.box-title-item label {*/
    /*    float: left;*/
    /*    margin-top: 5px;*/
    /*    margin-right: 5px;*/
    /*    width: 55px;*/
    /*    text-transform: uppercase;*/
    /*}*/

    .box-title-item label {
        float: left;
        /* margin-top: 5px; */
        margin-right: 15px;
        /* width: 55px; */
        text-transform: uppercase;
    }

    #box-home-svip {
        overflow-x: hidden;
        overflow-y: scroll;
        max-height: 1000px;
        margin-bottom: 15px;
    }

    .label-danger {
        background-color: #d9534f;
    }

    .label {
        height: 14px; */
        /* display: inline; */
        /* padding: .2em .6em .3em; */
        /* font-size: 75%; */
    font-weight: 700;
        /* line-height: 1; */
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25em;
        padding: 4px;
        line-height: 10px;
    }

    .item-re-list h3 {
        margin: 0 0 10px;
        padding: 0;
        font-size: 13px;
        font-weight: 700;
    }


    .item-re-list img {
        float: left;
        width: 150px;
        height: 120px;
        margin-right: 10px;
        border: 1px #eee solid;
    }

    img {
        vertical-align: middle;
    }

    h3.sieu-vip-title a {
        color: red;
        text-transform: uppercase;
    }

    /*.bg-modul {*/
    /*    background: #15a1b1;*/
    /*    color: #fff;*/
    /*    font-weight: bold;*/
    /*    text-transform: uppercase;*/
    /*    padding: 6px 16px 6px 13px;*/
    /*    display: inline-block;*/
    /*    -ms-border-top-right-radius: 4px;*/
    /*    border-top-right-radius: 4px;*/
    /*    -ms-border-top-left-radius: 4px;*/
    /*    border-top-left-radius: 4px;*/
    /*    text-align: center;*/
    /*}*/

    .bg-modul h2, .bg-modul h1 {
        font-size: 1.2rem;
        font-weight: 700;
        margin: 0;
        padding: 0;
        line-height: 18px;
    }

    .border-box {
        border: 1px #ddd solid;
        padding: 10px;
    }

    .price-list span.time {
        font-weight: 400;
        width: inherit;
    }

    .price-list span {
        /*font-weight: 700;*/
        /*width: 60px;*/
        display: inline-block;
    }

    .time {
        font-size: 11px;
        white-space: nowrap;
    }


</style>