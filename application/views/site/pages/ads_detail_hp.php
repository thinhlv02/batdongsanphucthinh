<section class="contact">
    <div class="container">
        <div class="row subpage">

            <!--Begin left-->
            <div class="col-xs-9 left land_page">

                <!--Begin land_box-->
                <div class="_box">
                    <p class="title_box"><strong>Cần bán
                            <i class="fa fa-angle-right"></i> <?php echo $ads->title ?></strong>
                    </p>
                    <div class="land_box">

                        <h1 class="mt-0"><?php echo $ads->title ?></h1>

                        <!--Begin imgs_land_box-->
                        <div class="content-news-1 col-md-12 col-sm-12">


                            <div class="demo">
                                <ul id="lightSlider">
                                    <?php
                                    $lightSlider_str = $ads->lightSlider != '' ? $ads->img . '#' . $ads->lightSlider : $ads->img;
                                    //                                $lightSlider_str = $ads->lightSlider != '' ? $ads->lightSlider : $ads->img;
                                    $tags = explode('#', $lightSlider_str);
                                    foreach ($tags as $k => $val) { ?>
                                        <!--                                <li style="width: 450px; height: 338px"-->
                                        <li style="max-height: 703px !important;"
                                            data-thumb="<?php echo public_url('images/ads/' . $val) ?>">
                                            <!--                                    <img style="width: 450px; height: 338px" alt="-->
                                            <? //= $val ?><!--"-->
                                            <img style="max-height: 703px !important;" alt="<?= $val ?>"
                                                 src="<?php echo public_url('images/ads/' . $val) ?>"/>
                                        </li>
                                    <?php } ?>

                                </ul>
                            </div>

                        </div>
                        <!--End imgs_land_box-->

                        <div style="clear: both"></div>

                        <h2><?php echo $ads->title ?></h2>

                        <!--Begin brief_land_box-->
                        <div class="brief_land_box row12">
                            <div class="col-xs-8">
                                <div class="row">
                                    <div class="col-xs-6 ibrief"><strong>- Mã số tin:</strong>
                                        PT-<?php echo $ads->id . substr($ads->code, 0, 3) ?></div>
                                    <div class="col-xs-6 ibrief"><strong>- Ngày cập nhật:</strong>
                                        <?php echo date('d-m-Y', strtotime($ads->created_at)) ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-6 ibrief"><strong>- Lượt xem:</strong> <?php echo $ads->view ?>
                                    </div>
                                    <div class="col-xs-6 ibrief"><strong>- Ngày hết hạn:</strong>
                                        <span class="danger">
                                            <?php echo date('d-m-Y',strtotime('+30 days',strtotime($ads->created_at))) . PHP_EOL; ?></span></div>

                                </div>

                                <div class="row">
                                    <div class="col-xs-6 ibrief"><strong>- DTMB:</strong> <?php echo $ads->acreage ?>
                                        m<sup>2</sup></div>
                                    <div class="col-xs-6 ibrief"><strong>- DTSD:</strong> <?php echo $ads->acreage ?>
                                        m<sup>2</sup></div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-6 ibrief"><strong>- Danh mục:</strong>
                                        <a href="javascript:void(0)">Cần bán</a></div>
                                    <div class="col-xs-6 ibrief"><strong>- Loại BĐS:</strong>
                                        <a href="javascript:void(0)">
                                            <?php echo $ads->productcat !='' ? $ads->productcat: 'KXD' ?></a></div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-12 ibrief">
                                        <strong>- Địa chỉ:</strong> <?php echo $ads->area ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-4">
                                <div class="row">
                                    <div class="col-xs-12 ibrief text_right price_ibrief">
                                        <strong>Giá:</strong> <?php echo $ads->price ?> VND <p>(Có thỏa thuận)</p>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!--End brief_land_box-->
                        <div style="clear: both;"></div>

                        <div class="title_land_box">Mô tả chi tiết:</div>

                        <div class="pack_land_box">
                            <div class="row12">
                                <div class="col-xs-4 pland"><strong>Chiều rộng:</strong>
                                    <?php echo $ads->width !='' ? $ads->width: 0 ?>m</div>
                                <div class="col-xs-4 pland"><strong>Chiều dài:</strong>
                                    <?php echo $ads->landwidth !='' ? $ads->landwidth: 0 ?>m</div>
                                <div class="col-xs-4 pland"><strong>Giấy tờ:</strong> Sổ đỏ Chính Chủ</div>
                            </div>

                            <div class="row12">
                                <div class="col-xs-4 pland"><strong>Diện tích MB:</strong> <?php echo $ads->acreage ?> m<sup>2</sup>
                                </div>
                                <div class="col-xs-4 pland"><strong>Diện tích SD:</strong> <?php echo $ads->acreage ?> m<sup>2</sup>
                                </div>
                                <div class="col-xs-4 pland"><strong>Hướng:</strong>
                                    <?php echo $ads->homedirection !='' ? $ads->homedirection: 'KXD' ?></div>
                            </div>

                            <div class="row12">
                                <div class="col-xs-12 pland">
                                    <strong>Tên dự án:</strong>
                                    <?php echo $ads->project !='' ? $ads->project: 'KXD' ?>
                                </div>
                            </div>

                            <div class="row12">
                                <div class="col-xs-12 pland">
                                    <h3 class="title_detail_pland">Thông tin chi tiết:</h3>
                                    <div class="body_detail_pland line-height-2">
                                        <?php echo $ads->content ?>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div style="clear: both"></div>

                        <div class="title_land_box">Thông tin liên hệ:</div>
                        <div class="pack_land_box">
                            <div class="row12">
                                <div class="col-xs-12 pland"><strong>Người liên hệ :</strong>
                                    <?php echo $ads->brname !='' ? $ads->brname: 'Qua điện thoại' ?>
                                    </div>
                            </div>
                            <div class="row12">
                                <div class="col-xs-12 pland">
                                    <strong>Địa chỉ :</strong> <?php echo $ads->area ?>
                                </div>
                            </div>
                            <div class="row12">
                                <div class="col-xs-12 pland"><strong>Điện thoại :</strong>
                                    <a href="tel:0989.186.179"><?php echo $ads->phone ?></a></div>
                            </div>
                        </div>

                        <div style="clear: both"></div>

                        <div class="title_land_box">Bản đồ vị trí:</div>
                        <div class="pack_land_box" style="border: 0;">
                            <div class="row">
                                <div class="col-xs-12 pland" style="border: 0;">
                                </div>
                            </div>
                        </div>
                        
