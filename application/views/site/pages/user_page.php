<div class="container">
    <div class="title-section"><h2><?php echo $user_page_lang['title']; ?></h2></div>
    <div class="row mt-5">
        <div class="col-sm-4 col-md-3">
            <div class="left-menu">
                <div class="left-title text-center">Thông tin cá nhân</div>

                <div id="column-left-user" style="float: left">
                    <div id="usercp">
                        <div class="white-background-new">
                            <div class="box-header">
                                <h3>
                                    TRANG CÁ NHÂN</h3>
                            </div>
                            <div class="box-arround">
                                <div class="useravatar">
                                    <img id="MainContent__userPage_imgAvatar" class="avatar" onerror="this.src='http://file4.batdongsan.com.vn/images/default-user-avatar-blue.jpg'" src="http://file4.batdongsan.com.vn/images/default-user-avatar-blue.jpg">
                                    <span id="MainContent__userPage_lblUserName" class="userfullname">Lưu Thị Bình</span>

                                    <div id="MainContent__userPage_pnlUserPoint" class="userpoint_menu">

                                        <div class="userpoint_menu_level">

                                            <label style="padding-left:0px;">Tài khoản: Thường</label>
                                        </div>
                                        <div class="userpoint_menu_point">
                                            <label style="font-size:16px; font-weight:bold;">
                                                45</label>
                                            <span style="font-size:14px; font-weight:normal;">&nbsp;điểm&nbsp;</span>
                                            <a class="fa fa-info-circle" href="#">
                                                <div>
                                                    <ul>
                                                        <li><span>Điểm đổi thưởng <b>45</b> điểm</span></li>
                                                        <li>
                                                            <span>Đã tích lũy 445.566 VNĐ. Cần thêm 11.554.434 VNĐ để lên hạng Đồng</span>
                                                        </li>
                                                        <li><span>Kỳ xét hạng tiếp theo vào 06/03/2020</span></li>

                                                    </ul>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                    <div class="userbalance">
                                        Tài khoản tin rao:
                                        <span id="MainContent__userPage_ltrBalance">99.267</span><br>
                                        Tài khoản ngoài tin rao:
                                        <span id="MainContent__userPage_ltrOtherBalance">0</span><br>
                                        Tài khoản KM1:
                                        <span id="MainContent__userPage_ltrPromotion1">0</span><br>
                                        Tài khoản KM2:
                                        <span id="MainContent__userPage_ltrPromotion2">3.733</span><br>
                                    </div>

                                    <a id="MainContent__userPage_lnkDeposit" class="bluebotton" href="/trang-ca-nhan/uspg-paymentdeposit/method-nvpdomesticcard">Nạp tiền</a>
                                </div>
                                <div class="title">Quản lý thông tin cá nhân</div>
                                <ul class="item">
                                    <li class="row-content">
                                        <a href="/trang-ca-nhan/uspg-changeinfo" title="Thay đổi thông tin cá nhân">
                                            Thay đổi thông tin cá nhân</a>
                                    </li>
                                    <li class="row-content">
                                        <a href="/trang-ca-nhan/uspg-changepass" title="Thay đổi mật khẩu">
                                            Thay đổi mật khẩu</a>
                                    </li>


                                </ul>
                                <div class="title">Quản lý tin rao</div>
                                <ul class="item">
                                    <li class="row-content">
                                        <a href="/trang-ca-nhan/uspg-lstproduct" title="Quản lý tin rao bán/cho thuê" class="selected">
                                            Quản lý tin rao bán/cho thuê</a>
                                    </li>
                                    <li class="row-content">
                                        <a href="/dang-tin-rao-vat-ban-nha-dat" title="Đăng tin rao bán/cho thuê">
                                            Đăng tin rao bán/cho thuê</a>
                                    </li>
                                    <li id="MainContent__userPage_menuAdNewsManager" class="row-content">
                                        <a href="/trang-ca-nhan/uspg-lstadnews" title="Quản lý tin rao cần mua/cần thuê">Quản lý tin cần mua/cần thuê</a>
                                    </li>
                                    <li id="MainContent__userPage_menuPostAdNews" class="row-content">
                                        <a href="/dang-tin-rao-vat-mua-nha-dat" title="Đăng tin rao cần mua/cần thuê">Đăng tin cần mua/cần thuê</a>
                                    </li>
                                    <li id="MainContent__userPage_menuProductDraft" class="row-content">
                                        <a href="/trang-ca-nhan/uspg-lstproductDraft" title="Quản lý tin nháp">
                                            Quản lý tin nháp</a>
                                    </li>

                                </ul>
                                <div id="MainContent__userPage_pnlFinaceManagement">

                                    <div class="title">Quản lý tài chính</div>
                                    <ul class="item">
                                        <li class="row-content">
                                            <a href="/trang-ca-nhan/uspg-balanceinfo">Thông tin số dư</a>&nbsp;<img src="https://file4.batdongsan.com.vn/images/Icons/icon-green.png" alt="new">
                                        </li>
                                        <li class="row-content">
                                            <a href="/trang-ca-nhan/uspg-transaction" title="Lịch sử giao dịch">
                                                Lịch sử giao dịch</a>
                                        </li>
                                        <li id="MainContent__userPage_menuGroupOfUser" class="row-content">
                                            <a href="/trang-ca-nhan/uspg-groupofuser" title="Nhóm khuyến mãi">
                                                Nhóm khuyến mãi</a>
                                        </li>

                                        <li id="MainContent__userPage_menuEnterpriseAccount" class="row-content">
                                            <a href="/trang-ca-nhan/uspg-enterpriseaccount" title="Quản lý tài khoản Doanh nghiệp">
                                                Quản lý tài khoản Doanh nghiệp</a>&nbsp;<img src="https://file4.batdongsan.com.vn/images/Icons/icon-green.png" alt="new">
                                        </li>
                                        <li id="MainContent__userPage_menuDeposit" class="row-content">
                                            <a href="/trang-ca-nhan/uspg-paymentdeposit/method-nvpdomesticcard" title="Nạp tiền vào tài khoản">
                                                Nạp tiền vào tài khoản</a>
                                        </li>
                                    </ul>

                                </div>
                                <div class="title">Tiện ích</div>
                                <ul class="item">

                                    <li id="MainContent__userPage_menuNotify" class="row-content">
                                        <a href="/trang-ca-nhan/uspg-notify" title="Thông báo">
                                            Thông báo</a>&nbsp;<img src="https://file4.batdongsan.com.vn/images/Icons/icon-green.png" alt="new">
                                    </li>
                                    <li id="MainContent__userPage_menuEmailRegist" class="row-content">
                                        <a href="/trang-ca-nhan/uspg-emailLetter" title="Quản lý đăng kí nhận email">
                                            Quản lý đăng kí nhận email</a>
                                    </li>
                                    <li class="row-content">
                                        <a href="/trang-ca-nhan/uspg-msg" title="Hộp tin nhắn">
                                            Hộp tin nhắn</a>
                                    </li>


                                    <li id="MainContent__userPage_menuUserPoint" class="row-content">
                                        <a href="/trang-ca-nhan/uspg-userpoint" title="Quản lý điểm tích lũy">Quản lý điểm tích lũy</a>&nbsp;<img src="https://file4.batdongsan.com.vn/images/Icons/icon-green.png" alt="new">
                                    </li>

                                    <li id="MainContent__userPage_menuUserDeleteAccount" class="row-content">
                                        <a href="/trang-ca-nhan/uspg-requestblockaccount" title="Yêu cầu khóa tài khoản">Yêu cầu khóa tài khoản</a>
                                    </li>
                                </ul>
                                <div class="title">Hướng dẫn &amp; báo giá</div>
                                <ul class="item">
                                    <li class="row-content">
                                        <a href="/bao-gia-quang-cao#a7" target="_blank">Hướng dẫn sử dụng</a>
                                    </li>
                                    <li class="row-content">
                                        <a href="/bao-gia-quang-cao#a8" target="_blank">Hướng dẫn thanh toán</a>
                                    </li>
                                    <li class="row-content">
                                        <a href="/bao-gia-quang-cao#a4" target="_blank">Báo giá</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="account_info">
                        </div>
                    </div>
                    <div>

                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-9 col-sm-8 detail-content">
            <div class="line-height-2">
                <div class="left-title">Danh sách bài đăng !</div>

                <div id="column-no-right-user" style="float: left">

                    <style type="text/css">
                        .tblKM {
                            width: 750px;
                            border-collapse: collapse;
                        }

                        .tblKM tr:hover {
                            background-color: #cdcdcd;
                        }

                        .tblKM td {
                            padding: 3px;
                        }

                        .tblKM th {
                            padding: 3px;
                            font-size: 14px;
                            font-weight: bold;
                        }

                        .tblKM tr td:last-child {
                            text-align: right;
                        }
                    </style>
                    <div class="aligncenter">

                    </div>

                    <div class="moduletitle">
                        Quản lý tin rao bán, cho thuê
                    </div>
                    <table style="width: 100%; margin-top: 20px;" class="t-4-c">
                        <tbody>
                        <tr>
                            <td class="colorblue">Từ ngày</td>
                            <td class="colorblue">Đến ngày</td>
                            <td class="colorblue">Loại tin</td>
                            <td class="colorblue">Trạng thái</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="advance-control">
                                    <input name="ctl00$MainContent$_userPage$ctl00$txtFromDate" type="text" value="12/04/2019" id="txtFromDate" class="hasDatepicker">
                                    <span class="select-text">
