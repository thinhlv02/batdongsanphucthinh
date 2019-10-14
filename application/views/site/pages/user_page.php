<div class="container">
    <div class="row mt-5">
        <div class="col-sm-4 col-md-3">
            <div class="left-menu">
                <div class="left-title">Thông tin tài khoản</div>

                <div id="column-left-user" class="card">
                    <div id="usercp" class="card-body">
                        <div class="white-background-new">
                            <div class="box-header text-center">
                                <h5>TRANG CÁ NHÂN</h5>
                            </div>
                            <div class="box-arround">
                                <div class="useravatar text-center">
                                    <p>
                                        <i class="fas fa-user-circle fa-10x text-success"></i>
                                    </p>
                                    <br/>
                                    <span class="userfullname text-uppercase"><?php echo $user_login->fullname; ?></span>

                                    <div class="userpoint_menu">

                                        <div><label style="padding-left:0px;">Tài khoản: Thường</label></div>
                                        <div>
                                            <label style="font-size:16px; font-weight:bold;">
                                                45</label>
                                            <span style="font-size:14px; font-weight:normal;">&nbsp;điểm&nbsp;</span>

                                        </div>

                                    </div>
                                    <div class="userbalance">
                                        Tài khoản tin rao:
                                        <span>99.267</span><br>
                                        Tài khoản ngoài tin rao:
                                        <span>0</span><br>
                                        Tài khoản KM1:
                                        <span>0</span><br>
                                        Tài khoản KM2:
                                        <span>3.733</span><br>
                                    </div>

                                    <a class="bluebotton"
                                       href="javascript:void(0)">Nạp tiền</a>
                                </div>
                                <div class="title">Quản lý thông tin cá nhân</div>
                                <ul class="item">
                                    <li class="row-content">
                                        <a href="javascript:void(0)" title="Thay đổi thông tin cá nhân">
                                            Thay đổi thông tin cá nhân</a>
                                    </li>
                                    <li class="row-content">
                                        <a href="javascript:void(0)" title="Thay đổi mật khẩu">
                                            Thay đổi mật khẩu</a>
                                    </li>

                                </ul>
                                <div class="title">Quản lý tin rao</div>
                                <ul class="item">
                                    <li class="row-content">
                                        <a href="javascript:void(0)" title="Quản lý tin rao bán/cho thuê"
                                           class="selected">
                                            Quản lý tin rao bán/cho thuê</a>
                                    </li>
                                    <li class="row-content">
                                        <a href="javascript:void(0)" title="Đăng tin rao bán/cho thuê">
                                            Đăng tin rao bán/cho thuê</a>
                                    </li>
                                    <li class="row-content">
                                        <a href="javascript:void(0)"
                                           title="Quản lý tin rao cần mua/cần thuê">Quản lý tin cần mua/cần thuê</a>
                                    </li>
                                    <li class="row-content">
                                        <a href="javascript:void(0)" title="Đăng tin rao cần mua/cần thuê">Đăng
                                            tin cần mua/cần thuê</a>
                                    </li>
                                    <li class="row-content">
                                        <a href="javascript:void(0)" title="Quản lý tin nháp">
                                            Quản lý tin nháp</a>
                                    </li>

                                </ul>
                                <div>

                                    <div class="title">Quản lý tài chính</div>
                                    <ul class="item">
                                        <li class="row-content">
                                            <a href="javascript:void(0)">Thông tin số dư</a>&nbsp;<img
                                                    src="<?php echo public_url('images/icon_green_pt.png'); ?>" alt="new">
                                        </li>
                                        <li class="row-content">
                                            <a href="javascript:void(0)" title="Lịch sử giao dịch">
                                                Lịch sử giao dịch</a>
                                        </li>
                                        <li class="row-content">
                                            <a href="javascript:void(0)" title="Nhóm khuyến mãi">
                                                Nhóm khuyến mãi</a>
                                        </li>

                                        <li class="row-content">
                                            <a href="javascript:void(0)"
                                               title="Quản lý tài khoản Doanh nghiệp">
                                                Quản lý tài khoản Doanh nghiệp</a>&nbsp;<img
                                                    src="<?php echo public_url('images/icon_green_pt.png'); ?>" alt="new">
                                        </li>
                                        <li class="row-content">
                                            <a href="javascript:void(0)"
                                               title="Nạp tiền vào tài khoản">
                                                Nạp tiền vào tài khoản</a>
                                        </li>
                                    </ul>

                                </div>
                                <div class="title">Tiện ích</div>
                                <ul class="item">

                                    <li class="row-content">
                                        <a href="javascript:void(0)" title="Thông báo">
                                            Thông báo</a>&nbsp;<img
                                                src="<?php echo public_url('images/icon_green_pt.png'); ?>" alt="new">
                                    </li>
                                    <li class="row-content">
                                        <a href="javascript:void(0)" title="Quản lý đăng kí nhận email">
                                            Quản lý đăng kí nhận email</a>
                                    </li>
                                    <li class="row-content">
                                        <a href="javascript:void(0)" title="Hộp tin nhắn">
                                            Hộp tin nhắn</a>
                                    </li>

                                    <li class="row-content">
                                        <a href="javascript:void(0)" title="Quản lý điểm tích lũy">Quản lý
                                            điểm tích lũy</a>&nbsp;<img
                                                src="<?php echo public_url('images/icon_green_pt.png'); ?>" alt="new">
                                    </li>

                                    <li class="row-content">
                                        <a href="javascript:void(0)"
                                           title="Yêu cầu khóa tài khoản">Yêu cầu khóa tài khoản</a>
                                    </li>
                                </ul>
                                <div class="title">Hướng dẫn &amp; báo giá</div>
                                <ul class="item">
                                    <li class="row-content">
                                        <a href="javascript:void(0)" target="">Hướng dẫn sử dụng</a>
                                    </li>
                                    <li class="row-content">
                                        <a href="javascript:void(0)" target="">Hướng dẫn thanh toán</a>
                                    </li>
                                    <li class="row-content">
                                        <a href="javascript:void(0)" target="">Báo giá</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

        <div class="col-sm-8 col-md-9 detail-content">
            <div class="line-height-2">

                <div id="column-no-right-user" class="card">
                    <div class="left-title">Quản lý tin rao bán, cho thuê</div>

                    <div class="card-body">

                        <table id="datatable-news"
                               class="table table-striped table-bordered bulk_action dataTable no-footer" role="grid"
                               aria-describedby="datatable-news_info">
                            <!--            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">-->
                            <thead>
                            <tr role="row">
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 42px;">Mã tin</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 79px;">SĐT</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 79px;">Ảnh minh họa
                                </th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 86px;">Tiêu đề</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 258px;">Giá / Diện
                                    tích
                                </th>

                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 30px;">Lượt xem</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 65px;">Ngày Tạo</th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 65px;">Quản lý đăng
                                    bài
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr title="" class="odd" role="row">
                                <td class="text-center">
                                    <button class="btn btn-default btn-xs">122</button>
                                </td>

                                <td> 0988559509</td>
                                <td><img src="http://batdongsanphucthinh.vn/public/images/ads/122-main2.jpg"
                                         style="max-width: 80px"></td>
                                <td>
                                    <a href="http://batdongsanphucthinh.vn/rao-vat/chinh-chu-can-ban-khach-san-tai-sa-pa-6-tang-122"
                                       target="_blank">
                                        CHÍNH CHỦ CẦN BÁN KHÁCH SẠN TẠI SA PA 6 TẦNG</a></td>

                                <td>
                                    <p class="btn btn-outline-danger btn-xs">thỏa thuận </p><br>
                                    <p class="btn btn-outline-cyan btx-xs">225 m2 m<sup>2</sup></p>

                                </td>

                                <td>237</td>
                                <td>08/10/2019</td>
                                <td class="text-center">
                                    <a href="#"><i class="fas fa-search fa-lg"></i></a>
                                </td>
                            </tr>
                            <tr title="" class="odd" role="row">
                                <td class="text-center">
                                    <button class="btn btn-default btn-xs">122</button>
                                </td>

                                <td> 0988559509</td>
                                <td><img src="http://batdongsanphucthinh.vn/public/images/ads/122-main2.jpg"
                                         style="max-width: 80px"></td>
                                <td>
                                    <a href="http://batdongsanphucthinh.vn/rao-vat/chinh-chu-can-ban-khach-san-tai-sa-pa-6-tang-122"
                                       target="_blank">
                                        CHÍNH CHỦ CẦN BÁN KHÁCH SẠN TẠI SA PA 6 TẦNG</a></td>

                                <td>
                                    <p class="btn btn-outline-danger btn-xs">thỏa thuận </p><br>
                                    <p class="btn btn-outline-cyan btx-xs">225 m2 m<sup>2</sup></p>

                                </td>

                                <td>237</td>
                                <td>08/10/2019</td>
                                <td class="text-center">
                                    <a href="#"><i class="fas fa-search fa-lg"></i></a>
                                </td>
                            </tr>
                            <tr title="" class="odd" role="row">
                                <td class="text-center">
                                    <button class="btn btn-default btn-xs">122</button>
                                </td>

                                <td> 0988559509</td>
                                <td><img src="http://batdongsanphucthinh.vn/public/images/ads/122-main2.jpg"
                                         style="max-width: 80px"></td>
                                <td>
                                    <a href="http://batdongsanphucthinh.vn/rao-vat/chinh-chu-can-ban-khach-san-tai-sa-pa-6-tang-122"
                                       target="_blank">
                                        CHÍNH CHỦ CẦN BÁN KHÁCH SẠN TẠI SA PA 6 TẦNG</a></td>

                                <td>
                                    <p class="btn btn-outline-danger btn-xs">thỏa thuận </p><br>
                                    <p class="btn btn-outline-cyan btx-xs">225 m2 m<sup>2</sup></p>

                                </td>

                                <td>237</td>
                                <td>08/10/2019</td>
                                <td class="text-center">
                                    <a href="#"><i class="fas fa-search fa-lg"></i></a>
                                </td>
                            </tr>

                            </tbody>
                        </table>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<style>
    .white-background-new .box-arround .title {
        color: #666;
        font-size: 12px;
        font-weight: bold;
        padding: 10px;
        background-color: #e8e8e8;
    }
</style>
