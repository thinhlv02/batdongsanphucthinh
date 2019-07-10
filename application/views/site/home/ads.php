<section class="news">
    <div class="container-fluid">
        <div class="col-sm-12 col-md-12">
<!--            <div class="title-section"><h2>Tin rao nổi bật</h2></div>-->
<!--            test-->
            <div class="box-module">
                <div class="bg-modul"><i class="glyphicon glyphicon-th"></i> Tin Vip</div>
            </div>
<!--            test-->
<!--            <div class="sub-title-section">Khám phá tại đây</div>-->
            <div class="row">
                <?php foreach ($vip as $key => $value) { ?>

                    <div class="col-md-3 col-sm-6 col-xs-12 card">
                        <div class="card-body mb-2">
                            <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>" onclick="updateView('<?php echo $value->id; ?>');">
                                <div class="item-news">
                                    <div class="img-news" style="background-image: url(<?php echo public_url('images/ads/' . $value->img) ?>)">
                                        <div class="content-news">
                                            <div><strong style="color: #fff"><?php echo $value->title ?></strong></div>
                                            <p style="color: #fff"><?php echo $value->intro ?></p>
                                            <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>" class="btn btn-primary" style="margin-top: 10px">Xem thêm</a>
                                        </div>
                                        <div class="title-news">
                                            <span style="font-size: 13px"><?php echo date('d/m/Y', strtotime($value->created_at)) ?></span><br>
                                            <strong><?php echo $value->title ?></strong>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                <?php } ?>
            </div>
<!--            <div style="text-align: center">-->
<!--                <a href="--><?php //echo base_url('rao-vat.html') ?><!--" class="btn btn-primary" style="margin-top: 2px">Xem thêm</a>-->
<!--            </div>-->
        </div>
    </div>
</section>

<script>
    function updateView(id) {

        var _onSuccess = function(data){
            var obj = jQuery.parseJSON(data);

            if(obj.errMsg == 'unlogin')
            {
                window.location.reload(true);
                return;
            }
            else if(obj.errMsg == '' && obj.ok == 'ok')
            {
                alert('Thêm mới website thành công');
                window.location.reload(true);
                return;
            }
            else if(obj.errMsg == 'domain_not_real_exist')
            {
                alert('Domain website không tồn tại. Bạn vui lòng nhập domain website khác');
                showLoading(false);
                return;
            }
            else if(obj.errMsg == 'domain_exist')
            {
                alert('Website đã được add vào hệ thống. Bạn không thể thêm được website.');
                showLoading(false);
                return;
            }
            else if(obj.errMsg == 'domain_invalid')
            {
                alert('Domain không hợp lệ');
                showLoading(false);
                return;
            }
            else
            {
                alert(obj.errMsg);
                showLoading(false);
                return;
            }
        };

        getAjax('<?php echo site_url('ads/update_view'); ?>', 'id=' + UrlEncode.encode(id), '', 'GET', '', false, _onSuccess);

    }
</script>