<span class="select-text-content">12/04/2019</span>
</span>
                                </div>
                            </td>
                            <td>
                                <div class="advance-control">
                                    <input name="ctl00$MainContent$_userPage$ctl00$txtToDate" type="text" value="13/10/2019" id="txtToDate" class="hasDatepicker">
                                    <span class="select-text">
<span class="select-text-content">13/10/2019</span>
</span>
                                </div>
                            </td>
                            <td>
                                <div class="advance-control">
<span class="select-text">
<span class="select-text-content">Chọn loại tin</span>
</span>
                                    <select name="ctl00$MainContent$_userPage$ctl00$ddlVipType" id="ddlVipType">
                                        <option selected="selected" value="7">Chọn loại tin</option>
                                        <option value="0">Tin VIP đặc biệt</option>
                                        <option value="1">Tin VIP 1</option>
                                        <option value="2">Tin VIP 2</option>
                                        <option value="3">Tin VIP 3</option>
                                        <option value="4">Tin Ưu Đãi</option>
                                        <option value="5">Tin Thường</option>

                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="advance-control">
                                    <select name="ctl00$MainContent$_userPage$ctl00$ddlStatus" id="ddlStatus">
                                        <option selected="selected" value="0">Tất cả</option>
                                        <option value="1">Còn hạn</option>
                                        <option value="2">Hết hạn</option>

                                    </select>
                                    <span class="select-text">