<!--                        <div style="clear: both;"></div>-->

                        <div class="title1_land_box"><strong>Thông tin người đăng</strong></div>
                        <!--Begin brief_land_box-->
                        <div class="row pack_land_box poster_land_box" style="border: 0;padding-left:10px;">
                            <div class="col-xs-3 pic_poster_land_box" style="padding-right: 30px !important;">
                                <p style="padding: 4px;"><img src="<?php echo public_url('/images/ads/default.png') ?>"
                                        alt="Bất động sản Phúc Thịnh">
                                </p>
                            </div>

                            <div class="col-xs-9 detail_poster_land_box">
                                <p><strong>Công ty/cá nhân</strong>: Bất động sản Phúc Thịnh</p>
                                <p><strong>Địa chỉ email</strong>: <?php echo $contact->email ?></p>
                                <p><strong>Số điện thoại</strong>: <?php echo $contact->phone ?></p>
                                <p>
                                    <strong>Địa chỉ liên lạc</strong>: Trụ sở: <?php echo $contact->address ?>
                                </p>
                                <p><strong>Website</strong>:
                                    <a href="<?php echo base_url() ?>" target="_blank"><?php echo base_url() ?></a></p>
                            </div>
                        </div>
                        <!--End brief_land_box-->
                    </div>
                </div>
                <!--End detail_land-->


                <!--Begin two_cols-->

                <div class="left_box top3_box">
                    <p class="title_box1"><strong>CÁC TIN CÙNG TIÊU CHÍ TÌM KIẾM</strong></p>
                    <div>
                        <div class="row12 body_top2_box">
                            <div class="col-xs-6 top2 top2_up">
                                <div class="row _vip_hot">
                                    <div class="col-xs-5 ltop2">
                                        <a href="javascript:void(0)"><img
                                                    src="http://nhadathaiphong.vn/images/attachment/thumb/2970so-do-va-so-hong_2605083022.jpg"
                                                    alt="Bán nhà lô 16 đường Lê Hồng Phong, Đằng Lâm, Hải An, Hải Phòng"></a>
                                        <div class="code_row">HP-59041</div>
                                    </div>

                                    <div class="col-xs-7 rtop2">
                                        <h3>
                                            <a href="javascript:void(0)">Bán
                                                nhà lô 16 đường Lê Hồng Phong, Đằng Lâm, Hải An, Hải Phòng </a>
                                            <span></span>
                                        </h3>
                                        <div>Ưu điểm thiết kế nhà ở kết hợp làm văn phòng, nhà để được 2 ô tô, điện hệ
                                            thống điều hoà chạy riêng biệt, hút mùi các phòng thông 4 tầng
                                        </div>
                                        <p>
                                            <strong>DTMB:</strong> 60 m2 - <strong>Giá:</strong>
                                            <span>
												Thỏa thuận												</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="icon_viphot">
                                    <img src="http://nhadathaiphong.vn/css/images/vip2.gif"
                                         alt="Bán nhà lô 16 đường Lê Hồng Phong, Đằng Lâm, Hải An, Hải Phòng">
                                </div>
                            </div>
                            <div class="col-xs-6 top2 top2_up">
                                <div class="row _vip _hot _vip_hot">
                                    <div class="col-xs-5 ltop2">
                                        <a href="javascript:void(0)"><img
                                                    src="http://nhadathaiphong.vn/images/attachment/thumb/43611.jpg"
                                                    alt="Bán nhà số 50 lô 16MR Lê Hồng Phong, Đằng Lâm, Hải An, Hải Phòng"></a>
                                        <div class="code_row">HP-58265</div>
                                    </div>

                                    <div class="col-xs-7 rtop2">
                                        <h3>
                                            <a href="javascript:void(0)">Bán
                                                nhà số 50 lô 16MR Lê Hồng Phong, Đằng Lâm, Hải An, Hải Phòng
                                                <em>[ĐÃ XEM]</em> </a>
                                            <span></span>
                                        </h3>
                                        <div>Căn nhà nằm trên mặt đường đôi 30m, để lại nội thất toàn bộ, nhà ở kết hợp
                                            văn phòng, hướng Tây Nam chính và bên cạnh có mặt thoáng Đông Nam
                                        </div>
                                        <p>
                                            <strong>DTMB:</strong> 60 m2 - <strong>Giá:</strong>
                                            <span>
												4.6 tỷ VND												</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="icon_viphot">
                                    <img src="http://nhadathaiphong.vn/css/images/vip2.gif"
                                         alt="Bán nhà số 50 lô 16MR Lê Hồng Phong, Đằng Lâm, Hải An, Hải Phòng"><img
                                            src="http://nhadathaiphong.vn/css/images/vip1.gif"
                                            alt="Bán nhà số 50 lô 16MR Lê Hồng Phong, Đằng Lâm, Hải An, Hải Phòng">
                                </div>
                            </div>
                            <div class="col-xs-6 top2 top2_up">
                                <div class="row">
                                    <div class="col-xs-5 ltop2">
                                        <a href="javascript:void(0)"><img
                                                    src="http://nhadathaiphong.vn/images/attachment/thumb/9554b1eac7a164d1818fd8c0.jpg"
                                                    alt="Bán nhà 4 tầng độc lập khu phân lô cao cấp đường Lê Hồng Phong, kết hợp vừa ở vừa làm văn phòng"></a>
                                        <div class="code_row">HP-57746</div>
                                    </div>

                                    <div class="col-xs-7 rtop2">
                                        <h3>
                                            <a href="javascript:void(0)">Bán
                                                nhà 4 tầng độc lập khu phân lô cao cấp đường Lê Hồng Phong, kết hợp vừa
                                                ở vừa làm văn phòng </a>
                                            <span></span>
                                        </h3>
                                        <div> Vị trí siêu đẹp, vừa ở vừa làm văn phòng mà gara vẫn để được 2 xe ô tô,
                                            nằm trên tuyến đường đôi 30m phía trước để được rất rất nhiều xe ô tô, xe
                                            máy
                                        </div>
                                        <p>
                                            <strong>DTMB:</strong> 60 m2 - <strong>Giá:</strong>
                                            <span>
												4.8 tỷ VND												</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="icon_viphot">
                                </div>
                            </div>
                            <div class="col-xs-6 top2 top2_up">
                                <div class="row">
                                    <div class="col-xs-5 ltop2">
                                        <a href="javascript:void(0)"><img
                                                    src="http://nhadathaiphong.vn/images/attachment/thumb/31922.jpg"
                                                    alt="Bán nhà 4 tầng nội thất cao cấp khu 333 Văn Cao, cơ hội đầu tư cho thuê lâu dài rất tốt"></a>
                                        <div class="code_row">HP-51520</div>
                                    </div>

                                    <div class="col-xs-7 rtop2">
                                        <h3>
                                            <a href="javascript:void(0)">Bán
                                                nhà 4 tầng nội thất cao cấp khu 333 Văn Cao, cơ hội đầu tư cho thuê lâu
                                                dài rất tốt </a>
                                            <span></span>
                                        </h3>
                                        <div>- Nhà 4 tầng xây độc lập, kiên cố, khung cột chắc chắn, thiết kế hiện đại,
                                            đường nội bộ rộng 12m, khu dân cư dân trí cao xung quanh có nhiều tiện ích
                                        </div>
                                        <p>
                                            <strong>DTMB:</strong> 85 m2 - <strong>Giá:</strong>
                                            <span>
												5 tỷ VND												</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="icon_viphot">
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <!--End two_cols-->
                <!--Begin two_cols-->
                <div style="clear: both"></div>
                <div class="left_box top3_box">
                    <p class="title_box1"><strong>CÁC TIN LIÊN QUAN</strong></p>
                    <div>
                        <div class="row12 body_top2_box">
                            <div class="col-xs-6 top2 top2_up">
                                <div class="row">
                                    <div class="col-xs-5 ltop2">
                                        <a href="javascript:void(0)"><img
                                                    src="http://nhadathaiphong.vn/images/attachment/thumb/77210.jpg"
                                                    alt="Bán nhà lô 17 Lê Hồng Phong (cạnh nhà hàng Amakong), Hải An, Hải Phòng"></a>
                                        <div class="code_row">HP-52909</div>
                                    </div>

                                    <div class="col-xs-7 rtop2">
                                        <h3>
                                            <a href="javascript:void(0)">Bán
                                                nhà lô 17 Lê Hồng Phong (cạnh nhà hàng Amakong), Hải An, Hải Phòng </a>
                                            <span></span>
                                        </h3>
                                        <div>Nhà xây 4 tầng độc lập, kiên cố, thiết kế hiện đại, nội thất cao cấp, gần
                                            trường, chợ, siêu thị, an ninh tốt, hướng Đông Bắc, sổ đỏ chính chủ
                                        </div>
                                        <p>
                                            <strong>DTMB:</strong> 60 m2 - <strong>Giá:</strong>
                                            <span>
												4.5 tỷ VND												</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="icon_viphot">
                                    <img src="http://nhadathaiphong.vn/css/images/new.gif"
                                         alt="Bán nhà lô 17 Lê Hồng Phong (cạnh nhà hàng Amakong), Hải An, Hải Phòng">
                                </div>
                            </div>
                            <div class="col-xs-6 top2 top2_up">
                                <div class="row">
                                    <div class="col-xs-5 ltop2">
                                        <a href="javascript:void(0)"><img
                                                    src="http://nhadathaiphong.vn/images/attachment/thumb/8941.jpg"
                                                    alt="Bán nhà 4 tầng độc lập thiết kế tuyệt mĩ khu phân lô đường Văn Cao, Hải An, Hải Phòng."></a>
                                        <div class="code_row">HP-51430</div>
                                    </div>

                                    <div class="col-xs-7 rtop2">
                                        <h3>
                                            <a href="javascript:void(0)">Bán
                                                nhà 4 tầng độc lập thiết kế tuyệt mĩ khu phân lô đường Văn Cao, Hải An,
                                                Hải Phòng. </a>
                                            <span></span>
                                        </h3>
                                        <div>- Nhà xây 4 tầng độc lập, vừa hoàn thiện được 2 năm với thiết kế hiện đại
                                            kiểu dáng Tân cổ điển tỉ mỉ đến từng chi tiết nhỏ trong ngôi nhà
                                        </div>
                                        <p>
                                            <strong>DTMB:</strong> 83 m2 - <strong>Giá:</strong>
                                            <span>
												5.3 tỷ VND												</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="icon_viphot">
                                </div>
                            </div>
                            <div class="col-xs-6 top2 top2_up">
                                <div class="row">
                                    <div class="col-xs-5 ltop2">
                                        <a href="javascript:void(0)"><img
                                                    src="http://nhadathaiphong.vn/images/attachment/thumb/8196f7cd80a66169843as7dd78.jpg"
                                                    alt="Bán thửa đất 57m2 mặt đường 21m khu TĐC Đồng Giáp, Hải An, Hải Phòng"></a>
                                        <div class="code_row">HP-60619</div>
                                    </div>

                                    <div class="col-xs-7 rtop2">
                                        <h3>
                                            <a href="javascript:void(0)">Bán
                                                thửa đất 57m2 mặt đường 21m khu TĐC Đồng Giáp, Hải An, Hải Phòng </a>
                                            <span></span>
                                        </h3>
                                        <div> Thửa đất nằm trên mặt đường nội bộ rộng 21m vỉa hè 2 bên, với tổng diện
                                            tích 57m2, mặt tiền 4m, vị trí đắc địa. - Sắp tới đường 40m ngoài sẽ mở
                                            thông
                                        </div>
                                        <p>
                                            <strong>DTMB:</strong> 57.2 m2 - <strong>Giá:</strong>
                                            <span>
												26.5 triệu VND/M2												</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="icon_viphot">
                                </div>
                            </div>
                            <div class="col-xs-6 top2 top2_up">
                                <div class="row _vip_hot">
                                    <div class="col-xs-5 ltop2">
                                        <a href="javascript:void(0)"><img
                                                    src="http://nhadathaiphong.vn/images/attachment/thumb/23589.jpg"
                                                    alt="Bán nhà số 201 lô 16 mở rộng Lê Hồng Phong, Đằng Lâm, Hải An, Hải Phòng"></a>
                                        <div class="code_row">HP-52239</div>
                                    </div>

                                    <div class="col-xs-7 rtop2">
                                        <h3>
                                            <a href="javascript:void(0)">Bán
                                                nhà số 201 lô 16 mở rộng Lê Hồng Phong, Đằng Lâm, Hải An, Hải Phòng </a>
                                            <span></span>
                                        </h3>
                                        <div>Nhà xây 4 tầng kiên cố, thiết kế hiện đại, đường rộng, vỉa hè 2 bên, dân cư
                                            văn minh, gần trường, chợ, hướng Tây Bắc, sổ đỏ chính chủ
                                        </div>
                                        <p>
                                            <strong>DTMB:</strong> 0 m2 - <strong>Giá:</strong>
                                            <span>
												4 tỷ VND												</span>
                                        </p>
                                    </div>
                                </div>

                                <div class="icon_viphot">
                                    <img src="http://nhadathaiphong.vn/css/images/vip2.gif"
                                         alt="Bán nhà số 201 lô 16 mở rộng Lê Hồng Phong, Đằng Lâm, Hải An, Hải Phòng">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End two_cols-->

            </div>
            <!--End left-->

            <!--Begin right-->
            <div class="col-xs-3 right">
                <!--Begin two_cols-->
                <div class="right_box vip_box">
                    <p class="title_box"><a href="javascript:void(0)"><strong>TIN VIP</strong></a></p>
                    <div>
                        <div class="bx-wrapper" style="max-width: 100%; margin: 0px auto;">
                            <div class="bx-viewport"
                                 style="width: 100%; overflow: hidden; position: relative; height: 1638px;">
                                <ul class="vip_slider"
                                    style="width: auto; position: relative; transition-duration: 0.5s; transform: translate3d(0px, -3402px, 0px);">
                                    <li style="float: none; list-style: none; position: relative; width: 298px;"
                                        class="bx-clone">
                                        <dl class=" _vip _hot">
                                            <dt>
                                                <a href="javascript:void(0)"><img
                                                            src="http://nhadathaiphong.vn/images/attachment/thumb/93961.jpg"
                                                            alt="Bán nhà mặt đường Nguyễn Văn Linh, Lê Chân, Hải Phòng (gần chợ Hàng)"></a>
                                                <div class="icon_viphot">
                                                    <img src="http://nhadathaiphong.vn/css/images/vip2.gif"
                                                         alt="Bán nhà mặt đường Nguyễn Văn Linh, Lê Chân, Hải Phòng (gần chợ Hàng)">
                                                </div>
                                            </dt>
                                            <dd>
                                                <h3>
                                                    <a href="javascript:void(0)">Bán
                                                        nhà mặt đường Nguyễn Văn Linh, Lê Chân, Hải Phòng (gần chợ
                                                        Hàng)</a>
                                                </h3>
                                                <p><strong>Diện tích:</strong> 68.5 m2</p>
                                                <p><strong>Giá:</strong> <span>5 tỷ</span></p>
                                                <p><strong>Hướng:</strong> Nam</p>
                                            </dd>
                                        </dl>
                                    </li>
                                    <li style="float: none; list-style: none; position: relative; width: 298px;"
                                        class="bx-clone">
                                        <dl class=" _vip _hot">
                                            <dt>
                                                <a href="javascript:void(0)"><img
                                                            src="http://nhadathaiphong.vn/images/attachment/thumb/43611.jpg"
                                                            alt="Bán nhà số 50 lô 16MR Lê Hồng Phong, Đằng Lâm, Hải An, Hải Phòng"></a>
                                                <div class="icon_viphot">
                                                    <img src="http://nhadathaiphong.vn/css/images/vip2.gif"
                                                         alt="Bán nhà số 50 lô 16MR Lê Hồng Phong, Đằng Lâm, Hải An, Hải Phòng">
                                                </div>
                                            </dt>
                                            <dd>
                                                <h3>
                                                    <a href="javascript:void(0)">Bán
                                                        nhà số 50 lô 16MR Lê Hồng Phong, Đằng Lâm, Hải An, Hải Phòng</a>
                                                </h3>
                                                <p><strong>Diện tích:</strong> 60 m2</p>
                                                <p><strong>Giá:</strong> <span>4.6 tỷ</span></p>
                                                <p><strong>Hướng:</strong> Tây Nam</p>
                                            </dd>
                                        </dl>
                                    </li>
                                    <li style="float: none; list-style: none; position: relative; width: 298px;"
                                        class="bx-clone">
                                        <dl class=" _hot">
                                            <dt>
                                                <a href="javascript:void(0)"><img
                                                            src="http://nhadathaiphong.vn/images/attachment/thumb/2376viber image.jpg"
                                                            alt="BÁN CĂN SHOPHOUSE 2 MẶT TIỀN SỐ 10 KHU CHỢ ĐẦU MỐI HOA QUẢ,TÁI ĐỊNH CƯ XI MĂNG, SỞ DẦU, HỒNG BÀNG, HẢI PHÒNG."></a>
                                                <div class="icon_viphot">
                                                    <img src="http://nhadathaiphong.vn/css/images/vip2.gif"
                                                         alt="BÁN CĂN SHOPHOUSE 2 MẶT TIỀN SỐ 10 KHU CHỢ ĐẦU MỐI HOA QUẢ,TÁI ĐỊNH CƯ XI MĂNG, SỞ DẦU, HỒNG BÀNG, HẢI PHÒNG.">
                                                </div>
                                            </dt>
                                            <dd>
                                                <h3>
                                                    <a href="javascript:void(0)">BÁN
                                                        CĂN SHOPHOUSE 2 MẶT TIỀN SỐ 10 KHU CHỢ ĐẦU MỐI HOA QUẢ,TÁI ĐỊNH
                                                        CƯ XI MĂNG, SỞ DẦU, HỒNG BÀNG, HẢI PHÒNG.</a>
                                                </h3>
                                                <p><strong>Diện tích:</strong> 40 m2</p>
                                                <p><strong>Giá:</strong> <span>2 tỷ</span></p>
                                                <p><strong>Hướng:</strong> Tây Tây Bắc</p>
                                            </dd>
                                        </dl>
                                    </li>
                                    <li style="float: none; list-style: none; position: relative; width: 298px;"
                                        class="bx-clone">
                                        <dl class=" _hot">
                                            <dt>
                                                <a href="javascript:void(0)"><img
                                                            src="http://nhadathaiphong.vn/images/attachment/thumb/852ban_dat_cat_ba_1.jpg"
                                                            alt="BÁN ĐẤT CÁT BÀ VỊ TRÍ ĐẸP - GIÁ CẠNH TRANH"></a>
                                                <div class="icon_viphot">
                                                    <img src="http://nhadathaiphong.vn/css/images/vip2.gif"
                                                         alt="BÁN ĐẤT CÁT BÀ VỊ TRÍ ĐẸP - GIÁ CẠNH TRANH">
                                                </div>
                                            </dt>
                                            <dd>
                                                <h3>
                                                    <a href="javascript:void(0)">BÁN
                                                        ĐẤT CÁT BÀ VỊ TRÍ ĐẸP - GIÁ CẠNH TRANH</a>
                                                </h3>
                                                <p><strong>Diện tích:</strong> 300 m2</p>
                                                <p><strong>Giá:</strong> <span>100 triệu</span></p>
                                                <p><strong>Hướng:</strong> Liên hệ</p>
                                            </dd>
                                        </dl>
                                    </li>
                                    <li style="float: none; list-style: none; position: relative; width: 298px;"
                                        class="bx-clone">
                                        <dl class="">
                                            <dt>
                                                <a href="javascript:void(0)"><img
                                                            src="http://nhadathaiphong.vn/images/attachment/thumb/43651.jpg"
                                                            alt="Bán nhà số 212 Trung Hành, Hải An, Hải Phòng"></a>
                                                <div class="icon_viphot">
                                                    <img src="http://nhadathaiphong.vn/css/images/new.gif"
                                                         alt="Bán nhà số 212 Trung Hành, Hải An, Hải Phòng"><img
                                                            src="http://nhadathaiphong.vn/css/images/vip2.gif"
                                                            alt="Bán nhà số 212 Trung Hành, Hải An, Hải Phòng">
                                                </div>
                                            </dt>
                                            <dd>
                                                <h3>
                                                    <a href="javascript:void(0)">Bán
                                                        nhà số 212 Trung Hành, Hải An, Hải Phòng</a>
                                                </h3>
                                                <p><strong>Diện tích:</strong> 40 m2</p>
                                                <p><strong>Giá:</strong> <span>1.7 tỷ</span></p>
                                                <p><strong>Hướng:</strong> Đông Nam</p>
                                            </dd>
                                        </dl>
                                    </li>
                                    <li style="float: none; list-style: none; position: relative; width: 298px;"
                                        class="bx-clone">
                                        <dl class="">
                                            <dt>
                                                <a href="/ban-nha-trong-phu-8-xom-chua-hoang-mai-an-duong-hai-phong-bds50723.htm"><img
                                                            src="http://nhadathaiphong.vn/images/attachment/thumb/59689.jpg"
                                                            alt="Bán nhà trong phụ 8 xóm Chùa, Hoàng Mai, An Dương, Hải Phòng"></a>
                                                <div class="icon_viphot">
                                                    <img src="http://nhadathaiphong.vn/css/images/new.gif"
                                                         alt="Bán nhà trong phụ 8 xóm Chùa, Hoàng Mai, An Dương, Hải Phòng"><img
                                                            src="http://nhadathaiphong.vn/css/images/vip2.gif"
                                                            alt="Bán nhà trong phụ 8 xóm Chùa, Hoàng Mai, An Dương, Hải Phòng">
                                                </div>
                                            </dt>
                                            <dd>
                                                <h3>
                                                    <a href="/ban-nha-trong-phu-8-xom-chua-hoang-mai-an-duong-hai-phong-bds50723.htm">Bán
                                                        nhà trong phụ 8 xóm Chùa, Hoàng Mai, An Dương, Hải Phòng</a>
                                                </h3>
                                                <p><strong>Diện tích:</strong> 50 m2</p>
                                                <p><strong>Giá:</strong> <span>790 triệu</span></p>
                                                <p><strong>Hướng:</strong> Tây Nam</p>
                                            </dd>
                                        </dl>
                                    </li>
                                    <li style="float: none; list-style: none; position: relative; width: 298px;"
                                        class="bx-clone">
                                        <dl class="">
                                            <dt>
                                                <a href="/ban-nha-trong-xom-nam-1-cho-hoang-mai-dong-thai-an-duong-hai-phong-bds54001.htm"><img
                                                            src="http://nhadathaiphong.vn/images/attachment/thumb/5031z20.jpg"
                                                            alt="Bán nhà trong Xóm Nam 1 chợ Hoàng Mai, Đồng Thái, An Dương, Hải Phòng"></a>
                                                <div class="icon_viphot">
                                                    <img src="http://nhadathaiphong.vn/css/images/new.gif"
                                                         alt="Bán nhà trong Xóm Nam 1 chợ Hoàng Mai, Đồng Thái, An Dương, Hải Phòng"><img
                                                            src="http://nhadathaiphong.vn/css/images/vip2.gif"
                                                            alt="Bán nhà trong Xóm Nam 1 chợ Hoàng Mai, Đồng Thái, An Dương, Hải Phòng">
                                                </div>
                                            </dt>
                                            <dd>
                                                <h3>
                                                    <a href="/ban-nha-trong-xom-nam-1-cho-hoang-mai-dong-thai-an-duong-hai-phong-bds54001.htm">Bán
                                                        nhà trong Xóm Nam 1 chợ Hoàng Mai, Đồng Thái, An Dương, Hải
                                                        Phòng</a>
                                                </h3>
                                                <p><strong>Diện tích:</strong> 50.6 m2</p>
                                                <p><strong>Giá:</strong> <span>1.1 tỷ</span></p>
                                                <p><strong>Hướng:</strong> Đông Bắc</p>
                                            </dd>
                                        </dl>
                                    </li>
                                    <li style="float: none; list-style: none; position: relative; width: 298px;"
                                        class="bx-clone">
                                        <dl class=" _vip">
                                            <dt>
                                                <a href="/ban-nha-mat-duong-so-410-thien-loi-le-chan-hai-phong-bds53658.htm"><img
                                                            src="http://nhadathaiphong.vn/images/attachment/thumb/2396z120.jpg"
                                                            alt="Bán nhà mặt đường số 410 Thiên Lôi, Lê Chân, Hải Phòng"></a>
                                                <div class="icon_viphot">
                                                    <img src="http://nhadathaiphong.vn/css/images/new.gif"
                                                         alt="Bán nhà mặt đường số 410 Thiên Lôi, Lê Chân, Hải Phòng"><img
                                                            src="http://nhadathaiphong.vn/css/images/vip2.gif"
                                                            alt="Bán nhà mặt đường số 410 Thiên Lôi, Lê Chân, Hải Phòng">
                                                </div>
                                            </dt>
                                            <dd>
                                                <h3>
                                                    <a href="/ban-nha-mat-duong-so-410-thien-loi-le-chan-hai-phong-bds53658.htm">Bán
                                                        nhà mặt đường số 410 Thiên Lôi, Lê Chân, Hải Phòng</a>
                                                </h3>
                                                <p><strong>Diện tích:</strong> 60 m2</p>
                                                <p><strong>Giá:</strong> <span>Thỏa thuận</span></p>
                                                <p><strong>Hướng:</strong> Đông Bắc</p>
                                            </dd>
                                        </dl>
                                    </li>
                                    <li style="float: none; list-style: none; position: relative; width: 298px;"
                                        class="bx-clone">
                                        <dl class="">
                                            <dt>
                                                <a href="/ban-khu-nha-o-cao-cap-so-318-nguyen-van-linh-le-chan-hai-phong-bds32701.htm"><img
                                                            src="http://nhadathaiphong.vn/images/attachment/thumb/99459..jpg"
                                                            alt="Bán khu nhà ở cao cấp số 318 Nguyễn Văn Linh, Lê Chân, Hải Phòng"></a>
                                                <div class="icon_viphot">
                                                    <img src="http://nhadathaiphong.vn/css/images/new.gif"
                                                         alt="Bán khu nhà ở cao cấp số 318 Nguyễn Văn Linh, Lê Chân, Hải Phòng"><img
                                                            src="http://nhadathaiphong.vn/css/images/vip2.gif"
                                                            alt="Bán khu nhà ở cao cấp số 318 Nguyễn Văn Linh, Lê Chân, Hải Phòng">
                                                </div>
                                            </dt>
                                            <dd>
                                                <h3>
                                                    <a href="/ban-khu-nha-o-cao-cap-so-318-nguyen-van-linh-le-chan-hai-phong-bds32701.htm">Bán
                                                        khu nhà ở cao cấp số 318 Nguyễn Văn Linh, Lê Chân, Hải Phòng</a>
                                                </h3>
                                                <p><strong>Diện tích:</strong> 70 m2</p>
                                                <p><strong>Giá:</strong> <span>3.5 tỷ</span></p>
                                                <p><strong>Hướng:</strong> Tây Bắc</p>
                                            </dd>
                                        </dl>
                                    </li>
                                    <li style="float: none; list-style: none; position: relative; width: 298px;"
                                        class="bx-clone">
                                        <dl class=" _vip">
                                            <dt>
                                                <a href="/ban-nha-so-5d273-thien-loi-le-chan-hai-phong-bds56865.htm"><img
                                                            src="http://nhadathaiphong.vn/images/attachment/thumb/1600z120.jpg"
                                                            alt="Bán nhà số 5D/273 Thiên Lôi, Lê Chân, Hải Phòng"></a>
                                                <div class="icon_viphot">
                                                    <img src="http://nhadathaiphong.vn/css/images/new.gif"
                                                         alt="Bán nhà số 5D/273 Thiên Lôi, Lê Chân, Hải Phòng"><img
                                                            src="http://nhadathaiphong.vn/css/images/vip2.gif"
                                                            alt="Bán nhà số 5D/273 Thiên Lôi, Lê Chân, Hải Phòng">
                                                </div>
                                            </dt>
                                            <dd>
                                                <h3>
                                                    <a href="/ban-nha-so-5d273-thien-loi-le-chan-hai-phong-bds56865.htm">Bán
                                                        nhà số 5D/273 Thiên Lôi, Lê Chân, Hải Phòng</a>
                                                </h3>
                                                <p><strong>Diện tích:</strong> 51.5 m2</p>
                                                <p><strong>Giá:</strong> <span>1.85 tỷ</span></p>
                                                <p><strong>Hướng:</strong> Đông Nam</p>
                                            </dd>
                                        </dl>
                                    </li>
                                    <li style="float: none; list-style: none; position: relative; width: 298px;"
                                        class="bx-clone">
                                        <dl class="">
                                            <dt>
                                                <a href="/chuyen-nhuong-2-lo-dat-lien-ke-tai-trang-quan-an-dong-an-duong-hai-phong-bds59800.htm"><img
                                                            src="http://nhadathaiphong.vn/images/attachment/thumb/96102.jpg"
                                                            alt="Chuyển nhượng 2 lô đất liền kề tại Trang Quan, An Đồng, An Dương, Hải Phòng"></a>
                                                <div class="icon_viphot">
                                                    <img src="http://nhadathaiphong.vn/css/images/new.gif"
                                                         alt="Chuyển nhượng 2 lô đất liền kề tại Trang Quan, An Đồng, An Dương, Hải Phòng"><img
                                                            src="http://nhadathaiphong.vn/css/images/vip2.gif"
                                                            alt="Chuyển nhượng 2 lô đất liền kề tại Trang Quan, An Đồng, An Dương, Hải Phòng">
                                                </div>
                                            </dt>
                                            <dd>
                                                <h3>
                                                    <a href="/chuyen-nhuong-2-lo-dat-lien-ke-tai-trang-quan-an-dong-an-duong-hai-phong-bds59800.htm">Chuyển
                                                        nhượng 2 lô đất liền kề tại Trang Quan, An Đồng, An Dương, Hải
                                                        Phòng</a>
                                                </h3>
                                                <p><strong>Diện tích:</strong> 63 m2</p>
                                                <p><strong>Giá:</strong> <span>19 triệu</span></p>
                                                <p><strong>Hướng:</strong> Đông Bắc</p>
                                            </dd>
                                        </dl>
                                    </li>
                                    <li style="float: none; list-style: none; position: relative; width: 298px;"
                                        class="bx-clone">
                                        <dl class="">
                                            <dt>
                                                <a href="/cho-thue-van-phong-va-can-ho-toa-nha-victory-so-119-nguyen-duc-canh-le-chan-hai-phong-bds58821.htm"><img
                                                            src="http://nhadathaiphong.vn/images/attachment/thumb/748310.jpg"
                                                            alt="Cho thuê văn phòng và căn hộ tòa nhà Victory số 119 Nguyễn Đức Cảnh, Lê Chân, Hải Phòng"></a>
                                                <div class="icon_viphot">
                                                    <img src="http://nhadathaiphong.vn/css/images/new.gif"
                                                         alt="Cho thuê văn phòng và căn hộ tòa nhà Victory số 119 Nguyễn Đức Cảnh, Lê Chân, Hải Phòng"><img
                                                            src="http://nhadathaiphong.vn/css/images/vip2.gif"
                                                            alt="Cho thuê văn phòng và căn hộ tòa nhà Victory số 119 Nguyễn Đức Cảnh, Lê Chân, Hải Phòng">
                                                </div>
                                            </dt>
                                            <dd>
                                                <h3>
                                                    <a href="/cho-thue-van-phong-va-can-ho-toa-nha-victory-so-119-nguyen-duc-canh-le-chan-hai-phong-bds58821.htm">Cho
                                                        thuê văn phòng và căn hộ tòa nhà Victory số 119 Nguyễn Đức Cảnh,
                                                        Lê Chân, Hải Phòng</a>
                                                </h3>
                                                <p><strong>Diện tích:</strong> 500 m2</p>
                                                <p><strong>Giá:</strong> <span>Thỏa thuận</span></p>
                                                <p><strong>Hướng:</strong> Tây Bắc</p>
                                            </dd>
                                        </dl>
                                    </li>

                                    <li style="float: none; list-style: none; position: relative; width: 298px;"
                                        class="bx-clone">
                                        <dl class="">
                                            <dt>
                                                <a href="/ban-nha-so-6688-thien-loi-le-chan-hai-phong-bds29782.htm"><img
                                                            src="http://nhadathaiphong.vn/images/attachment/thumb/99120.jpg"
                                                            alt="Bán nhà số 6/688 Thiên Lôi, Lê Chân, Hải Phòng"></a>
                                                <div class="icon_viphot">
                                                    <img src="http://nhadathaiphong.vn/css/images/new.gif"
                                                         alt="Bán nhà số 6/688 Thiên Lôi, Lê Chân, Hải Phòng"><img
                                                            src="http://nhadathaiphong.vn/css/images/vip2.gif"
                                                            alt="Bán nhà số 6/688 Thiên Lôi, Lê Chân, Hải Phòng">
                                                </div>
                                            </dt>
                                            <dd>
                                                <h3>
                                                    <a href="/ban-nha-so-6688-thien-loi-le-chan-hai-phong-bds29782.htm">Bán
                                                        nhà số 6/688 Thiên Lôi, Lê Chân, Hải Phòng</a>
                                                </h3>
                                                <p><strong>Diện tích:</strong> 56 m2</p>
                                                <p><strong>Giá:</strong> <span>1.82 tỷ</span></p>
                                                <p><strong>Hướng:</strong> Đông Bắc</p>
                                            </dd>
                                        </dl>
                                    </li>
                                </ul>
                            </div>
                            <div class="bx-controls bx-has-controls-direction">
                                <div class="bx-controls-direction">
                                    <a class="bx-prev" href="">Prev</a><a class="bx-next" href="">Next</a></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--Begin two_cols-->
                <div class="adv_box">
                </div>
            </div>
            <!--End right-->

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

    .detail-more-info {
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        width: 100%;
        /* height: 28px; */
        line-height: 28px;
        color: white;
        background: #15a1b1;
        /* padding-left: 25px; */
        padding: 1px;
        padding-left: 5px;
        margin-bottom: 5px;
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
        /*display: block;*/
        display: list-item;
        /*float: left;*/
        margin-right: 6px;
        cursor: pointer;
    }

    img {
        display: block;
        /*height: 703px;*/
        height: auto;
        /*max-height: 920px;*/
        max-width: 100%;
    }
