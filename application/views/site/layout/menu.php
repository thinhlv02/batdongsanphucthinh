
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
            <a href="<?php echo base_url()?>"><i class="fa fa-home fa-lg"></i> </a>
        </li>
        <li class="<?php echo isset($li_2) ? 'menu-active' : ''?>" title="Giới thiệu dịch vụ"><a href="<?php echo base_url('gioi-thieu-dich-vu')?>"> <?php echo $common_lang['intro']; ?></a></li>
        <li class="<?php echo isset($li_3) ? 'menu-active' : ''?>" title="Hỗ trợ"><a href="<?php echo base_url('ho-tro')?>"> <?php echo $common_lang['support']; ?></a></li>
        <li class="<?php echo isset($li_6) ? 'menu-active' : ''?>" title="Tin tức"><a href="<?php echo base_url('tin-tuc')?>"> <?php echo $common_lang['news_menu']; ?></a></li>
        <li class="<?php echo isset($li_4) ? 'menu-active' : ''?>" title="Chính sách và điều khoản"><a href="<?php echo base_url('dieu-khoan-su-dung')?>"> <?php echo $common_lang['policies']; ?></a></li>
        <li class="<?php echo isset($li_5) ? 'menu-active' : ''?>" title="Liên hệ"><a href="<?php echo base_url('lien-he')?>"> <?php echo $common_lang['contact']; ?></a></li>
<!--        register - login-->
        <li class="user_style" id="myBtnRegister" title="<?php echo $this->lang->line('register'); ?>" onclick="">
            <a href="javascript:void(0)" class="text-uppercase">
                <i class="fa fa-user-plus text-danger mr-3" aria-hidden="true"></i>
                <?php echo $this->lang->line('register'); ?>
            </a>
        </li>

        <li class="user_style" id="myBtnLogin" title="<?php echo $this->lang->line('login'); ?>">
            <a href="javascript:void(0)" class="menu_login text-uppercase">
                <i class="fa fa-sign-in-alt text-danger mr-3" aria-hidden="true"></i>
                <?php echo $this->lang->line('login'); ?>
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


<!--modal register-->
<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="myModalRegister" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-user"></span> <?php echo $login_lang['register_title']; ?></h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form">
                        <div class="form-group">
                            <label for="usrname"><span class="glyphicon glyphicon-user"></span> <?php echo $login_lang['username']; ?></label>
                            <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="usrname"><span class="glyphicon glyphicon-envelope"></span> <?php echo $login_lang['email']; ?></label>
                            <input type="text" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $login_lang['password']; ?></label>
                            <input type="text" class="form-control" id="psw" placeholder="Enter password">
                        </div>

                        <div class="form-group">
                            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $login_lang['repassword']; ?></label>
                            <input type="text" class="form-control" id="psw" placeholder="Enter Repeat password">
                        </div>

                        <div class="checkbox">
                            <label><input type="checkbox" value="" checked><?php echo $login_lang['remember']; ?></label>
                        </div>
                        <p><?php echo $login_lang['policies1']; ?> <a href="#" style="color:dodgerblue"><?php echo $login_lang['policies2']; ?></a>.</p>
                        <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span>
                            <?php echo $login_lang['btn_register']; ?></button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> <?php echo $login_lang['btn_cancel']; ?></button>

                </div>
            </div>

        </div>
    </div>
</div>
<!--Modal end register-->

<!--modal login-->
<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="myModalLogin" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header" style="padding:35px 50px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4><span class="glyphicon glyphicon-log-in"></span> <?php echo $login_lang['login_title'] ?></h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form">
                        <div class="form-group">
                            <label for="usrname"><span class="glyphicon glyphicon-user"></span> <?php echo $login_lang['username']; ?></label>
                            <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> <?php echo $login_lang['password']; ?></label>
                            <input type="text" class="form-control" id="psw" placeholder="Enter password">
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" value="" checked><?php echo $login_lang['remember']; ?></label>
                        </div>
                        <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> <?php echo $login_lang['btn_login']; ?></button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> <?php echo $login_lang['btn_cancel']; ?></button>
                    <p><?php echo $login_lang['not_member']; ?> <a href="#"><?php echo $login_lang['btn_register']; ?></a></p>
                    <p><?php echo $login_lang['forgot']; ?> <a href="#"><?php echo $login_lang['password']; ?>?</a></p>
                </div>
            </div>

        </div>
    </div>
</div>
<!--modal end login-->

<script>
    $(document).ready(function(){
        $('.menu-active').each(function() {
            $(this).prepend('<span></span>');
        });

        //login
        $("#myBtnLogin").click(function(){
            $("#myModalLogin").modal();
        });


        //register
        $("#myBtnRegister").click(function(){
            $("#myModalRegister").modal();
        });
    });

    function show_alert() {
        swal({
            title: "<?php echo $this->lang->line('oops'); ?>",
            text: "<?php echo $this->lang->line('warning'); ?>",
            icon: "warning",
            buttons: {},
            timer: 1500
        });
        $(".swal-text").addClass("font-weight-bold");
    }
</script>

<style>
    .modal-header, h4, .close {
        background-color: #5cb85c;
        color:white !important;
        text-align: center;
        font-size: 30px;
    }
    .modal-footer {
        background-color: #f9f9f9;
    }
</style>