<span class="select-text-content">Tất cả</span>
</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="colorblue">Mã tin</td>
                        </tr>
                        <tr>
                            <td>
                                <input name="ctl00$MainContent$_userPage$ctl00$txtMaTin" type="text" id="MainContent__userPage_ctl00_txtMaTin" class="keycode">
                            </td>
                            <td colspan="3">
                                <input type="submit" name="ctl00$MainContent$_userPage$ctl00$btnSearch" value="Tìm kiếm" onclick="doSearch();" id="MainContent__userPage_ctl00_btnSearch" class="timkiem" autopostback="true">
                                <span class="colorboldblue"><strong>(Lưu ý khi nhập mã tin thì các bộ lọc khác không có tác dụng)</strong></span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="clear10"></div>
                    <div style="display: none;">
                        <input type="text" style="width: 120px !important; height: 22px;" placeholder="Nhập Số Tiền" id="txtMoney" onkeydown="return numbersonly(this, window.event, false);" onkeyup="formatCurrency(this);">
                        <input type="button" onclick="TinhKhuyenMai('txtMoney', productConfig2017);" value="Khuyến mãi tin rao" style="background-color: #055699; border: none; width: auto; height: 27px; color: #fff !important; font-weight: bold; font-size: 12px !important;">
                        <input type="button" onclick="TinhKhuyenMai082017('txtMoney', productConfig082017);" value="Khuyến mãi tháng 8" style="background-color: #055699; border: none; width: auto; height: 27px; color: #fff !important; font-weight: bold; font-size: 12px !important;">

                        <input type="button" onclick="TinhKhuyenMai('txtMoney', bannerConfig2017);" value="Banner loại 1" style="background-color: #055699; border: none; width: auto; height: 27px; color: #fff !important; font-weight: bold; font-size: 12px !important;">

                        (VNĐ)
                        <br>

                        <br>
                    </div>
                    <div class="clear10"></div>

                    <table class="tbl" border="0" cellpadding="3px" cellspacing="0" width="100%">
                        <tbody>
                        <tr class="tit-tbl bg_tit">
                            <th style="width: 40px">
                                STT
                            </th>
                            <th style="width: 70px">
                                Mã tin
                            </th>
                            <th style="width: 330px">
                                Tiêu đề
                            </th>
                            <th style="width: 30px">
                                Xem
                            </th>
                            <th style="width: 90px">
                                Ngày bắt đầu
                            </th>
                            <th style="width: 90px">
                                Ngày hết hạn
                            </th>
                            <th style="width: 40px">
                                Ghi chú
                            </th>
                        </tr>

                        <tr class="prod-vip5">
                            <td>

                                1
                            </td>
                            <td class="aligncenter">
                                <div style="padding-top:25px;">
                                    22892268
                                    <img src="https://file4.batdongsan.com.vn/images/Default/images/ViptypeV5-label.png">
                                </div>
                                Không duyệt<br>09-10-2019
                            </td>
                            <td>

                                <span class="prod-title" id="view_22892268"><img src="https://file4.batdongsan.com.vn/crop/77x62/2019/10/08/20191008214106-4653_wm.jpg" alt="Bán khách sạn 6 tầng số12  Thủ Dầu Một  thị trấn Sa Pa  Sa Pa  Lào Cai Diện tích: 225 m2">Bán khách sạn 6 tầng số12  Thủ Dầu Một  thị trấn Sa Pa  Sa Pa  Lào Cai Diện tích: 225 m2</span>
                                <div style="clear: both; text-align: right; padding-top: 5px;">


                                    &nbsp;

                                    <a id="MainContent__userPage_ctl00_rpItems_lnkEdit_0" href="/trang-ca-nhan/uspg-updateproduct/itemId-22892268">
                                        <img src="https://file4.batdongsan.com.vn/images/sua.gif"> Sửa</a>&nbsp;


                                    <a id="MainContent__userPage_ctl00_rpItems_lnkDel_0" class="btn-xoa" href="/trang-ca-nhan/uspg-userdelproduct/itemId-22892268">Xóa</a>


                                    <div style="display: none;">

                                    </div>
                                </div>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    <a id="pageviews_22892268" href="javascript: PageViewDaily('EZw7SGxGnSHQG1hoRywMUQ==')" class="grey" style="text-decoration: underline">_</a>
                                </p>

                                <p>

                                    <br>

                                </p>

                            </td>
                            <td class="aligncenter">
                                <p>
                                    08-10-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    08-11-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>

                                    <a href="javascript:void(0)" onclick="GetAllNote('22892268')" class="grey" style="text-decoration: underline;">1</a>

                                </p>
                            </td>
                        </tr>

                        <tr class="prod-vip5">
                            <td>

                                2
                            </td>
                            <td class="aligncenter">
                                <div style="padding-top:25px;">
                                    22794027
                                    <img src="https://file4.batdongsan.com.vn/images/Default/images/ViptypeV5-label.png">
                                </div>
                                Đang Hiển thị
                            </td>
                            <td>

                                <a class="prod-title" id="view_22794027" href="/ban-nha-rieng-duong-thong-nhat-102/cap-4-tai-t-moi-phuong-8-thanh-pho-vung-tau-pr22794027" target="_blank"><img src="https://file4.batdongsan.com.vn/crop/77x62/2019/10/03/20191003083649-66fa.jpg" alt="Bán nhà cấp 4 tại đường Thống Nhất Mới, phường 8, thành phố Vũng Tàu">Bán nhà cấp 4 tại đường Thống Nhất Mới, phường 8, thành phố Vũng Tàu</a>
                                <div style="clear: both; text-align: right; padding-top: 5px;">


                                    &nbsp;
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkView_1" class="grey" href="/ban-nha-rieng-duong-thong-nhat-102/cap-4-tai-t-moi-phuong-8-thanh-pho-vung-tau-pr22794027" target="_blank">
                                        <img src="https://file4.batdongsan.com.vn/images/xem.gif">
                                        Xem</a>
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkEdit_1" href="/trang-ca-nhan/uspg-updateproduct/itemId-22794027">
                                        <img src="https://file4.batdongsan.com.vn/images/sua.gif"> Sửa</a>&nbsp;


                                    <a id="MainContent__userPage_ctl00_rpItems_lnkDel_1" class="btn-xoa" href="/trang-ca-nhan/uspg-userdelproduct/itemId-22794027">Xóa</a>


                                    <a id="MainContent__userPage_ctl00_rpItems_lnkDown_1" class="btn-xoa" href="/trang-ca-nhan/uspg-userdownproduct/itemId-22794027">Hạ</a>

                                    <div style="display: none;">
                                        <input type="submit" name="ctl00$MainContent$_userPage$ctl00$rpItems$ctl02$btnDone" value="Đã bán" id="MainContent__userPage_ctl00_rpItems_btnDone_1" title="Click để chuyển tin sang trạng thái đã bán hoặc đã cho thuê" class="product-done-grey">
                                    </div>
                                </div>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    <a id="pageviews_22794027" href="javascript: PageViewDaily('uTvYXyt7a03mFy4dnWchWw==')" class="grey" style="text-decoration: underline">33</a>
                                </p>

                                <p>
                                    <a id="MainContent__userPage_ctl00_rpItems_linkUp_1" href="/trang-ca-nhan/uspg-userupproduct/itemId-22794027">
                                        <img src="https://file4.batdongsan.com.vn/images/action_up.gif" alt="Đưa tin rao lên đầu danh sách tin, phí bằng 1 ngày đăng tin" title="Đưa tin rao lên đầu danh sách tin, phí bằng 1 ngày đăng tin">
                                    </a>
                                    <br>

                                </p>

                            </td>
                            <td class="aligncenter">
                                <p>
                                    03-10-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    21-11-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>

                                    <a href="javascript:void(0)" onclick="GetAllNote('22794027')" class="grey" style="text-decoration: underline;">1</a>

                                </p>
                            </td>
                        </tr>

                        <tr class="prod-vip5">
                            <td>

                                3
                            </td>
                            <td class="aligncenter">
                                <div style="padding-top:25px;">
                                    22733443
                                    <img src="https://file4.batdongsan.com.vn/images/Default/images/ViptypeV5-label.png">
                                </div>
                                Đang Hiển thị
                            </td>
                            <td>

                                <a class="prod-title" id="view_22733443" href="/ban-dat-nen-du-an-ha-long-qni/hung-tng-phuong-hung-tng-tnh-pho-tinh-quang-ninh-pr22733443" target="_blank"><img src="https://file4.batdongsan.com.vn/crop/77x62/2019/09/27/20190927160907-4519_wm.jpg" alt="Bán đất Hùng Thắng, phường Hùng Thắng, thành phố Hạ Long, tỉnh Quảng Ninh">Bán đất Hùng Thắng, phường Hùng Thắng, thành phố Hạ Long, tỉnh Quảng Ninh</a>
                                <div style="clear: both; text-align: right; padding-top: 5px;">


                                    &nbsp;
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkView_2" class="grey" href="/ban-dat-nen-du-an-ha-long-qni/hung-tng-phuong-hung-tng-tnh-pho-tinh-quang-ninh-pr22733443" target="_blank">
                                        <img src="https://file4.batdongsan.com.vn/images/xem.gif">
                                        Xem</a>
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkEdit_2" href="/trang-ca-nhan/uspg-updateproduct/itemId-22733443">
                                        <img src="https://file4.batdongsan.com.vn/images/sua.gif"> Sửa</a>&nbsp;


                                    <a id="MainContent__userPage_ctl00_rpItems_lnkDel_2" class="btn-xoa" href="/trang-ca-nhan/uspg-userdelproduct/itemId-22733443">Xóa</a>


                                    <a id="MainContent__userPage_ctl00_rpItems_lnkDown_2" class="btn-xoa" href="/trang-ca-nhan/uspg-userdownproduct/itemId-22733443">Hạ</a>

                                    <div style="display: none;">
                                        <input type="submit" name="ctl00$MainContent$_userPage$ctl00$rpItems$ctl03$btnDone" value="Đã bán" id="MainContent__userPage_ctl00_rpItems_btnDone_2" title="Click để chuyển tin sang trạng thái đã bán hoặc đã cho thuê" class="product-done-grey">
                                    </div>
                                </div>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    <a id="pageviews_22733443" href="javascript: PageViewDaily('am6Csde3/Gtx9qI3Bo8dWg==')" class="grey" style="text-decoration: underline">29</a>
                                </p>

                                <p>
                                    <a id="MainContent__userPage_ctl00_rpItems_linkUp_2" href="/trang-ca-nhan/uspg-userupproduct/itemId-22733443">
                                        <img src="https://file4.batdongsan.com.vn/images/action_up.gif" alt="Đưa tin rao lên đầu danh sách tin, phí bằng 1 ngày đăng tin" title="Đưa tin rao lên đầu danh sách tin, phí bằng 1 ngày đăng tin">
                                    </a>
                                    <br>

                                </p>

                            </td>
                            <td class="aligncenter">
                                <p>
                                    27-09-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    12-10-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>

                                    <a href="javascript:void(0)" onclick="GetAllNote('22733443')" class="grey" style="text-decoration: underline;">0</a>

                                </p>
                            </td>
                        </tr>

                        <tr class="prod-vip5">
                            <td>

                                4
                            </td>
                            <td class="aligncenter">
                                <div style="padding-top:25px;">
                                    22699576
                                    <img src="https://file4.batdongsan.com.vn/images/Default/images/ViptypeV5-label.png">
                                </div>
                                Đang Hiển thị
                            </td>
                            <td>

                                <a class="prod-title" id="view_22699576" href="/ban-dat-duong-vu-the-lang-485/phuong-thanh-mieu-thanh-pho-viet-tri-tinh-phu-tho-pr22699576" target="_blank"><img src="https://file4.batdongsan.com.vn/crop/77x62/2019/09/25/20190925163404-4bde_wm.jpg" alt="Bán đất Vũ Thê Lang, phường Thanh miếu, thành phố Việt Trì, tỉnh Phú Thọ">Bán đất Vũ Thê Lang, phường Thanh miếu, thành phố Việt Trì, tỉnh Phú Thọ</a>
                                <div style="clear: both; text-align: right; padding-top: 5px;">


                                    &nbsp;
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkView_3" class="grey" href="/ban-dat-duong-vu-the-lang-485/phuong-thanh-mieu-thanh-pho-viet-tri-tinh-phu-tho-pr22699576" target="_blank">
                                        <img src="https://file4.batdongsan.com.vn/images/xem.gif">
                                        Xem</a>
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkEdit_3" href="/trang-ca-nhan/uspg-updateproduct/itemId-22699576">
                                        <img src="https://file4.batdongsan.com.vn/images/sua.gif"> Sửa</a>&nbsp;


                                    <a id="MainContent__userPage_ctl00_rpItems_lnkDel_3" class="btn-xoa" href="/trang-ca-nhan/uspg-userdelproduct/itemId-22699576">Xóa</a>


                                    <a id="MainContent__userPage_ctl00_rpItems_lnkDown_3" class="btn-xoa" href="/trang-ca-nhan/uspg-userdownproduct/itemId-22699576">Hạ</a>

                                    <div style="display: none;">
                                        <input type="submit" name="ctl00$MainContent$_userPage$ctl00$rpItems$ctl04$btnDone" value="Đã bán" id="MainContent__userPage_ctl00_rpItems_btnDone_3" title="Click để chuyển tin sang trạng thái đã bán hoặc đã cho thuê" class="product-done-grey">
                                    </div>
                                </div>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    <a id="pageviews_22699576" href="javascript: PageViewDaily('7E329CbfwTNhrwdW6PE0Bg==')" class="grey" style="text-decoration: underline">156</a>
                                </p>

                                <p>
                                    <a id="MainContent__userPage_ctl00_rpItems_linkUp_3" href="/trang-ca-nhan/uspg-userupproduct/itemId-22699576">
                                        <img src="https://file4.batdongsan.com.vn/images/action_up.gif" alt="Đưa tin rao lên đầu danh sách tin, phí bằng 1 ngày đăng tin" title="Đưa tin rao lên đầu danh sách tin, phí bằng 1 ngày đăng tin">
                                    </a>
                                    <br>

                                </p>

                            </td>
                            <td class="aligncenter">
                                <p>
                                    25-09-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    15-10-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>

                                    <a href="javascript:void(0)" onclick="GetAllNote('22699576')" class="grey" style="text-decoration: underline;">0</a>

                                </p>
                            </td>
                        </tr>

                        <tr class="prod-vip5">
                            <td>

                                5
                            </td>
                            <td class="aligncenter">
                                <div style="padding-top:25px;">
                                    22272297
                                    <img src="https://file4.batdongsan.com.vn/images/Default/images/ViptypeV5-label.png">
                                </div>
                                Hết thời gian hiển thị
                            </td>
                            <td>

                                <a class="prod-title" id="view_22272297" href="/ban-nha-rieng-duong-nguyen-thi-nho-63/can-chinh-chu-quan-11-nho-pr22272297" target="_blank"><img src="/Images/nophoto.jpg" alt="Cần bán nhà chính chủ Quận 11, đường Nguyễn Thị Nhỏ">Cần bán nhà chính chủ Quận 11, đường Nguyễn Thị Nhỏ</a>
                                <div style="clear: both; text-align: right; padding-top: 5px;">


                                    &nbsp;
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkView_4" class="grey" href="/ban-nha-rieng-duong-nguyen-thi-nho-63/can-chinh-chu-quan-11-nho-pr22272297" target="_blank">
                                        <img src="https://file4.batdongsan.com.vn/images/xem.gif">
                                        Xem</a>
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkEdit_4" href="javascript:confirmReNew('/trang-ca-nhan/uspg-userrenewproduct/itemId-22272297')">
                                        <img src="https://file4.batdongsan.com.vn/images/sua.gif"> Sửa</a>&nbsp;


                                    <a id="MainContent__userPage_ctl00_rpItems_lnkDel_4" class="btn-xoa" href="/trang-ca-nhan/uspg-userdelproduct/itemId-22272297">Xóa</a>


                                    <div style="display: none;">
                                        <input type="submit" name="ctl00$MainContent$_userPage$ctl00$rpItems$ctl05$btnDone" value="Đã bán" id="MainContent__userPage_ctl00_rpItems_btnDone_4" title="Click để chuyển tin sang trạng thái đã bán hoặc đã cho thuê" class="product-done-grey">
                                    </div>
                                </div>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    <a id="pageviews_22272297" href="javascript: PageViewDaily('0WXAfj14wokoiuJENUAHZQ==')" class="grey" style="text-decoration: underline">19</a>
                                </p>

                                <p>

                                    <br>
                                    <a id="MainContent__userPage_ctl00_rpItems_linkRenew_4" class="renew" href="#" renew="/trang-ca-nhan/uspg-userrenewproduct/itemId-22272297">
                                        <img src="https://file4.batdongsan.com.vn/images/renew.png" alt="Gửi lại tin này" title="Gửi lại tin này">
                                    </a>
                                </p>

                            </td>
                            <td class="aligncenter">
                                <p>
                                    27-08-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    12-09-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>

                                    <a href="javascript:void(0)" onclick="GetAllNote('22272297')" class="grey" style="text-decoration: underline;">0</a>

                                </p>
                            </td>
                        </tr>

                        <tr class="prod-vip5">
                            <td>

                                6
                            </td>
                            <td class="aligncenter">
                                <div style="padding-top:25px;">
                                    22194651
                                    <img src="https://file4.batdongsan.com.vn/images/Default/images/ViptypeV5-label.png">
                                </div>
                                Hết thời gian hiển thị
                            </td>
                            <td>

                                <a class="prod-title" id="view_22194651" href="/ban-dat-trang-bom-dna/chinh-chu-can-gap-2-manh-co-dien-tich-rat-dep-o-dong-nai-pr22194651" target="_blank"><img src="/Images/nophoto.jpg" alt="Chính chủ cần bán gấp 2 mảnh đất có diện tích rất đẹp ở Trảng Bom, Đồng Nai">Chính chủ cần bán gấp 2 mảnh đất có diện tích rất đẹp ở Trảng Bom, Đồng Nai</a>
                                <div style="clear: both; text-align: right; padding-top: 5px;">


                                    &nbsp;
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkView_5" class="grey" href="/ban-dat-trang-bom-dna/chinh-chu-can-gap-2-manh-co-dien-tich-rat-dep-o-dong-nai-pr22194651" target="_blank">
                                        <img src="https://file4.batdongsan.com.vn/images/xem.gif">
                                        Xem</a>
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkEdit_5" href="javascript:confirmReNew('/trang-ca-nhan/uspg-userrenewproduct/itemId-22194651')">
                                        <img src="https://file4.batdongsan.com.vn/images/sua.gif"> Sửa</a>&nbsp;


                                    <a id="MainContent__userPage_ctl00_rpItems_lnkDel_5" class="btn-xoa" href="/trang-ca-nhan/uspg-userdelproduct/itemId-22194651">Xóa</a>


                                    <div style="display: none;">
                                        <input type="submit" name="ctl00$MainContent$_userPage$ctl00$rpItems$ctl06$btnDone" value="Đã bán" id="MainContent__userPage_ctl00_rpItems_btnDone_5" title="Click để chuyển tin sang trạng thái đã bán hoặc đã cho thuê" class="product-done-grey">
                                    </div>
                                </div>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    <a id="pageviews_22194651" href="javascript: PageViewDaily('QPZUYBIytSi8b3WRCaMlog==')" class="grey" style="text-decoration: underline">68</a>
                                </p>

                                <p>

                                    <br>
                                    <a id="MainContent__userPage_ctl00_rpItems_linkRenew_5" class="renew" href="#" renew="/trang-ca-nhan/uspg-userrenewproduct/itemId-22194651">
                                        <img src="https://file4.batdongsan.com.vn/images/renew.png" alt="Gửi lại tin này" title="Gửi lại tin này">
                                    </a>
                                </p>

                            </td>
                            <td class="aligncenter">
                                <p>
                                    21-08-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    11-09-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>

                                    <a href="javascript:void(0)" onclick="GetAllNote('22194651')" class="grey" style="text-decoration: underline;">0</a>

                                </p>
                            </td>
                        </tr>

                        <tr class="prod-vip5">
                            <td>

                                7
                            </td>
                            <td class="aligncenter">
                                <div style="padding-top:25px;">
                                    22154824
                                    <img src="https://file4.batdongsan.com.vn/images/Default/images/ViptypeV5-label.png">
                                </div>
                                Hết thời gian hiển thị
                            </td>
                            <td>

                                <a class="prod-title" id="view_22154824" href="/cho-thue-kho-nha-xuong-dat-duong-my-phuoc-tan-van-161/chinh-chu-can-sang-de-kinh-doanh-lien-he-0796432211-pr22154824" target="_blank"><img src="/Images/nophoto.jpg" alt="Chính chủ cần sang kho, nhà xưởng để kinh doanh liên hệ: 0796432211">Chính chủ cần sang kho, nhà xưởng để kinh doanh liên hệ: 0796432211</a>
                                <div style="clear: both; text-align: right; padding-top: 5px;">


                                    &nbsp;
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkView_6" class="grey" href="/cho-thue-kho-nha-xuong-dat-duong-my-phuoc-tan-van-161/chinh-chu-can-sang-de-kinh-doanh-lien-he-0796432211-pr22154824" target="_blank">
                                        <img src="https://file4.batdongsan.com.vn/images/xem.gif">
                                        Xem</a>
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkEdit_6" href="javascript:confirmReNew('/trang-ca-nhan/uspg-userrenewproduct/itemId-22154824')">
                                        <img src="https://file4.batdongsan.com.vn/images/sua.gif"> Sửa</a>&nbsp;


                                    <a id="MainContent__userPage_ctl00_rpItems_lnkDel_6" class="btn-xoa" href="/trang-ca-nhan/uspg-userdelproduct/itemId-22154824">Xóa</a>


                                    <div style="display: none;">
                                        <input type="submit" name="ctl00$MainContent$_userPage$ctl00$rpItems$ctl07$btnDone" value="Đã cho thuê" id="MainContent__userPage_ctl00_rpItems_btnDone_6" title="Click để chuyển tin sang trạng thái đã bán hoặc đã cho thuê" class="product-done-grey">
                                    </div>
                                </div>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    <a id="pageviews_22154824" href="javascript: PageViewDaily('PN2KVlJEGudyChRlU6Ej4w==')" class="grey" style="text-decoration: underline">37</a>
                                </p>

                                <p>

                                    <br>
                                    <a id="MainContent__userPage_ctl00_rpItems_linkRenew_6" class="renew" href="#" renew="/trang-ca-nhan/uspg-userrenewproduct/itemId-22154824">
                                        <img src="https://file4.batdongsan.com.vn/images/renew.png" alt="Gửi lại tin này" title="Gửi lại tin này">
                                    </a>
                                </p>

                            </td>
                            <td class="aligncenter">
                                <p>
                                    19-08-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    30-08-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>

                                    <a href="javascript:void(0)" onclick="GetAllNote('22154824')" class="grey" style="text-decoration: underline;">0</a>

                                </p>
                            </td>
                        </tr>

                        <tr class="prod-vip5">
                            <td>

                                8
                            </td>
                            <td class="aligncenter">
                                <div style="padding-top:25px;">
                                    22062610
                                    <img src="https://file4.batdongsan.com.vn/images/Default/images/ViptypeV5-label.png">
                                </div>
                                Không duyệt<br>12-08-2019
                            </td>
                            <td>

                                <span class="prod-title" id="view_22062610"><img src="https://file4.batdongsan.com.vn/crop/77x62/2019/08/12/20190812092421-5ab4_wm.jpg" alt="BÁN NHÀ CHÍNH CHỦ - LIÊN HỆ : 0912263236">BÁN NHÀ CHÍNH CHỦ - LIÊN HỆ : 0912263236</span>
                                <div style="clear: both; text-align: right; padding-top: 5px;">


                                    &nbsp;

                                    <a id="MainContent__userPage_ctl00_rpItems_lnkEdit_7" href="/trang-ca-nhan/uspg-updateproduct/itemId-22062610">
                                        <img src="https://file4.batdongsan.com.vn/images/sua.gif"> Sửa</a>&nbsp;


                                    <a id="MainContent__userPage_ctl00_rpItems_lnkDel_7" class="btn-xoa" href="/trang-ca-nhan/uspg-userdelproduct/itemId-22062610">Xóa</a>


                                    <div style="display: none;">

                                    </div>
                                </div>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    <a id="pageviews_22062610" href="javascript: PageViewDaily('PM0WNvHqzXkUqKgbRx9+YA==')" class="grey" style="text-decoration: underline">_</a>
                                </p>

                                <p>

                                    <br>

                                </p>

                            </td>
                            <td class="aligncenter">
                                <p>
                                    12-08-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    30-08-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>

                                    <a href="javascript:void(0)" onclick="GetAllNote('22062610')" class="grey" style="text-decoration: underline;">2</a>

                                </p>
                            </td>
                        </tr>

                        <tr class="prod-vip5">
                            <td>

                                9
                            </td>
                            <td class="aligncenter">
                                <div style="padding-top:25px;">
                                    21630990
                                    <img src="https://file4.batdongsan.com.vn/images/Default/images/ViptypeV5-label.png">
                                </div>
                                Không duyệt<br>11-07-2019
                            </td>
                            <td>

                                <span class="prod-title" id="view_21630990"><img src="https://file4.batdongsan.com.vn/crop/77x62/2019/07/11/20190711173624-b522_wm.jpg" alt="CẦN BÁN ĐẤT MẶT TIỀN ĐƯỜNG , TRUNG TÂM THỊ TRẤN">CẦN BÁN ĐẤT MẶT TIỀN ĐƯỜNG , TRUNG TÂM THỊ TRẤN</span>
                                <div style="clear: both; text-align: right; padding-top: 5px;">


                                    &nbsp;

                                    <a id="MainContent__userPage_ctl00_rpItems_lnkEdit_8" href="/trang-ca-nhan/uspg-updateproduct/itemId-21630990">
                                        <img src="https://file4.batdongsan.com.vn/images/sua.gif"> Sửa</a>&nbsp;


                                    <a id="MainContent__userPage_ctl00_rpItems_lnkDel_8" class="btn-xoa" href="/trang-ca-nhan/uspg-userdelproduct/itemId-21630990">Xóa</a>


                                    <div style="display: none;">

                                    </div>
                                </div>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    <a id="pageviews_21630990" href="javascript: PageViewDaily('dsWsTGcWoo7TJx1uCayr7Q==')" class="grey" style="text-decoration: underline">_</a>
                                </p>

                                <p>

                                    <br>

                                </p>

                            </td>
                            <td class="aligncenter">
                                <p>
                                    11-07-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    17-08-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>

                                    <a href="javascript:void(0)" onclick="GetAllNote('21630990')" class="grey" style="text-decoration: underline;">1</a>

                                </p>
                            </td>
                        </tr>

                        <tr class="prod-vip5">
                            <td>

                                10
                            </td>
                            <td class="aligncenter">
                                <div style="padding-top:25px;">
                                    21613708
                                    <img src="https://file4.batdongsan.com.vn/images/Default/images/ViptypeV5-label.png">
                                </div>
                                Không duyệt<br>11-07-2019
                            </td>
                            <td>

                                <span class="prod-title" id="view_21613708"><img src="https://file4.batdongsan.com.vn/crop/77x62/2019/07/10/20190710175334-9f67_wm.jpg" alt="CẦN BÁN ĐẤT  THỔ CƯ 100% GẦN KHU CÔNG NGHIỆP MỸ PHƯỚC">CẦN BÁN ĐẤT  THỔ CƯ 100% GẦN KHU CÔNG NGHIỆP MỸ PHƯỚC</span>
                                <div style="clear: both; text-align: right; padding-top: 5px;">


                                    &nbsp;

                                    <a id="MainContent__userPage_ctl00_rpItems_lnkEdit_9" href="/trang-ca-nhan/uspg-updateproduct/itemId-21613708">
                                        <img src="https://file4.batdongsan.com.vn/images/sua.gif"> Sửa</a>&nbsp;


                                    <a id="MainContent__userPage_ctl00_rpItems_lnkDel_9" class="btn-xoa" href="/trang-ca-nhan/uspg-userdelproduct/itemId-21613708">Xóa</a>


                                    <div style="display: none;">

                                    </div>
                                </div>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    <a id="pageviews_21613708" href="javascript: PageViewDaily('hyN7SF5+/Aa7gg3SYwoCsQ==')" class="grey" style="text-decoration: underline">_</a>
                                </p>

                                <p>

                                    <br>

                                </p>

                            </td>
                            <td class="aligncenter">
                                <p>
                                    10-07-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    17-07-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>

                                    <a href="javascript:void(0)" onclick="GetAllNote('21613708')" class="grey" style="text-decoration: underline;">1</a>

                                </p>
                            </td>
                        </tr>

                        <tr class="prod-vip5">
                            <td>

                                11
                            </td>
                            <td class="aligncenter">
                                <div style="padding-top:25px;">
                                    21597841
                                    <img src="https://file4.batdongsan.com.vn/images/Default/images/ViptypeV5-label.png">
                                </div>
                                Không duyệt<br>10-07-2019
                            </td>
                            <td>

                                <span class="prod-title" id="view_21597841"><img src="https://file4.batdongsan.com.vn/crop/77x62/2019/07/10/20190710000338-ba52_wm.jpg" alt="CẦN BÁN ĐẤT CHÍNH CHỦ Liên hệ: 02546506000 –  0985383365  ">CẦN BÁN ĐẤT CHÍNH CHỦ Liên hệ: 02546506000 –  0985383365  </span>
                                <div style="clear: both; text-align: right; padding-top: 5px;">


                                    &nbsp;

                                    <a id="MainContent__userPage_ctl00_rpItems_lnkEdit_10" href="/trang-ca-nhan/uspg-updateproduct/itemId-21597841">
                                        <img src="https://file4.batdongsan.com.vn/images/sua.gif"> Sửa</a>&nbsp;


                                    <a id="MainContent__userPage_ctl00_rpItems_lnkDel_10" class="btn-xoa" href="/trang-ca-nhan/uspg-userdelproduct/itemId-21597841">Xóa</a>


                                    <div style="display: none;">

                                    </div>
                                </div>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    <a id="pageviews_21597841" href="javascript: PageViewDaily('A1ZEsAeq/AdENhyG6XI8+A==')" class="grey" style="text-decoration: underline">_</a>
                                </p>

                                <p>

                                    <br>

                                </p>

                            </td>
                            <td class="aligncenter">
                                <p>
                                    10-07-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    17-07-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>

                                    <a href="javascript:void(0)" onclick="GetAllNote('21597841')" class="grey" style="text-decoration: underline;">1</a>

                                </p>
                            </td>
                        </tr>

                        <tr class="prod-vip5">
                            <td>

                                12
                            </td>
                            <td class="aligncenter">
                                <div style="padding-top:25px;">
                                    20809908
                                    <img src="https://file4.batdongsan.com.vn/images/Default/images/ViptypeV5-label.png">
                                </div>
                                Hết thời gian hiển thị
                            </td>
                            <td>

                                <a class="prod-title" id="view_20809908" href="/ban-nha-rieng-pho-phuong-mai-3/33-m2-5-tang-6-m-3-3-ty-pr20809908" target="_blank"><img src="https://file4.batdongsan.com.vn/crop/77x62/2019/05/20/20190520123720-750a_wm.jpg" alt="Bán nhà phố Phương Mai 33 m2, 5 tầng, MT 6m, 3,3 tỷ">Bán nhà phố Phương Mai 33 m2, 5 tầng, MT 6m, 3,3 tỷ</a>
                                <div style="clear: both; text-align: right; padding-top: 5px;">


                                    &nbsp;
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkView_11" class="grey" href="/ban-nha-rieng-pho-phuong-mai-3/33-m2-5-tang-6-m-3-3-ty-pr20809908" target="_blank">
                                        <img src="https://file4.batdongsan.com.vn/images/xem.gif">
                                        Xem</a>
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkEdit_11" href="javascript:confirmReNew('/trang-ca-nhan/uspg-userrenewproduct/itemId-20809908')">
                                        <img src="https://file4.batdongsan.com.vn/images/sua.gif"> Sửa</a>&nbsp;


                                    <a id="MainContent__userPage_ctl00_rpItems_lnkDel_11" class="btn-xoa" href="/trang-ca-nhan/uspg-userdelproduct/itemId-20809908">Xóa</a>


                                    <div style="display: none;">
                                        <input type="submit" name="ctl00$MainContent$_userPage$ctl00$rpItems$ctl12$btnDone" value="Đã bán" id="MainContent__userPage_ctl00_rpItems_btnDone_11" title="Click để chuyển tin sang trạng thái đã bán hoặc đã cho thuê" class="product-done-grey">
                                    </div>
                                </div>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    <a id="pageviews_20809908" href="javascript: PageViewDaily('U6UW+LaRm/RZXlVy5OyrBg==')" class="grey" style="text-decoration: underline">28</a>
                                </p>

                                <p>

                                    <br>
                                    <a id="MainContent__userPage_ctl00_rpItems_linkRenew_11" class="renew" href="#" renew="/trang-ca-nhan/uspg-userrenewproduct/itemId-20809908">
                                        <img src="https://file4.batdongsan.com.vn/images/renew.png" alt="Gửi lại tin này" title="Gửi lại tin này">
                                    </a>
                                </p>

                            </td>
                            <td class="aligncenter">
                                <p>
                                    20-05-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    27-05-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>

                                    <a href="javascript:void(0)" onclick="GetAllNote('20809908')" class="grey" style="text-decoration: underline;">0</a>

                                </p>
                            </td>
                        </tr>

                        <tr class="prod-vip5">
                            <td>

                                13
                            </td>
                            <td class="aligncenter">
                                <div style="padding-top:25px;">
                                    20809757
                                    <img src="https://file4.batdongsan.com.vn/images/Default/images/ViptypeV5-label.png">
                                </div>
                                Hết thời gian hiển thị
                            </td>
                            <td>

                                <a class="prod-title" id="view_20809757" href="/ban-nha-rieng-pho-kim-hoa-3/phan-khuc-hiem-gan-nga-tu-xa-dan-dai-co-viet-27m-4m-mat-tien-gia-2-3-ty-co-thuong-luong-pr20809757" target="_blank"><img src="https://file4.batdongsan.com.vn/crop/77x62/2019/05/20/20190520121522-f659_wm.jpg" alt="Bán nhà phân khúc hiếm gần ngã tư Xã Đàn Đại Cổ Việt 27m2, 4m mặt tiền, giá 2,3 tỷ có thương lượng">Bán nhà phân khúc hiếm gần ngã tư Xã Đàn Đại Cổ Việt 27m2, 4m mặt tiền, giá 2,3 tỷ có thương lượng</a>
                                <div style="clear: both; text-align: right; padding-top: 5px;">


                                    &nbsp;
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkView_12" class="grey" href="/ban-nha-rieng-pho-kim-hoa-3/phan-khuc-hiem-gan-nga-tu-xa-dan-dai-co-viet-27m-4m-mat-tien-gia-2-3-ty-co-thuong-luong-pr20809757" target="_blank">
                                        <img src="https://file4.batdongsan.com.vn/images/xem.gif">
                                        Xem</a>
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkEdit_12" href="javascript:confirmReNew('/trang-ca-nhan/uspg-userrenewproduct/itemId-20809757')">
                                        <img src="https://file4.batdongsan.com.vn/images/sua.gif"> Sửa</a>&nbsp;


                                    <a id="MainContent__userPage_ctl00_rpItems_lnkDel_12" class="btn-xoa" href="/trang-ca-nhan/uspg-userdelproduct/itemId-20809757">Xóa</a>


                                    <div style="display: none;">
                                        <input type="submit" name="ctl00$MainContent$_userPage$ctl00$rpItems$ctl13$btnDone" value="Đã bán" id="MainContent__userPage_ctl00_rpItems_btnDone_12" title="Click để chuyển tin sang trạng thái đã bán hoặc đã cho thuê" class="product-done-grey">
                                    </div>
                                </div>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    <a id="pageviews_20809757" href="javascript: PageViewDaily('YKFpkyvmuR1P8rwQdqLmbA==')" class="grey" style="text-decoration: underline">35</a>
                                </p>

                                <p>

                                    <br>
                                    <a id="MainContent__userPage_ctl00_rpItems_linkRenew_12" class="renew" href="#" renew="/trang-ca-nhan/uspg-userrenewproduct/itemId-20809757">
                                        <img src="https://file4.batdongsan.com.vn/images/renew.png" alt="Gửi lại tin này" title="Gửi lại tin này">
                                    </a>
                                </p>

                            </td>
                            <td class="aligncenter">
                                <p>
                                    20-05-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    27-05-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>

                                    <a href="javascript:void(0)" onclick="GetAllNote('20809757')" class="grey" style="text-decoration: underline;">0</a>

                                </p>
                            </td>
                        </tr>

                        <tr class="prod-vip5">
                            <td>

                                14
                            </td>
                            <td class="aligncenter">
                                <div style="padding-top:25px;">
                                    20594018
                                    <img src="https://file4.batdongsan.com.vn/images/Default/images/ViptypeV5-label.png">
                                </div>
                                Hết thời gian hiển thị
                            </td>
                            <td>

                                <a class="prod-title" id="view_20594018" href="/ban-nha-rieng-duong-pham-ngoc-thach-3/81m-4-tang-mat-tien-6m-5-6-ty-pr20594018" target="_blank"><img src="/Images/nophoto.jpg" alt="Bán nhà 81m2 4 tầng, mặt tiền 6m, Phạm Ngọc Thạch, 5,6 tỷ">Bán nhà 81m2 4 tầng, mặt tiền 6m, Phạm Ngọc Thạch, 5,6 tỷ</a>
                                <div style="clear: both; text-align: right; padding-top: 5px;">


                                    &nbsp;
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkView_13" class="grey" href="/ban-nha-rieng-duong-pham-ngoc-thach-3/81m-4-tang-mat-tien-6m-5-6-ty-pr20594018" target="_blank">
                                        <img src="https://file4.batdongsan.com.vn/images/xem.gif">
                                        Xem</a>
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkEdit_13" href="javascript:confirmReNew('/trang-ca-nhan/uspg-userrenewproduct/itemId-20594018')">
                                        <img src="https://file4.batdongsan.com.vn/images/sua.gif"> Sửa</a>&nbsp;


                                    <a id="MainContent__userPage_ctl00_rpItems_lnkDel_13" class="btn-xoa" href="/trang-ca-nhan/uspg-userdelproduct/itemId-20594018">Xóa</a>


                                    <div style="display: none;">
                                        <input type="submit" name="ctl00$MainContent$_userPage$ctl00$rpItems$ctl14$btnDone" value="Đã bán" id="MainContent__userPage_ctl00_rpItems_btnDone_13" title="Click để chuyển tin sang trạng thái đã bán hoặc đã cho thuê" class="product-done-grey">
                                    </div>
                                </div>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    <a id="pageviews_20594018" href="javascript: PageViewDaily('aDsAXrJUDT2wURNev88iDA==')" class="grey" style="text-decoration: underline">53</a>
                                </p>

                                <p>

                                    <br>
                                    <a id="MainContent__userPage_ctl00_rpItems_linkRenew_13" class="renew" href="#" renew="/trang-ca-nhan/uspg-userrenewproduct/itemId-20594018">
                                        <img src="https://file4.batdongsan.com.vn/images/renew.png" alt="Gửi lại tin này" title="Gửi lại tin này">
                                    </a>
                                </p>

                            </td>
                            <td class="aligncenter">
                                <p>
                                    20-05-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    27-05-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>

                                    <a href="javascript:void(0)" onclick="GetAllNote('20594018')" class="grey" style="text-decoration: underline;">1</a>

                                </p>
                            </td>
                        </tr>

                        <tr class="prod-vip5">
                            <td>

                                15
                            </td>
                            <td class="aligncenter">
                                <div style="padding-top:25px;">
                                    20507588
                                    <img src="https://file4.batdongsan.com.vn/images/Default/images/ViptypeV5-label.png">
                                </div>
                                Hết thời gian hiển thị
                            </td>
                            <td>

                                <a class="prod-title" id="view_20507588" href="/ban-nha-rieng-pho-bach-mai-4/o-to-do-cua-32-m-4-m-mat-tien-sieu-re-3-6-ty-pr20507588" target="_blank"><img src="https://file4.batdongsan.com.vn/crop/77x62/2019/04/27/20190427103606-c943_wm.jpg" alt="Bán nhà phố Bạch Mai, ô tô đỗ cửa, 32m2, 4m mặt tiền, siêu rẻ 3,6 tỷ">Bán nhà phố Bạch Mai, ô tô đỗ cửa, 32m2, 4m mặt tiền, siêu rẻ 3,6 tỷ</a>
                                <div style="clear: both; text-align: right; padding-top: 5px;">


                                    &nbsp;
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkView_14" class="grey" href="/ban-nha-rieng-pho-bach-mai-4/o-to-do-cua-32-m-4-m-mat-tien-sieu-re-3-6-ty-pr20507588" target="_blank">
                                        <img src="https://file4.batdongsan.com.vn/images/xem.gif">
                                        Xem</a>
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkEdit_14" href="javascript:confirmReNew('/trang-ca-nhan/uspg-userrenewproduct/itemId-20507588')">
                                        <img src="https://file4.batdongsan.com.vn/images/sua.gif"> Sửa</a>&nbsp;


                                    <a id="MainContent__userPage_ctl00_rpItems_lnkDel_14" class="btn-xoa" href="/trang-ca-nhan/uspg-userdelproduct/itemId-20507588">Xóa</a>


                                    <div style="display: none;">
                                        <input type="submit" name="ctl00$MainContent$_userPage$ctl00$rpItems$ctl15$btnDone" value="Đã bán" id="MainContent__userPage_ctl00_rpItems_btnDone_14" title="Click để chuyển tin sang trạng thái đã bán hoặc đã cho thuê" class="product-done-grey">
                                    </div>
                                </div>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    <a id="pageviews_20507588" href="javascript: PageViewDaily('EPGqm3kORbq0KGCTOmlELQ==')" class="grey" style="text-decoration: underline">31</a>
                                </p>

                                <p>

                                    <br>
                                    <a id="MainContent__userPage_ctl00_rpItems_linkRenew_14" class="renew" href="#" renew="/trang-ca-nhan/uspg-userrenewproduct/itemId-20507588">
                                        <img src="https://file4.batdongsan.com.vn/images/renew.png" alt="Gửi lại tin này" title="Gửi lại tin này">
                                    </a>
                                </p>

                            </td>
                            <td class="aligncenter">
                                <p>
                                    20-05-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    27-05-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>

                                    <a href="javascript:void(0)" onclick="GetAllNote('20507588')" class="grey" style="text-decoration: underline;">2</a>

                                </p>
                            </td>
                        </tr>

                        <tr class="prod-vip5">
                            <td>

                                16
                            </td>
                            <td class="aligncenter">
                                <div style="padding-top:25px;">
                                    20224130
                                    <img src="https://file4.batdongsan.com.vn/images/Default/images/ViptypeV5-label.png">
                                </div>
                                Không duyệt<br>09-05-2019
                            </td>
                            <td>

                                <span class="prod-title" id="view_20224130"><img src="https://file4.batdongsan.com.vn/crop/77x62/2019/04/09/20190409111739-d6be_wm.jpg" alt="Bán nhà siêu rẻ 32m2 x 3 tầng, 1,9 tỷ, Khương Đình">Bán nhà siêu rẻ 32m2 x 3 tầng, 1,9 tỷ, Khương Đình</span>
                                <div style="clear: both; text-align: right; padding-top: 5px;">


                                    &nbsp;

                                    <a id="MainContent__userPage_ctl00_rpItems_lnkEdit_15" href="/trang-ca-nhan/uspg-updateproduct/itemId-20224130">
                                        <img src="https://file4.batdongsan.com.vn/images/sua.gif"> Sửa</a>&nbsp;


                                    <a id="MainContent__userPage_ctl00_rpItems_lnkDel_15" class="btn-xoa" href="/trang-ca-nhan/uspg-userdelproduct/itemId-20224130">Xóa</a>


                                    <div style="display: none;">

                                    </div>
                                </div>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    <a id="pageviews_20224130" href="javascript: PageViewDaily('CCk/hPlB1E+TTLKxbbL3hg==')" class="grey" style="text-decoration: underline">108</a>
                                </p>

                                <p>

                                    <br>

                                </p>

                            </td>
                            <td class="aligncenter">
                                <p>
                                    09-05-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    16-05-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>

                                    <a href="javascript:void(0)" onclick="GetAllNote('20224130')" class="grey" style="text-decoration: underline;">2</a>

                                </p>
                            </td>
                        </tr>

                        <tr class="prod-vip5">
                            <td>

                                17
                            </td>
                            <td class="aligncenter">
                                <div style="padding-top:25px;">
                                    20541572
                                    <img src="https://file4.batdongsan.com.vn/images/Default/images/ViptypeV5-label.png">
                                </div>
                                Hết thời gian hiển thị
                            </td>
                            <td>

                                <a class="prod-title" id="view_20541572" href="/ban-nha-rieng-hai-ba-trung/phan-lo-o-to-do-cua-32m-3-tang-dep-3-3-ty-pr20541572" target="_blank"><img src="https://file4.batdongsan.com.vn/crop/77x62/2019/05/02/20190502232151-5df3_wm.jpg" alt="Bán nhà phân lô ô tô đỗ cửa, 32m2, 3 tầng đẹp, 3,3 tỷ">Bán nhà phân lô ô tô đỗ cửa, 32m2, 3 tầng đẹp, 3,3 tỷ</a>
                                <div style="clear: both; text-align: right; padding-top: 5px;">


                                    &nbsp;
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkView_16" class="grey" href="/ban-nha-rieng-hai-ba-trung/phan-lo-o-to-do-cua-32m-3-tang-dep-3-3-ty-pr20541572" target="_blank">
                                        <img src="https://file4.batdongsan.com.vn/images/xem.gif">
                                        Xem</a>
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkEdit_16" href="javascript:confirmReNew('/trang-ca-nhan/uspg-userrenewproduct/itemId-20541572')">
                                        <img src="https://file4.batdongsan.com.vn/images/sua.gif"> Sửa</a>&nbsp;


                                    <a id="MainContent__userPage_ctl00_rpItems_lnkDel_16" class="btn-xoa" href="/trang-ca-nhan/uspg-userdelproduct/itemId-20541572">Xóa</a>


                                    <div style="display: none;">
                                        <input type="submit" name="ctl00$MainContent$_userPage$ctl00$rpItems$ctl17$btnDone" value="Đã bán" id="MainContent__userPage_ctl00_rpItems_btnDone_16" title="Click để chuyển tin sang trạng thái đã bán hoặc đã cho thuê" class="product-done-grey">
                                    </div>
                                </div>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    <a id="pageviews_20541572" href="javascript: PageViewDaily('JyX3pzKcruDUSPYxknpMVQ==')" class="grey" style="text-decoration: underline">16</a>
                                </p>

                                <p>

                                    <br>
                                    <a id="MainContent__userPage_ctl00_rpItems_linkRenew_16" class="renew" href="#" renew="/trang-ca-nhan/uspg-userrenewproduct/itemId-20541572">
                                        <img src="https://file4.batdongsan.com.vn/images/renew.png" alt="Gửi lại tin này" title="Gửi lại tin này">
                                    </a>
                                </p>

                            </td>
                            <td class="aligncenter">
                                <p>
                                    03-05-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    10-05-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>

                                    <a href="javascript:void(0)" onclick="GetAllNote('20541572')" class="grey" style="text-decoration: underline;">0</a>

                                </p>
                            </td>
                        </tr>

                        <tr class="prod-vip5">
                            <td>

                                18
                            </td>
                            <td class="aligncenter">
                                <div style="padding-top:25px;">
                                    20230597
                                    <img src="https://file4.batdongsan.com.vn/images/Default/images/ViptypeV5-label.png">
                                </div>
                                Hết thời gian hiển thị
                            </td>
                            <td>

                                <a class="prod-title" id="view_20230597" href="/ban-nha-rieng-pho-thai-thinh-3/gap-nhatay-son-ngo-o-to-kinh-doanh-45m2-4-2-ty-pr20230597" target="_blank"><img src="https://file4.batdongsan.com.vn/crop/77x62/2019/04/09/20190409155405-e40d_wm.jpg" alt="Bán nhà gần Tây Sơn, ngõ ô tô, kinh doanh, 45m2, 4,2 tỷ">Bán nhà gần Tây Sơn, ngõ ô tô, kinh doanh, 45m2, 4,2 tỷ</a>
                                <div style="clear: both; text-align: right; padding-top: 5px;">


                                    &nbsp;
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkView_17" class="grey" href="/ban-nha-rieng-pho-thai-thinh-3/gap-nhatay-son-ngo-o-to-kinh-doanh-45m2-4-2-ty-pr20230597" target="_blank">
                                        <img src="https://file4.batdongsan.com.vn/images/xem.gif">
                                        Xem</a>
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkEdit_17" href="javascript:confirmReNew('/trang-ca-nhan/uspg-userrenewproduct/itemId-20230597')">
                                        <img src="https://file4.batdongsan.com.vn/images/sua.gif"> Sửa</a>&nbsp;


                                    <a id="MainContent__userPage_ctl00_rpItems_lnkDel_17" class="btn-xoa" href="/trang-ca-nhan/uspg-userdelproduct/itemId-20230597">Xóa</a>


                                    <div style="display: none;">
                                        <input type="submit" name="ctl00$MainContent$_userPage$ctl00$rpItems$ctl18$btnDone" value="Đã bán" id="MainContent__userPage_ctl00_rpItems_btnDone_17" title="Click để chuyển tin sang trạng thái đã bán hoặc đã cho thuê" class="product-done-grey">
                                    </div>
                                </div>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    <a id="pageviews_20230597" href="javascript: PageViewDaily('Lpb29KmvuFgWRglMjLQhgA==')" class="grey" style="text-decoration: underline">35</a>
                                </p>

                                <p>

                                    <br>
                                    <a id="MainContent__userPage_ctl00_rpItems_linkRenew_17" class="renew" href="#" renew="/trang-ca-nhan/uspg-userrenewproduct/itemId-20230597">
                                        <img src="https://file4.batdongsan.com.vn/images/renew.png" alt="Gửi lại tin này" title="Gửi lại tin này">
                                    </a>
                                </p>

                            </td>
                            <td class="aligncenter">
                                <p>
                                    02-05-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    09-05-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>

                                    <a href="javascript:void(0)" onclick="GetAllNote('20230597')" class="grey" style="text-decoration: underline;">1</a>

                                </p>
                            </td>
                        </tr>

                        <tr class="prod-vip5">
                            <td>

                                19
                            </td>
                            <td class="aligncenter">
                                <div style="padding-top:25px;">
                                    20346147
                                    <img src="https://file4.batdongsan.com.vn/images/Default/images/ViptypeV5-label.png">
                                </div>
                                Hết thời gian hiển thị
                            </td>
                            <td>

                                <a class="prod-title" id="view_20346147" href="/ban-nha-mat-pho-duong-nguyen-khuyen-3/sieu-re-2-6-ty-cho-thue-12tr-tang-1-25m-2-tang-khuyen-pr20346147" target="_blank"><img src="https://file4.batdongsan.com.vn/crop/77x62/2019/04/17/20190417145256-fc9b_wm.jpg" alt="Nhà mặt phố siêu rẻ 2,6 tỷ, cho thuê 12tr tầng 1, 25m2 2 tầng Nguyễn Khuyến">Nhà mặt phố siêu rẻ 2,6 tỷ, cho thuê 12tr tầng 1, 25m2 2 tầng Nguyễn Khuyến</a>
                                <div style="clear: both; text-align: right; padding-top: 5px;">


                                    &nbsp;
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkView_18" class="grey" href="/ban-nha-mat-pho-duong-nguyen-khuyen-3/sieu-re-2-6-ty-cho-thue-12tr-tang-1-25m-2-tang-khuyen-pr20346147" target="_blank">
                                        <img src="https://file4.batdongsan.com.vn/images/xem.gif">
                                        Xem</a>
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkEdit_18" href="javascript:confirmReNew('/trang-ca-nhan/uspg-userrenewproduct/itemId-20346147')">
                                        <img src="https://file4.batdongsan.com.vn/images/sua.gif"> Sửa</a>&nbsp;


                                    <a id="MainContent__userPage_ctl00_rpItems_lnkDel_18" class="btn-xoa" href="/trang-ca-nhan/uspg-userdelproduct/itemId-20346147">Xóa</a>


                                    <div style="display: none;">
                                        <input type="submit" name="ctl00$MainContent$_userPage$ctl00$rpItems$ctl19$btnDone" value="Đã bán" id="MainContent__userPage_ctl00_rpItems_btnDone_18" title="Click để chuyển tin sang trạng thái đã bán hoặc đã cho thuê" class="product-done-grey">
                                    </div>
                                </div>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    <a id="pageviews_20346147" href="javascript: PageViewDaily('XV6dgL2mkzFUsyqxk1zRcA==')" class="grey" style="text-decoration: underline">129</a>
                                </p>

                                <p>

                                    <br>
                                    <a id="MainContent__userPage_ctl00_rpItems_linkRenew_18" class="renew" href="#" renew="/trang-ca-nhan/uspg-userrenewproduct/itemId-20346147">
                                        <img src="https://file4.batdongsan.com.vn/images/renew.png" alt="Gửi lại tin này" title="Gửi lại tin này">
                                    </a>
                                </p>

                            </td>
                            <td class="aligncenter">
                                <p>
                                    02-05-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    09-05-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>

                                    <a href="javascript:void(0)" onclick="GetAllNote('20346147')" class="grey" style="text-decoration: underline;">1</a>

                                </p>
                            </td>
                        </tr>

                        <tr class="prod-vip5">
                            <td>

                                20
                            </td>
                            <td class="aligncenter">
                                <div style="padding-top:25px;">
                                    20325081
                                    <img src="https://file4.batdongsan.com.vn/images/Default/images/ViptypeV5-label.png">
                                </div>
                                Hết thời gian hiển thị
                            </td>
                            <td>

                                <a class="prod-title" id="view_20325081" href="/ban-nha-rieng-pho-chua-boc-3/mat-ngo-dang-cho-sinh-vien-thue-17tr-58m2-4-tang-5-m-5-9-ty-pr20325081" target="_blank"><img src="https://file4.batdongsan.com.vn/crop/77x62/2019/04/16/20190416134357-bacd_wm.jpg" alt="Bán nhà mặt ngõ Chùa Bộc đang cho sinh viên thuê 17tr/m2, 58m2, 5 tầng, MT 5 m, 5,9 tỷ">Bán nhà mặt ngõ Chùa Bộc đang cho sinh viên thuê 17tr/m2, 58m2, 5 tầng, MT 5 m, 5,9 tỷ</a>
                                <div style="clear: both; text-align: right; padding-top: 5px;">


                                    &nbsp;
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkView_19" class="grey" href="/ban-nha-rieng-pho-chua-boc-3/mat-ngo-dang-cho-sinh-vien-thue-17tr-58m2-4-tang-5-m-5-9-ty-pr20325081" target="_blank">
                                        <img src="https://file4.batdongsan.com.vn/images/xem.gif">
                                        Xem</a>
                                    <a id="MainContent__userPage_ctl00_rpItems_lnkEdit_19" href="javascript:confirmReNew('/trang-ca-nhan/uspg-userrenewproduct/itemId-20325081')">
                                        <img src="https://file4.batdongsan.com.vn/images/sua.gif"> Sửa</a>&nbsp;


                                    <a id="MainContent__userPage_ctl00_rpItems_lnkDel_19" class="btn-xoa" href="/trang-ca-nhan/uspg-userdelproduct/itemId-20325081">Xóa</a>


                                    <div style="display: none;">
                                        <input type="submit" name="ctl00$MainContent$_userPage$ctl00$rpItems$ctl20$btnDone" value="Đã bán" id="MainContent__userPage_ctl00_rpItems_btnDone_19" title="Click để chuyển tin sang trạng thái đã bán hoặc đã cho thuê" class="product-done-grey">
                                    </div>
                                </div>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    <a id="pageviews_20325081" href="javascript: PageViewDaily('jQv17r3+TaY4p/eHaPYZGA==')" class="grey" style="text-decoration: underline">50</a>
                                </p>

                                <p>

                                    <br>
                                    <a id="MainContent__userPage_ctl00_rpItems_linkRenew_19" class="renew" href="#" renew="/trang-ca-nhan/uspg-userrenewproduct/itemId-20325081">
                                        <img src="https://file4.batdongsan.com.vn/images/renew.png" alt="Gửi lại tin này" title="Gửi lại tin này">
                                    </a>
                                </p>

                            </td>
                            <td class="aligncenter">
                                <p>
                                    02-05-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>
                                    09-05-2019
                                </p>
                            </td>
                            <td class="aligncenter">
                                <p>

                                    <a href="javascript:void(0)" onclick="GetAllNote('20325081')" class="grey" style="text-decoration: underline;">1</a>

                                </p>
                            </td>
                        </tr>

                        </tbody>
                    </table>

                    <div class="pager">
                        <span id="MainContent__userPage_ctl00_DataPager"></span>
                    </div>
                    <div class="clear10"></div>
                    <div><strong>Note</strong></div>
                    <div>
                        Trong trường hợp Quý khách muốn đăng và quản lý tin rao tiếng Anh, xin vui lòng click vào đây
                        <img src="https://file1.batdongsan.com.vn/images/flags/cy-GB.gif" width="24px">&nbsp;<a title="" href="/user-page"><strong>English</strong></a>
                    </div>


                    <input type="hidden" name="ctl00$MainContent$_userPage$ctl00$hddPageViewData" id="hddPageViewData" value="fbHCH63qdzHXseY4LA3k3vsyU%2b3T3baomKp2bWXUtDArKdFJBHQ9UFi3c7Ms%2bczltwuqkqm6e8ASVitpTHcm36M8MeMqgkj%2bmAtZkSoMFCqM83RubjACloz0LvSSWubYRtYP2jraugRY8PBt9XDeCPrx2DTi5OhmEO578M3AS%2bWyDkn7FvIN%2fgwdHF%2fbQ4MCqcll0XhemlOWgKyTa12QTlJK9MT4oZPGzAFClAgw1oIyh9fydZR60Pmo%2fp7HzUAP">

                    <div class="clear">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>