<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
<!--        <div class="navbar nav_title" style="border: 0;">-->
<!--            <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>Trang quản lý</span></a>-->
<!--        </div>-->

        <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo admin_url('dashboard') ?>" class="site_title"><i class="fa fa-paw"></i>
                <span>Trang chủ</span></a>
        </div>

        <div class="clearfix"></div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="<?php echo admin_theme() ?>production/images/img.jpg" alt="..."
                     class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Xin chào,</span>
                <h2><?php echo $admin->fullname ?></h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br/>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
<!--                    <li><a href="--><?php //echo admin_url('product') ?><!--"><i class="fa fa-product-hunt" aria-hidden="true"></i>Dịch vụ</a></li>-->
<!--                    <li><a href="--><?php //echo admin_url('question') ?><!--"><i class="fa fa-question-circle" aria-hidden="true"></i>Hỗ trợ</a></li>-->

                    <li><a><i class="fa fa-tint"></i>Quản lý bài viết<span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo admin_url('news') ?>">Tin Tức </a></li>
                            <li><a href="<?php echo admin_url('ads') ?>">Tin bán nhà đất</a></li>
                            <li><a href="<?php echo admin_url('devices') ?>">Thiết bị sử dụng</a></li>
                        </ul>
                    </li>

<!--                    <li><a href="--><?php //echo admin_url('news') ?><!--"><i class="fa fa-newspaper-o" aria-hidden="true"></i>Tin tức</a></li>-->

<!--                    <li><a href="--><?php //echo admin_url('contact') ?><!--"><i class="fa fa-phone" aria-hidden="true"></i>Liên hệ</a></li>-->
<!--                    <li><a href="--><?php //echo admin_url('content') ?><!--"><i class="fa fa-info-circle" aria-hidden="true"></i>Nội dung</a></li>-->
<!--                    <li><a href="--><?php //echo admin_url('agency') ?><!--"><i class="fa fa-map-marker" aria-hidden="true"></i>Đại lý</a></li>-->
<!--                    //only admin view-->
                    <?php if($admin->id == 1) { ?>
                        <li><a><i class="fa fa-book"></i>Quản lý chung<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="<?php echo admin_url('employees') ?>">Nhân viên </a></li>
                                <li><a href="<?php echo admin_url('customers') ?>">Khách hàng</a></li>
                                <li><a href="<?php echo admin_url('documents') ?>">Tài liệu</a></li>
                                <li><a href="<?php echo admin_url('service_money') ?>">Tiền Kh nạp</a></li>
                                <li><a href="<?php echo admin_url('Upload_Files') ?>">Upload_Files</a></li>
                                <li><a href="<?php echo admin_url('policy') ?>"><i class="fa fa-handshake-o" aria-hidden="true"></i>Điều khoản, chính sách</a></li>

                            </ul>
                        </li>
                    <?php } ?>
<!--                    //only admin view-->
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>