<nav class="navbar navbar-default">
    <div class="container">
        <ul class="nav navbar-nav">
            <li class="<?php echo !empty($li_1) ? 'menu-active' : ''?>" title="<?php echo $common_lang['home']; ?>"><a href="<?php echo base_url()?>"><i class="mdi mdi-home"></i> <?php echo $common_lang['home']; ?></a></li>
            <li class="<?php echo !empty($li_2) ? 'menu-active' : ''?>" title="<?php echo $common_lang['lmenu_intro']; ?>"><a href="<?php echo base_url('gioi-thieu')?>"> <?php echo $common_lang['lmenu_intro']; ?></a></li>
            <li class="<?php echo !empty($li_3) ? 'menu-active' : ''?>" title="<?php echo $common_lang['lmenu_support']; ?>"><a href="<?php echo base_url('ho-tro')?>"> <?php echo $common_lang['lmenu_support']; ?></a></li>
            <li class="<?php echo !empty($li_7) ? 'menu-active' : ''?>" title="<?php echo $common_lang['lmenu_price']; ?>"><a href="<?php echo base_url('bang-gia')?>"> <?php echo $common_lang['lmenu_price']; ?></a></li>
            <li class="<?php echo !empty($li_4) ? 'menu-active' : ''?>" title="<?php echo $common_lang['lmenu_policy']; ?>"><a href="<?php echo base_url('dieu-khoan-su-dung')?>"> <?php echo $common_lang['lmenu_policy']; ?></a></li>
            <li class="<?php echo !empty($li_8) ? 'menu-active' : ''?>" title="<?php echo $common_lang['lmenu_faq']; ?>"><a href="<?php echo base_url('nhung-cau-hoi-thuong-gap')?>"> <?php echo $common_lang['lmenu_faq']; ?></a></li>
            <li class="<?php echo !empty($li_5) ? 'menu-active' : ''?>" title="<?php echo $common_lang['lmenu_contact']; ?>"><a href="<?php echo base_url('lien-he')?>"> <?php echo $common_lang['lmenu_contact']; ?></a></li>
        </ul>
    </div>
</nav>

<style>
    .navbar-default {
        border-top: 1px solid #ccc !important;
        border-bottom: 1px solid #ccc !important;
        background-color: #ddd !important;
    }
</style>