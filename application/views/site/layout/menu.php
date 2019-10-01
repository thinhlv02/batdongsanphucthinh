
<div class="sub-nav">
    <div id="hot_line">Hotline: 0796 43 22 11</div>
    <div class="logo">
        <a href="<?php echo base_url() ?>">

        <img src="<?php echo public_url('images/logo.png')?>">
        </a>
<!--        <a href="--><?php //echo base_url()?><!--">Trao tiện ích, nhận tin yêu</a>-->
    </div>
    <ul class="ul-large">
        <li class="<?php echo isset($li_1) ? 'menu-active' : ''?>" title="Trang chủ"><a href="<?php echo base_url()?>"><i class="fa fa-home"></i> Trang chủ</a></li>
        <li class="<?php echo isset($li_2) ? 'menu-active' : ''?>" title="Giới thiệu dịch vụ"><a href="<?php echo base_url('gioi-thieu-dich-vu')?>"><i class="fa fa-window-restore"></i> Giới thiệu dịch vụ</a></li>
        <li class="<?php echo isset($li_3) ? 'menu-active' : ''?>" title="Hỗ trợ"><a href="<?php echo base_url('ho-tro')?>"><i class="fa fa-life-ring"></i> Hỗ trợ</a></li>
        <li class="<?php echo isset($li_6) ? 'menu-active' : ''?>" title="Tin tức"><a href="<?php echo base_url('tin-tuc')?>"><i class="fa fa-newspaper"></i> Tin tức</a></li>
        <li class="<?php echo isset($li_4) ? 'menu-active' : ''?>" title="Chính sách và điều khoản"><a href="<?php echo base_url('dieu-khoan-su-dung')?>"><i class="fa fa-handshake"></i> Chính sách và điều khoản</a></li>
        <li class="<?php echo isset($li_5) ? 'menu-active' : ''?>" title="Liên hệ"><a href="<?php echo base_url('lien-he')?>"><i class="fa fa-user-md"></i> Liên hệ</a></li>
    </ul>


    <nav role='navigation' class="nav-small">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">
                <a href="<?php echo base_url()?>"><li>Trang chủ</li></a>
                <a href="<?php echo base_url('gioi-thieu-dich-vu')?>"><li>Giới thiệu dịch vụ</li></a>
                <a href="<?php echo base_url('ho-tro')?>"><li>Hỗ trợ</li></a>
                <a href="<?php echo base_url('tin-tuc')?>"><li>Tin tức</li></a>
                <a href="<?php echo base_url('dieu-khoan-su-dung')?>"><li>Chính sách và điều khoản</li></a>
                <a href="<?php echo base_url('lien-he')?>"><li>Liên hệ</li></a>
            </ul>
        </div>
    </nav>

</div>