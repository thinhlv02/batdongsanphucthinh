
<div class="sub-nav">
    <div id="hot_line">Hotline: 0796 43 22 11</div>
    <div class="logo">
        <a href="<?php echo base_url() ?>">

        <img src="<?php echo public_url('images/logo.png')?>">
        </a>
<!--        <a href="--><?php //echo base_url()?><!--">Trao tiện ích, nhận tin yêu</a>-->
    </div>
<!--    switch language -->
    <div id="language">
        <a href="<?php echo $language == 'vn' ? base_url('en/' .getLastUri()) : base_url('vn/'.getLastUri()) ?>">
            <img src="<?php echo $language == 'vn' ? public_url('images/flag_us.png') : public_url('images/flag_vn.png') ?>"/>
            <?php echo $language == 'vn' ? 'English' : 'Vietnamese' ; ?>
        </a>
    </div>

    <ul class="ul-large">
        <li class="<?php echo isset($li_1) ? 'menu-active' : ''?>" title="Trang chủ">
            <a href="<?php echo base_url()?>"><i class="fa fa-home"></i> <?php echo $this->lang->line('home'); ?></a>
        </li>
        <li class="<?php echo isset($li_2) ? 'menu-active' : ''?>" title="Giới thiệu dịch vụ"><a href="<?php echo base_url('gioi-thieu-dich-vu')?>"> <?php echo $this->lang->line('intro'); ?></a></li>
        <li class="<?php echo isset($li_3) ? 'menu-active' : ''?>" title="Hỗ trợ"><a href="<?php echo base_url('ho-tro')?>"> <?php echo $this->lang->line('support'); ?></a></li>
        <li class="<?php echo isset($li_6) ? 'menu-active' : ''?>" title="Tin tức"><a href="<?php echo base_url('tin-tuc')?>"> <?php echo $this->lang->line('news_menu'); ?></a></li>
        <li class="<?php echo isset($li_4) ? 'menu-active' : ''?>" title="Chính sách và điều khoản"><a href="<?php echo base_url('dieu-khoan-su-dung')?>"> <?php echo $this->lang->line('policies'); ?></a></li>
        <li class="<?php echo isset($li_5) ? 'menu-active' : ''?>" title="Liên hệ"><a href="<?php echo base_url('lien-he')?>"> <?php echo $this->lang->line('contact'); ?></a></li>
<!--        register - login-->
        <li class="user_style" title="<?php echo $this->lang->line('login'); ?>">
            <a href="javascript:void(0)" class="menu_login">
                <i class="fa fa-sign-in-alt text-danger mr-3" aria-hidden="true"></i>
                <?php echo $this->lang->line('login'); ?>
            </a>
        </li>
        <li class="user_style" title="<?php echo $this->lang->line('register'); ?>">
            <a href="javascript:void(0)">
                <i class="fa fa-user text-danger mr-3" aria-hidden="true"></i>
                <?php echo $this->lang->line('register'); ?>
            </a>
        </li>
    </ul>

    <nav role='navigation' class="nav-small">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">
                <a href="<?php echo base_url()?>"><li><?php echo $this->lang->line('home'); ?></li></a>
                <a href="<?php echo base_url('gioi-thieu-dich-vu')?>"><li><?php echo $this->lang->line('intro'); ?></li></a>
                <a href="<?php echo base_url('ho-tro')?>"><li><?php echo $this->lang->line('support'); ?></li></a>
                <a href="<?php echo base_url('tin-tuc')?>"><li><?php echo $this->lang->line('news_menu'); ?></li></a>
                <a href="<?php echo base_url('dieu-khoan-su-dung')?>"><li><?php echo $this->lang->line('policies'); ?></li></a>
                <a href="<?php echo base_url('lien-he')?>"><li><?php echo $this->lang->line('contact'); ?></li></a>
            </ul>
        </div>
    </nav>

</div>

<script>
    $(document).ready(function(){
        $('.menu-active').each(function() {
            $(this).prepend('<span></span>');
        });
    });
</script>