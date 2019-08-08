<section class="news pt-0">
    <div class="container">

        <div class="col-sm-12 col-md-12">

            <div class="row" style="border: 1px solid #dddddd">
                <div class="box-module">
                    <div class="bg-modul"><i class="glyphicon glyphicon-tag"></i> Bất động sản nổi bật</div>
                </div>

                <?php foreach ($ads_center as $key => $value) { ?>

                    <div class="col-md-2 col-sm-6 col-xs-12 item_ads _hot" onclick="updateView('<?php echo $value->id; ?>');">
                        <div class="card">
                            <div class="card-body border-primary">


                        <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                            <img style="width: 100%;height: 150px"
                                 src="<?php echo public_url('images/ads/' . $value->img) ?>"
                                 alt="<?php echo $value->title ?>"></a>
                        <div class="icon_viphot">
                            <?php if ($value->icon_new == 1) { ?>
                                <img src="<?php echo public_url('images/icon_new.gif') ?>"
                                     alt="<?php echo $value->title ?>">
                            <?php } ?>

                            <?php if ($value->icon_vip == 1) { ?>
                                <img src="<?php echo public_url('images/icon_vip.gif') ?>"
                                     alt="<?php echo $value->title ?>">
                            <?php } ?>

                            <?php if ($value->icon_hot == 1) { ?>
                                <img src="<?php echo public_url('images/icon_hot.gif') ?>"
                                     alt="<?php echo $value->title ?>">
                            <?php } ?>
                        </div>

                        <div class="code_row">PT-<?php echo $value->id.substr($value->code,0,3) ?></div>

                        <h3 style="height: 44px;font-size: 13px; ">
                            <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>"><?php echo $value->title ?></a>
                        </h3>

                        <p><?php echo $value->intro ?></p>
                        <div class="row area gia-title">
                            <div class="col-xs-12 larea">Diện Tích: <strong><?php echo $value->acreage ?> m<sup>2</sup></strong></div>
                        </div>
                        <div class="price">
                            <div class="col-xs-6 lprice">
                                <i class="fa fa-map-marker"></i>
                            <?php echo $value->province_name != '' ? $value->province_name : 'update...'; ?>
                            </div>
                            <div class="col-xs-6 rprice">
                                <?php echo $value->price ?>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>

                <?php } ?>

            </div>

        </div>
    </div>
</section>