<section class="detail">
    <div class="container">
        <div class="col-sm-4 col-md-3">
            <div class="left-menu">
                <div class="left-title">Bảng giá quảng cáo</div>
                <ul>
                    <?php foreach ($prices as $k => $p) { ?>
                        <li class="<?php if ($p->id == $active || ($k == 0 && $active == 0)) echo 'active'; ?>" onclick="showHeaderPrice('<?php echo $p->id; ?>')">
                            <a href="<?php echo base_url('bang-gia/' . create_slug($p->name) . '-' . $p->id . '.html#' . $p->id) ?>">
                                <?php echo $p->name ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="col-md-9 col-sm-8 detail-content" style="padding-left: 10px !important;">
            <div class="line-height-2 pl-5">

                <?php if (isset($price)) { ?>
                    <!--                    <h2>--><?php //echo $price->name ?><!--</h2>-->
                    <div style="border: 1px solid #ccc; border-radius: 8px 8px 0 0; padding: 10px 0;">
                        <div id="pad1" class="padcontent" style="display: block;">
                            <div style="color: #055699; font-weight: bold;">
                                <div style="width: 350px; float: left; margin: 80px 0 0 60px;">
                                    <div style="width: 80px; float: left; font-size: 30px; line-height: 35px; font-family: times new roman;">
                                        HIỆU
                                    </div>
                                    <div style="width: 65px; float: left; font-size: 80px; line-height: 60px; font-family: times new roman;">
                                        Q
                                    </div>
                                    <div style="width: 200px; float: left;">
                                        <div style="font-size: 30px; line-height: 35px; font-family: times new roman;">
                                            UẢ
                                        </div>
                                        <div style="font-size: 30px; line-height: 35px; font-family: times new roman;">
                                            UẢNG CÁO
                                        </div>
                                    </div>
                                </div>
                                <div style="float: left;">
                                    <img src="<?php echo public_url('images/price1.jpg'); ?>">
                                </div>
                            </div>

                        </div>
                        <div id="pad2" style="display: none;" class="padcontent">
                            <div style="text-align: center; color: #055699; font-size: 18px; margin-top: 20px; margin-bottom: 5px; font-family: 'times new roman'; font-weight: bold;">
                                BÁO GIÁ BANNER PHIÊN BẢN DESKTOP
                            </div>
                            <div style="text-align: center; margin-bottom: 30px;">(Áp dụng từ 26/01/2019 – Giá đã bao gồm VAT)</div>
                            <div style="text-align: center">

                            </div>
                        </div>

                        <div style="padding:15px;  text-align: justify; text-rendering: geometricPrecision; clear: both">
                            <p>
                                <?php echo $price->content ?>
                            </p>
                        </div>
                    </div>
                <?php } ?>

            </div>

        </div>

    </div>

</section>

<script type="text/javascript">
    $(document).ready(function () {
        if (window.location.hash) {
            var hash = window.location.hash.substring(1, 2);
            if ($.isNumeric(hash)) showHeaderPrice(hash);
        } else {
            showHeaderPrice(1);
        }
    });

    function showHeaderPrice(id) {
        $(".padcontent").each(function () {
            $(this).css("display", "none");
        });

        $("#pad" + id).css("display", "block");
    }

</script>