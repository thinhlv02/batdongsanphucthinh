<section class="detail">
    <div class="container">
        <div class="col-sm-4 col-md-3">
            <div class="left-menu">
                <div class="left-title">Bảng giá quảng cáo</div>
                <ul>
                    <?php foreach ($prices as $k => $p) { ?>
                        <li class="<?php if ($p->id == $active || ($k == 0 && $active == 0)) echo 'active'; ?>" onclick="showTitlePrice('<?php echo $p->id; ?>')">
                            <a href="<?php echo base_url('bang-gia/' . create_slug($p->name) . '-' . $p->id . '.html#' . $p->id) ?>">
                                <?php echo $p->name ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="col-md-9 col-sm-8 detail-content" style="padding-left: 10px !important;">
            <div class="line-height-2 pl-5 card">

                <?php if (isset($price)) { ?>
                    <div style="padding: 10px 0;">
                        <div id="price1" class="priceTitle" style="display: block;">
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
                        <div id="price2" style="display: none;" class="priceTitle">
                            <div style="text-align: center; color: #055699; font-size: 18px; margin-top: 20px; margin-bottom: 5px; font-family: 'times new roman'; font-weight: bold;">
                                PHƯƠNG THỨC ĐĂNG TIN BĐS
                            </div>
                            <div style="text-align: center; margin-bottom: 30px;">(Áp dụng từ 26/01/2019 – Giá đã bao gồm VAT)</div>
                            <div style="text-align: center">

                            </div>
                        </div>

                        <div id="price3" style="display: none;" class="priceTitle">
                            <div style="text-align: center; color: #055699; font-size: 18px; margin-top: 20px; margin-bottom: 5px; font-family: 'times new roman'; font-weight: bold;">
                                BÁO GIÁ BANNER PHIÊN BẢN DESKTOP
                            </div>
                            <div style="text-align: center; margin-bottom: 30px;"></div>
                            <div style="text-align: center">

                            </div>
                        </div>

                        <div class="p-5" style="text-align: justify; clear: both">
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
            if ($.isNumeric(hash)) showTitlePrice(hash);
        } else {
            showTitlePrice(1);
        }
    });

    function showTitlePrice(id) {
        $(".priceTitle").each(function () {
            $(this).css("display", "none");
        });

        $("#price" + id).css("display", "block");
    }

</script>