<section class="news">
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-9 col-md-9">

                <div id="center-body">

                    <div id="raovat-nb">
                        <div class="box-module mt10">
                            <div class="bg-modul"><i class="glyphicon glyphicon-th"></i> Tin rao nổi bật</div>
                        </div>
                        <div class="clearfix" id="box-home-svip">

                            <?php foreach ($ads as $key => $value) { ?>

                                <div class="item-re-list clearfix" style="border-color: #f00">
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
                                            <label class="label label-danger">ĐẶC BIỆT</label>
                                            <h3 class="sieu-vip-title">
                                                <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                                    <?php echo $value->title ?> </a>
                                            </h3>
                                        </div>
                                        <p><?php echo $value->intro ?> ...</p>
                                        <div class="price-list">
                                            <span>Diện tích</span>:
                                            <strong><?php echo $value->acreage . ' m2' ?></strong>
                                        </div>
                                        <div class="price-list">
                                            <span>Giá</span>: <strong><?php echo $value->price ?></strong>
                                        </div>
                                        <div class="price-list">
                                            <span>Khu vực</span>: <strong> <?php echo $value->area ?> </strong>
                                            <span class="pull-right time">
                                             <i class="glyphicon glyphicon-time"></i>
                                            <?php echo date('Y-m-d', strtotime($value->created_at)) ?>
                                        </span>
                                        </div>
                                        <div class="price-list">
                                            <span>Link bài viết</span>: <a href="<?php echo $value->link ?>" target="_blank">
                                                <?php echo $value->link ?></a>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>

                            <div class="pull-right mt10 viewall">
                                <a href="/bat-dong-san-ban-tai-viet-nam-s32113"><i class="glyphicon glyphicon-th"></i>
                                    Xem tất cả</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt10">
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

                    <div class="box-module mt10">
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
                                    <div class="price-list"><span>Diện tích</span>:
                                        <strong><?php echo $value->acreage ?> m2</strong></div>
                                    <div class="price-list"><span>Giá</span>:
                                        <strong><?php echo $value->price ?></strong></div>
                                    <div class="price-list"><span>Khu vực</span>:
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

                    <div id="box-search">
                        <div class="content-box-search">
                            <div class="heading-search">
                                <h3>
                                    <span class=""><i class="icon icon-search"></i></span>
                                    <span>CÔNG CỤ TÌM KIẾM</span>
                                </h3>
                            </div>
                            <div class="content-tab-search active" rel="1">
                                <div class="column-1">
                                    <input type="text" id="KeyWordSearch" class="home-search" placeholder="Bạn cần tìm gì?">
                                </div>
                                <div class="column-2 mg-top-5">
                                    <select class="chosen-select" id="CateSearchParent" name="CateSearchParent" style="display: none;"><option value="0">Loại BĐS</option>
                                        <option value="38">Nhà đất bán</option>
                                        <option value="49">Nhà đất cho thuê</option>
                                        <option value="22">Sang nhượng</option>
                                    </select><div class="chosen-container chosen-container-single" title="" id="CateSearchParent_chosen" style="width: 150px;"><a class="chosen-single">
                                            <span>Loại BĐS</span>
                                            <div><b></b></div>
                                        </a>
                                        <div class="chosen-drop">
                                            <div class="chosen-search">
                                                <input class="chosen-search-input" type="text" autocomplete="off">
                                            </div>
                                            <ul class="chosen-results" tabindex="5000" style="overflow: hidden; outline: none;"></ul>
                                            <div id="ascrail2000" class="nicescroll-rails" style="width: 6px; z-index: 1010; background: rgb(244, 244, 244); cursor: default; position: absolute; top: 34px; left: 151px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box; border-radius: 6px;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails" style="height: 6px; z-index: 1010; background: rgb(244, 244, 244); top: 28px; left: 1px; position: absolute; cursor: default; display: none;"><div style="position: relative; top: 0px; height: 6px; width: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box; border-radius: 6px;"></div></div></div></div>
                                </div>
                                <div class="column-4 mg-top-5" id="cateSearch">
                                    <select class="chosen-select" id="CateSearch" name="CateSearch" style="display: none;"><option value="0">Danh mục BĐS</option>
                                    </select><div class="chosen-container chosen-container-single" title="" id="CateSearch_chosen" style="width: 150px;"><a class="chosen-single">
                                            <span>Danh mục BĐS</span>
                                            <div><b></b></div>
                                        </a>
                                        <div class="chosen-drop">
                                            <div class="chosen-search">
                                                <input class="chosen-search-input" type="text" autocomplete="off">
                                            </div>
                                            <ul class="chosen-results" tabindex="5001" style="overflow: hidden; outline: none;"></ul>
                                            <div id="ascrail2001" class="nicescroll-rails" style="width: 6px; z-index: 1010; background: rgb(244, 244, 244); cursor: default; position: absolute; top: 34px; left: 151px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box; border-radius: 6px;"></div></div><div id="ascrail2001-hr" class="nicescroll-rails" style="height: 6px; z-index: 1010; background: rgb(244, 244, 244); top: 28px; left: 1px; position: absolute; cursor: default; display: none;"><div style="position: relative; top: 0px; height: 6px; width: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box; border-radius: 6px;"></div></div></div></div>
                                </div>
                                <div class="column-2 mg-top-5">
                                    <select class="chosen-select" id="CitySearch" name="CitySearch" style="display: none;"><option value="">Toàn quốc</option>
                                        <option value="SG">Hồ Chí Minh</option>
                                        <option value="HN">Hà Nội</option>
                                        <option value="BD">Bình Dương</option>
                                        <option value="DDN">Đà Nẵng</option>
                                        <option value="HP">Hải Phòng</option>
                                        <option value="LA">Long An</option>
                                        <option value="VT">Bà Rịa Vũng Tàu</option>
                                        <option value="AG">An Giang</option>
                                        <option value="BG">Bắc Giang</option>
                                        <option value="BK">Bắc Kạn</option>
                                        <option value="BL">Bạc Liêu</option>
                                        <option value="BN">Bắc Ninh</option>
                                        <option value="BTR">Bến Tre</option>
                                        <option value="BDD">Bình Định</option>
                                        <option value="BP">Bình Phước</option>
                                        <option value="BTH">Bình Thuận  </option>
                                        <option value="CM">Cà Mau</option>
                                        <option value="CN">Cả Nước</option>
                                        <option value="CT">Cần Thơ</option>
                                        <option value="CB">Cao Bằng</option>
                                        <option value="DDL">Đắk Lắk</option>
                                        <option value="DNO">Đắk Nông</option>
                                        <option value="DDB">Điện Biên</option>
                                        <option value="DNA">Đồng Nai</option>
                                        <option value="DDT">Đồng Tháp</option>
                                        <option value="GL">Gia Lai</option>
                                        <option value="HG">Hà Giang</option>
                                        <option value="HNA">Hà Nam</option>
                                        <option value="HT">Hà Tĩnh</option>
                                        <option value="HD">Hải Dương</option>
                                        <option value="HGI">Hậu Giang</option>
                                        <option value="HB">Hòa Bình</option>
                                        <option value="HY">Hưng Yên</option>
                                        <option value="KH">Khánh Hòa</option>
                                        <option value="KG">Kiên Giang</option>
                                        <option value="KT">Kon Tum</option>
                                        <option value="LCH">Lai Châu</option>
                                        <option value="LDD">Lâm Đồng</option>
                                        <option value="LS">Lạng Sơn</option>
                                        <option value="LCA">Lào Cai</option>
                                        <option value="NDD">Nam Định</option>
                                        <option value="NA">Nghệ An</option>
                                        <option value="NB">Ninh Bình</option>
                                        <option value="NT">Ninh Thuận</option>
                                        <option value="PT">Phú Thọ</option>
                                        <option value="PY">Phú Yên</option>
                                        <option value="QB">Quảng Bình</option>
                                        <option value="QNA">Quảng Nam</option>
                                        <option value="QNG">Quảng Ngãi</option>
                                        <option value="QNI">Quảng Ninh</option>
                                        <option value="QT">Quảng Trị</option>
                                        <option value="ST">Sóc Trăng</option>
                                        <option value="SL">Sơn La</option>
                                        <option value="TNI">Tây Ninh</option>
                                        <option value="TB">Thái Bình</option>
                                        <option value="TN">Thái Nguyên</option>
                                        <option value="TH">Thanh Hóa</option>
                                        <option value="TTH">Thừa Thiên Huế</option>
                                        <option value="TG">Tiền Giang</option>
                                        <option value="TV">Trà Vinh</option>
                                        <option value="TQ">Tuyên Quang</option>
                                        <option value="VL">Vĩnh Long</option>
                                        <option value="VP">Vĩnh Phúc</option>
                                        <option value="YB">Yên Bái</option>
                                    </select><div class="chosen-container chosen-container-single" title="" id="CitySearch_chosen" style="width: 150px;"><a class="chosen-single">
                                            <span>Toàn quốc</span>
                                            <div><b></b></div>
                                        </a>
                                        <div class="chosen-drop">
                                            <div class="chosen-search">
                                                <input class="chosen-search-input" type="text" autocomplete="off">
                                            </div>
                                            <ul class="chosen-results" tabindex="5002" style="overflow: hidden; outline: none;"><li class="active-result result-selected" data-option-array-index="0" style="">Toàn quốc</li><li class="active-result" data-option-array-index="1" style="">Hồ Chí Minh</li><li class="active-result" data-option-array-index="2" style="">Hà Nội</li><li class="active-result" data-option-array-index="3" style="">Bình Dương</li><li class="active-result" data-option-array-index="4" style="">Đà Nẵng</li><li class="active-result" data-option-array-index="5" style="">Hải Phòng</li><li class="active-result" data-option-array-index="6" style="">Long An</li><li class="active-result" data-option-array-index="7" style="">Bà Rịa Vũng Tàu</li><li class="active-result" data-option-array-index="8" style="">An Giang</li><li class="active-result" data-option-array-index="9" style="">Bắc Giang</li><li class="active-result" data-option-array-index="10" style="">Bắc Kạn</li><li class="active-result" data-option-array-index="11" style="">Bạc Liêu</li><li class="active-result" data-option-array-index="12" style="">Bắc Ninh</li><li class="active-result" data-option-array-index="13" style="">Bến Tre</li><li class="active-result" data-option-array-index="14" style="">Bình Định</li><li class="active-result" data-option-array-index="15" style="">Bình Phước</li><li class="active-result" data-option-array-index="16" style="">Bình Thuận  </li><li class="active-result" data-option-array-index="17" style="">Cà Mau</li><li class="active-result" data-option-array-index="18" style="">Cả Nước</li><li class="active-result" data-option-array-index="19" style="">Cần Thơ</li><li class="active-result" data-option-array-index="20" style="">Cao Bằng</li><li class="active-result" data-option-array-index="21" style="">Đắk Lắk</li><li class="active-result" data-option-array-index="22" style="">Đắk Nông</li><li class="active-result" data-option-array-index="23" style="">Điện Biên</li><li class="active-result" data-option-array-index="24" style="">Đồng Nai</li><li class="active-result" data-option-array-index="25" style="">Đồng Tháp</li><li class="active-result" data-option-array-index="26" style="">Gia Lai</li><li class="active-result" data-option-array-index="27" style="">Hà Giang</li><li class="active-result" data-option-array-index="28" style="">Hà Nam</li><li class="active-result" data-option-array-index="29" style="">Hà Tĩnh</li><li class="active-result" data-option-array-index="30" style="">Hải Dương</li><li class="active-result" data-option-array-index="31" style="">Hậu Giang</li><li class="active-result" data-option-array-index="32" style="">Hòa Bình</li><li class="active-result" data-option-array-index="33" style="">Hưng Yên</li><li class="active-result" data-option-array-index="34" style="">Khánh Hòa</li><li class="active-result" data-option-array-index="35" style="">Kiên Giang</li><li class="active-result" data-option-array-index="36" style="">Kon Tum</li><li class="active-result" data-option-array-index="37" style="">Lai Châu</li><li class="active-result" data-option-array-index="38" style="">Lâm Đồng</li><li class="active-result" data-option-array-index="39" style="">Lạng Sơn</li><li class="active-result" data-option-array-index="40" style="">Lào Cai</li><li class="active-result" data-option-array-index="41" style="">Nam Định</li><li class="active-result" data-option-array-index="42" style="">Nghệ An</li><li class="active-result" data-option-array-index="43" style="">Ninh Bình</li><li class="active-result" data-option-array-index="44" style="">Ninh Thuận</li><li class="active-result" data-option-array-index="45" style="">Phú Thọ</li><li class="active-result" data-option-array-index="46" style="">Phú Yên</li><li class="active-result" data-option-array-index="47" style="">Quảng Bình</li><li class="active-result" data-option-array-index="48" style="">Quảng Nam</li><li class="active-result" data-option-array-index="49" style="">Quảng Ngãi</li><li class="active-result" data-option-array-index="50" style="">Quảng Ninh</li><li class="active-result" data-option-array-index="51" style="">Quảng Trị</li><li class="active-result" data-option-array-index="52" style="">Sóc Trăng</li><li class="active-result" data-option-array-index="53" style="">Sơn La</li><li class="active-result" data-option-array-index="54" style="">Tây Ninh</li><li class="active-result" data-option-array-index="55" style="">Thái Bình</li><li class="active-result" data-option-array-index="56" style="">Thái Nguyên</li><li class="active-result" data-option-array-index="57" style="">Thanh Hóa</li><li class="active-result" data-option-array-index="58" style="">Thừa Thiên Huế</li><li class="active-result" data-option-array-index="59" style="">Tiền Giang</li><li class="active-result" data-option-array-index="60" style="">Trà Vinh</li><li class="active-result" data-option-array-index="61" style="">Tuyên Quang</li><li class="active-result" data-option-array-index="62" style="">Vĩnh Long</li><li class="active-result" data-option-array-index="63" style="">Vĩnh Phúc</li><li class="active-result" data-option-array-index="64" style="">Yên Bái</li></ul>
                                            <div id="ascrail2002" class="nicescroll-rails" style="width: 6px; z-index: 1010; background: rgb(244, 244, 244); cursor: default; position: absolute; top: 34px; left: 151px; height: 240px; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 32px; background-color: rgb(204, 204, 204); background-clip: padding-box; border-radius: 6px;"></div></div><div id="ascrail2002-hr" class="nicescroll-rails" style="height: 6px; z-index: 1010; background: rgb(244, 244, 244); top: 268px; left: 1px; position: absolute; cursor: default; display: none; width: 150px; opacity: 0;"><div style="position: relative; top: 0px; height: 6px; width: 156px; background-color: rgb(204, 204, 204); background-clip: padding-box; border-radius: 6px;"></div></div></div></div>
                                </div>
                                <div class="column-3 mg-top-5" id="search-district">
                                    <select class="chosen-select" id="DistrictSearch" name="DistrictSearch" style="display: none;"><option value="">Quận/Huyện</option>
                                    </select><div class="chosen-container chosen-container-single" title="" id="DistrictSearch_chosen" style="width: 150px;"><a class="chosen-single">
                                            <span>Quận/Huyện</span>
                                            <div><b></b></div>
                                        </a>
                                        <div class="chosen-drop">
                                            <div class="chosen-search">
                                                <input class="chosen-search-input" type="text" autocomplete="off">
                                            </div>
                                            <ul class="chosen-results" tabindex="5003" style="overflow: hidden; outline: none;"></ul>
                                            <div id="ascrail2003" class="nicescroll-rails" style="width: 6px; z-index: 1010; background: rgb(244, 244, 244); cursor: default; position: absolute; top: 34px; left: 151px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box; border-radius: 6px;"></div></div><div id="ascrail2003-hr" class="nicescroll-rails" style="height: 6px; z-index: 1010; background: rgb(244, 244, 244); top: 28px; left: 1px; position: absolute; cursor: default; display: none;"><div style="position: relative; top: 0px; height: 6px; width: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box; border-radius: 6px;"></div></div></div></div>
                                </div>
                                <div class="column-4 mg-top-5">
                                    <select class="chosen-select" id="PriceSearch" name="PriceSearch" style="display: none;"><option value="0">Giá</option>
                                        <option value="mlt2000000">Dưới 2 triệu</option>
                                        <option value="mbw2000000~5000000">2 - 5 triệu</option>
                                        <option value="mbw5000000~10000000">5 - 10 triệu</option>
                                        <option value="mgt10000000">&gt; 10 triệu</option>
                                        <option value="mbw500000000~1000000000">500 triệu - 1 tỷ</option>
                                        <option value="mbw1000000000~3000000000">1 - 3 tỷ</option>
                                        <option value="mbw3000000000~5000000000">3 - 5 tỷ</option>
                                        <option value="mbw5000000000~10000000000">5 - 10 tỷ</option>
                                        <option value="mbw10000000000~30000000000">10 - 30 tỷ</option>
                                        <option value="mgt30000000000">&gt; 30 tỷ</option>
                                        <option value="mt2">Thỏa thuận</option>
                                    </select><div class="chosen-container chosen-container-single" title="" id="PriceSearch_chosen" style="width: 150px;"><a class="chosen-single">
                                            <span>Giá</span>
                                            <div><b></b></div>
                                        </a>
                                        <div class="chosen-drop">
                                            <div class="chosen-search">
                                                <input class="chosen-search-input" type="text" autocomplete="off">
                                            </div>
                                            <ul class="chosen-results" tabindex="5004" style="overflow: hidden; outline: none;"></ul>
                                            <div id="ascrail2004" class="nicescroll-rails" style="width: 6px; z-index: 1010; background: rgb(244, 244, 244); cursor: default; position: absolute; top: 34px; left: 151px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box; border-radius: 6px;"></div></div><div id="ascrail2004-hr" class="nicescroll-rails" style="height: 6px; z-index: 1010; background: rgb(244, 244, 244); top: 28px; left: 1px; position: absolute; cursor: default; display: none;"><div style="position: relative; top: 0px; height: 6px; width: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box; border-radius: 6px;"></div></div></div></div>
                                </div>
                                <div class="column-4 mg-top-5">
                                    <select class="chosen-select" id="AreaSearch" name="AreaSearch" style="display: none;"><option value="0">Diện tích</option>
                                        <option value="arlt30">&lt; 30 M2</option>
                                        <option value="arbw30~50">30 - 50 M2</option>
                                        <option value="arbw50~100">50 - 100 M2</option>
                                        <option value="argt100">&gt; 100 M2</option>
                                    </select><div class="chosen-container chosen-container-single" title="" id="AreaSearch_chosen" style="width: 150px;"><a class="chosen-single">
                                            <span>Diện tích</span>
                                            <div><b></b></div>
                                        </a>
                                        <div class="chosen-drop">
                                            <div class="chosen-search">
                                                <input class="chosen-search-input" type="text" autocomplete="off">
                                            </div>
                                            <ul class="chosen-results" tabindex="5005" style="overflow: hidden; outline: none;"></ul>
                                            <div id="ascrail2005" class="nicescroll-rails" style="width: 6px; z-index: 1010; background: rgb(244, 244, 244); cursor: default; position: absolute; top: 34px; left: 151px; height: 0px; display: none;"><div style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box; border-radius: 6px;"></div></div><div id="ascrail2005-hr" class="nicescroll-rails" style="height: 6px; z-index: 1010; background: rgb(244, 244, 244); top: 28px; left: 1px; position: absolute; cursor: default; display: none;"><div style="position: relative; top: 0px; height: 6px; width: 0px; background-color: rgb(204, 204, 204); background-clip: padding-box; border-radius: 6px;"></div></div></div></div>
                                </div>
                                <div>
                                    <button id="searchProduct"><i class="icon icon-search"></i> Tìm kiếm</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="box-module mt10">
                        <div class="bg-modul">Liên kết được quan tâm</div>
                    </div>
                    <div class="box-links-right"><p><span style="font-size:12px"><span
                                        style="font-family:tahoma,geneva,sans-serif"><strong>KHU VỰC&nbsp;HÀ NỘI</strong></span></span>
                        </p>
                        <ul>
                            <li>
                                <a href="http://batdongsanphucthinh.vn/ban-can-ho-chung-cu-tai-sun-grand-city-ancora-luong-yen-s1422162">Chung
                                    cư&nbsp;Sun Grand City Ancora Residence</a></li>
                            <li>
                                <a href="http://batdongsanphucthinh.vn/ban-can-ho-chung-cu-tai-the-garden-hills-99-tran-binh-s260117">Chung
                                    cư The garden Hills - 99 Trần Bình&nbsp;</a></li>
                            <li><a href="http://batdongsanphucthinh.vn/ban-can-ho-chung-cu-tai-an-binh-city-s1172432">Chung
                                    cư An Bình City</a></li>
                            <li><a href="http://batdongsanphucthinh.vn/ban-can-ho-chung-cu-tai-goldmark-city-s578392">Chung
                                    cư Goldmark City</a></li>
                            <li>
                                <a href="http://batdongsanphucthinh.vn/ban-can-ho-chung-cu-tai-tu-hiep-plaza-s1172600?page=12">Chung
                                    cư Tứ Hiệp Plaza</a></li>
                            <li>
                                <a href="http://batdongsanphucthinh.vn/ban-can-ho-chung-cu-tai-vinhomes-green-bay-me-tri-s1988923">Chung
                                    cư&nbsp;Vinhomes Green Bay Mễ Trì</a></li>
                            <li>
                                <a href="http://batdongsanphucthinh.vn/ban-can-ho-chung-cu-tai-vinhomes-sky-lake-s1225279">Chung
                                    cư Vinhomes Sky Lake</a></li>
                            <li>
                                <a href="http://batdongsanphucthinh.vn/cho-thue-van-phong-mat-bang-kinh-doanh-tai-ha-noi-s49598">Văn
                                    phòng - mặt bằng kinh doanh tại Hà Nội</a></li>
                            <li><a href="http://batdongsanphucthinh.vn/nha-ban-tai-duong-pho-phao-dai-lang-s1419515">Nhà
                                    bán tại phố Pháo Đài Láng</a></li>
                            <li>
                                <a href="http://batdongsanphucthinh.vn/ban-can-ho-chung-cu-tai-md-complex-my-dinh-s813995">Chung
                                    cư Mdcomplex Mỹ Đình</a></li>
                        </ul>
                        <p>
                            <span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif"><strong>KHU VỰC&nbsp;TP.HCM</strong></span></span>
                        </p>
                        <ul>
                            <li><a href="http://batdongsanphucthinh.vn/cho-thue-can-ho-chung-cu-tai-quan-7-s37553">Cho
                                    thuê căn hộ chung cư Quận 7</a></li>
                            <li><a href="http://batdongsanphucthinh.vn/cho-thue-can-ho-chung-cu-tai-quan-4-s37550">Cho
                                    thuê căn hộ chung cư Quận&nbsp;4</a></li>
                            <li>
                                <a href="http://batdongsanphucthinh.vn/cho-thue-can-ho-chung-cu-tai-quan-5-s37551?page=1">Cho
                                    thuê căn hộ chung cư Quận&nbsp;5</a></li>
                            <li><a href="http://batdongsanphucthinh.vn/ban-can-ho-chung-cu-tai-him-lam-phu-an-s1422099">Căn
                                    hộ Him Lam Phú An</a></li>
                            <li><a href="http://batdongsanphucthinh.vn/dat-ban-tai-quan-9-s1359687">Đất bán tại Quận
                                    9</a></li>
                            <li><a href="http://batdongsanphucthinh.vn/nha-ban-tai-quan-tan-binh-s1359045">Bán nhà quận
                                    Tân&nbsp;<span style="font-size:13px">Bình</span></a></li>
                            <li><a href="http://batdongsanphucthinh.vn/nha-ban-tai-quan-10-s1358944"><span
                                            style="font-size:13px">Bán nhà Quận 10</span></a></li>
                            <li>
                                <a href="http://batdongsanphucthinh.vn/cho-thue-nha-tai-tan-hung-quan-7-s110665">Cho
                                    thuê
                                    nhà tân hưng, quận 7</a></li>
                            <li>
                                <a href="http://batdongsanphucthinh.vn/cho-thue-nha-tai-quan-1-s38310">Cho thuê nhà
                                    tại
                                    quận 1</a></li>
                        </ul>
                    </div>
                    <div class="box-module">
                        <div class="bg-modul" style="margin-top:10px"><i class="glyphicon glyphicon-link"></i> Phong
                            thủy
                        </div>
                    </div>
                    <ul class="news-list">
                        <li class="first"><a
                                    href="/tin-tuc/nghe-thay-chon-ngay-dong-tho-gia-dinh-toi-phai-o-nha-dot-3-nam-7891.html"
                                    rel="nofollow"> <img
                                        src="https://batdongsan24h.com.vn/images/private/2018/09/30/131827865197044222.jpg?w=245"
                                        class="img-responsive center-block"
                                        alt="Nghe thầy chọn ngày động thổ, gia đình tôi phải ở nhà dột 3 năm"> Nghe thầy
                                chọn ngày động thổ, gia đình tôi phải ở nhà dột 3 năm </a></li>
                        <li><a href="/tin-tuc/phong-thuy-trong-nha-bep-nhung-dieu-dai-ky-nen-tranh-7864.html"
                               rel="nofollow"><i class="glyphicon glyphicon-menu-right"></i> Phong thủy trong nhà bếp
                                những điều đại kỵ nên tránh</a></li>
                        <li><a href="/tin-tuc/top-con-giap-co-gia-san-do-so-khi-sang-tuoi-40-7858.html"
                               rel="nofollow"><i class="glyphicon glyphicon-menu-right"></i> Top con giáp có gia sản đồ
                                sộ khi sang tuổi 40</a></li>
                        <li><a href="/tin-tuc/nhung-diem-bao-phong-thuy-bao-hieu-ban-sap-vuong-xui-xeo-7852.html"
                               rel="nofollow"><i class="glyphicon glyphicon-menu-right"></i> Những điềm báo phong thủy
                                báo hiệu bạn sắp vướng xui xẻo</a></li>
                        <li><a href="/tin-tuc/dat-hu-gao-chuan-phong-thuy-ruoc-may-man-tai-loc-vao-nha-7845.html"
                               rel="nofollow"><i class="glyphicon glyphicon-menu-right"></i> Đặt hũ gạo chuẩn phong thủy
                                rước may mắn, tài lộc vào nhà</a></li>
                    </ul>
                    <div class="box-module">
                        <div class="bg-modul" style="margin-top:10px"><i class="glyphicon glyphicon-link"></i> Góc lắng
                            nghe
                        </div>
                    </div>
                    <ul class="news-list">
                        <li class="first"><a href="/tin-tuc/nhung-sai-lam-khien-nha-ban-mua-khong-tang-gia-7897.html"
                                             rel="nofollow"> <img
                                        src="https://batdongsan24h.com.vn/images/private/2019/03/31/131984897077222611.jpg?w=245"
                                        class="img-responsive center-block"
                                        alt="Những sai lầm khiến nhà bạn mua không tăng giá"> Những sai lầm khiến nhà
                                bạn mua không tăng giá </a></li>
                        <li><a href="/tin-tuc/toi-lo-mat-co-hoi-mua-mieng-dat-dep-vi-kieng-thang-co-hon-7888.html"
                               rel="nofollow"><i class="glyphicon glyphicon-menu-right"></i> Tôi lỡ mất cơ hội mua miếng
                                đất đẹp vì kiêng tháng cô hồn</a></li>
                        <li><a href="/tin-tuc/ban-dat-coi-chung-dinh-bay-dat-coc-roi-pha-coc-7886.html"
                               rel="nofollow"><i class="glyphicon glyphicon-menu-right"></i> Bán đất coi chừng dính bẫy
                                "đặt cọc rồi... phá cọc"</a></li>
                        <li><a href="/tin-tuc/doi-nha-to-o-ngoai-thanh-lay-chung-cu-nho-o-noi-thanh-7883.html"
                               rel="nofollow"><i class="glyphicon glyphicon-menu-right"></i> Đổi nhà to ở ngoại thành
                                lấy chung cư nhỏ ở nội thành </a></li>
                        <li><a href="/tin-tuc/me-don-than-quyet-dinh-mua-nha-khi-chi-co-120-trieu-7880.html"
                               rel="nofollow"><i class="glyphicon glyphicon-menu-right"></i> Mẹ đơn thân quyết định mua
                                nhà khi chỉ có 120 triệu</a></li>
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
        width: 150px;
        float: left;
        margin-right: 15px;
    }

    #box-home-svip .box-info-list {
        /*width: 521px;*/
        width: 721px;
    }

    .box-info-list {
        float: left;
        width: 538px;
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
        display: inline;
        padding: .2em .6em .3em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: .25em;
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

    .bg-modul {
        background: #15a1b1;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        padding: 6px 16px 6px 13px;
        display: inline-block;
        -ms-border-top-right-radius: 4px;
        border-top-right-radius: 4px;
        -ms-border-top-left-radius: 4px;
        border-top-left-radius: 4px;
        text-align: center;
    }

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
        font-weight: 700;
        /*width: 60px;*/
        display: inline-block;
    }

    .time {
        font-size: 11px;
        white-space: nowrap;
    }


</style>