<section class="footer">
    <div class="container">
        <div style="min-height: 200px">
            <div class="row">
                <div class="card">
                    <div class="card-body" style="background-color: #ddd">
                        <div class="col-md-3 col-sm-12 col-xs-12 mt-2">
                            <!--                    <div class="row">-->
                            <!--                        <div class="col-md-12 col-sm-12 col-xs-12">-->
                            <img src="<?php echo public_url('images/logo.png') ?>"
                                 style="max-width: 180px; margin-top: 30px">
                            <!--                        </div>-->
                            <!--                    </div>-->
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 mt-2">
                            <div class="footer-title"><strong>THÔNG TIN LIÊN HỆ</strong></div>
                            <div>
                                <i class="fa fa-building" aria-hidden="true"></i>
                                <span><?php echo $contact->address ?></span>
                            </div>
                            <div style="margin-top: 10px">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span><?php echo $contact->phone ?></span>
                            </div>
                            <div style="margin-top: 10px">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span><?php echo $contact->email ?></span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12 mt-2">
                            <div class="footer-title"><strong>LIÊN KẾT</strong></div>
                            <ul>
                                <li><a href="<?php echo base_url('gioi-thieu-dich-vu') ?>">Giới thiệu dịch vụ</a></li>
                                <li><a href="<?php echo base_url('ho-tro') ?>">Hỗ trợ</a></li>
                                <li><a href="<?php echo base_url('dieu-khoan-su-dung') ?>">Chính sách và điều khoản</a>
                                </li>
                                <li><a href="<?php echo base_url('lien-he') ?>">Liên hệ</a></li>
                            </ul>
                        </div>

                        <div class="col-sm-12 col-md-12 col-xs-12 mt-2 text-center">
                            Copyright 2014 © phucthinh corp All Rights Reserved
                        </div>


                    </div>
                </div>
            </div>
            <!--            <div class="row col-md-12 col-sm-12 col-xs-12" style="margin-top: 30px">-->
            <!--                <div class="footer-title"><strong>ĐẠI LÝ</strong></div>-->
            <!--                <div class="row">-->
            <!--                    --><?php //foreach ($agencies as $key=>$value){ ?>
            <!--                        <div class="col-md-3 col-sm-4 col-xs-6">-->
            <!--                            <a href="-->
            <?php //echo base_url('dai-ly#'.create_slug($value->name))?><!--">--><?php //echo $value->name?><!--</a>-->
            <!--                        </div>-->
            <!--                    --><?php //}?>
            <!--                </div>-->
            <!--            </div>-->
<!--            <div class="row col-sm-12 col-md-12 col-xs-12 mt-2 text-center">-->
<!--                Copyright 2014 © phucthinh corp All Rights Reserved-->
<!--            </div>-->
        </div>

    </div>
    <div id="result_test"></div>
</section>

<button onclick="topFunction()" id="myPageup" title="Go to top">
    <img src="<?php echo base_url('public/images/arrowPageup.png') ?> ?>" style="width: 40px !important;">
</button>

<script>
    function updateView(id) {
        var _onSuccess = function (data) {

            console.log(data);

        };

        getAjax('<?php echo base_url('home/update_view'); ?>', 'id=' + UrlEncode.encode(id), '', 'GET', '', false, _onSuccess);
    }

    //page up top
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myPageup").style.display = "block";
        } else {
            document.getElementById("myPageup").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

</script>

