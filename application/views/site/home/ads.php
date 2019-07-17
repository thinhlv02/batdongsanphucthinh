<section class="news">
    <div class="container-fluid">
        <div class="box-module">
            <div class="bg-modul"><i class="glyphicon glyphicon-star"></i> Tin Vip12</div>
        </div>
        <div class="col-sm-12 col-md-12">
<!--            <div class="title-section"><h2>Tin rao nổi bật</h2></div>-->
<!--            test-->

<!--            test-->
<!--            <div class="sub-title-section">Khám phá tại đây</div>-->
            <div class="row">
                <?php foreach ($ads_center as $key => $value) { ?>

                    <div class="col-md-2 col-sm-6 col-xs-12 card" onclick="updateView('<?php echo $value->id; ?>');">
                        <div class="card-body mb-2">
                            <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                <div class="item-news">
                                    <div class="img-news" style="background-image: url(<?php echo public_url('images/ads/' . $value->img) ?>)">
                                        <div class="content-news">
                                            <div><strong style="color: #fff"><?php echo $value->title ?></strong></div>
                                            <p style="color: #fff"><?php echo $value->intro ?></p>
                                            <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>" class="btn btn-primary mt-5">Xem thêm</a>
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