</style>

<style>
    #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    #myImg:hover {
        opacity: 0.7;
    }

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
        background-color: rgb(0, 0, 0); /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9); /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
        margin: auto;
        display: block;
        /*width: 80%;*/
        width: 100%;
        /*max-width: 700px;*/
        max-width: 1170px;
        max-height: 703px !important;
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
        from {
            -webkit-transform: scale(0)
        }
        to {
            -webkit-transform: scale(1)
        }
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }
        to {
            transform: scale(1)
        }
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 45px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
        opacity: inherit;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px) {
        .modal-content {
            width: 100%;
        }
    }
</style>

<style>
    .brief_land_box .ibrief {
        line-height: 24px;
    }

    .land_page .title_land_box {
        background: #f8f8f8;
        color: #e40b00;
        font-size: 17px;
        font-weight: 600;
        padding: 10px;
        margin: 15px 0 5px 0;
    }

    .land_page .pack_land_box .pland {
        border-bottom: 1px solid #e0e0e0;
        border-left: 1px solid #e0e0e0;
        color: #333;
    }

    .land_page .pack_land_box .pland .title_detail_pland {
        font-weight: 600;
        font-size: 18px;
        padding: 10px 10px 0 10px;
    }

    .land_page .pack_land_box .pland .body_detail_pland {
        padding: 5px 10px 10px 10px;
    }

    .land_page .pack_land_box {
        border-top: 1px solid #e0e0e0;
        border-right: 1px solid #e0e0e0;
    }

    .land_page .pack_land_box .pland {
        border-bottom: 1px solid #e0e0e0;
        border-left: 1px solid #e0e0e0;
        color: #333;
    }

    .land_page .pack_land_box .pland > strong {
        line-height: 32px;
        font-weight: 600;
        display: inline-block;
        padding-left: 10px;
        width: 110px;
    }

    .land_page .poster_land_box .pic_poster_land_box {
        padding-right: 30px;
    }

    .land_page .poster_land_box .detail_poster_land_box p:first-child {
        border-top: 0;
    }

    .land_page .poster_land_box .detail_poster_land_box p {
        padding: 5px 0;
        border-top: 1px dotted #ddd;
    }

    .land_page .land_box {
        border: 1px solid #ddd;
        padding: 15px;
    }

    .land_page .title1_land_box strong {
        background: #fff;
        display: inline-block;
        position: relative;
        margin-bottom: -10px;
        font-weight: 600;
        line-height: 20px;
        font-size: 16px;
    }

    .land_page .title1_land_box {
        border-bottom: 1px solid #ddd;
        margin: 10px 0 20px 0;
    }

    p.title_box1 strong {
        display: inline-block;
        font-size: 16px;
        line-height: 50px;
        font-weight: 600;
        padding-left: 15px;
        border-left: 15px solid #e40b00;
    }

    .body_top2_box {
        padding: 15px;
        border: 1px solid #ddd;
        border-top: 0;
    }

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

    .land_page .land_box h1, .land_page .land_box h2 {
        color: #e40b00;
        font-size: 20px;
        text-transform: uppercase;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .land_page .land_box {
        border: 1px solid #ddd;
        padding: 15px;
    }

    .land_page .poster_land_box .pic_poster_land_box p {
        border: 1px solid #ddd;
        padding: 4px;
        margin-top: 5px;
    }

    p.title_box1 {
        background: #efefef;
        border-bottom: 1px solid #ddd;
    }
</style>
