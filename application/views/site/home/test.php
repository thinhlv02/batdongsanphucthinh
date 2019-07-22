<section class="news pt-0">
    <div class="container">
        <div class="row">

            <div class="col-sm-2 col-md-2">

                <div id="center-body">

                    <div id="raovat-nb">
                        <div class="box-module mt-2">
                            <div class="bg-modul"><i class="glyphicon glyphicon-th"></i> Layer left
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body pt-0">

                                    <div class="clearfix" id="box-home-svip">

                                        <?php foreach ($ads_center as $key => $value) { ?>

                                            <div class="item-re-list clearfix pt-5" onclick="updateView('<?php echo $value->id; ?>');">
                                                <!--                                <div class="box-img-thumb col-sm-3 col-md-3">-->
                                                <div class="box-img-thumb">
                                                    <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                                        <img src="<?php echo public_url('images/ads/' . $value->img) ?>"
                                                             alt="<?php echo $value->title ?>">
                                                    </a>
                                                </div>
                                                <!--                                <div class="box-info-list col-sm-9 col-md-9">-->
                                                <div class="box-info-list" style="display: none">
                                                    <div class="clearfix box-title-item">
                                                        <label class="label label-danger">NỔI BẬT</label>
                                                        <h3 class="sieu-vip-title">
                                                            <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                                                <?php echo $value->title ?> </a>
                                                        </h3>
                                                    </div>
                                                    <!--                                                    <p>--><?php //echo $value->intro ?>
                                                    <!--                                                        <img style="width: 34px;height: 21px;float: left;display: inline;" src="--><?php //echo public_url('images/hot-icon.gif') ?><!--"-->
                                                    <!--                                                    </p>-->
                                                    <div class="price-list">
                                                        <span>Diện tích</span>:
                                                        <strong><?php echo $value->acreage . ' m2' ?></strong>
                                                    </div>
                                                    <div class="price-list">
                                                        <span>Giá</span>: <strong><?php echo $value->price ?></strong>
                                                    </div>
                                                    <div class="price-list">
                                                        <span>Khu vực</span>:
                                                        <strong> <?php echo $value->area ?> </strong>
                                                        <span class="pull-right time">
                                             <i class="glyphicon glyphicon-time"></i>
                                            <?php echo date('Y-m-d', strtotime($value->created_at)) ?>
                                        </span>

                                                    </div>

                                                </div>

                                            </div>

                                        <?php } ?>

                                        <div class="pull-right mt-10 viewall">
                                            <a href="javascript:void(0)"><i class="glyphicon glyphicon-th"></i>
                                                Xem tất cả</a>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <div class="col-sm-3 col-md-3">

                <div id="center-body">

                    <div id="raovat-nb">
                        <div class="box-module mt-2">
                            <div class="bg-modul"><i class="glyphicon glyphicon-th"></i> Tin rao nổi bật
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body pt-0">

                                    <div class="clearfix" id="box-home-svip">

                                        <?php foreach ($ads_center as $key => $value) { ?>

                                            <div class="item-re-list clearfix pt-5" onclick="updateView('<?php echo $value->id; ?>');">
                                                <!--                                <div class="box-img-thumb col-sm-3 col-md-3">-->

                                                <div class="clearfix box-title-item">
                                                    <label class="label label-danger">NỔI BẬT</label>
                                                    <h3 class="sieu-vip-title">
                                                        <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                                            <?php echo $value->title ?> </a>
                                                    </h3>
                                                </div>

                                                <div class="box-img-thumb">
                                                    <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                                        <img src="<?php echo public_url('images/ads/' . $value->img) ?>"
                                                             alt="<?php echo $value->title ?>">
                                                    </a>
                                                </div>
                                                <!--                                <div class="box-info-list col-sm-9 col-md-9">-->
                                                <div class="box-info-list">

                                                    <!--                                                    <p>--><?php //echo $value->intro ?>
                                                    <!--                                                        <img style="width: 34px;height: 21px;float: left;display: inline;" src="--><?php //echo public_url('images/hot-icon.gif') ?><!--"-->
                                                    <!--                                                    </p>-->
                                                    <div class="price-list">
                                                        <span>Diện tích</span>:
                                                        <strong><?php echo $value->acreage . ' m2' ?></strong>
                                                    </div>
                                                    <div class="price-list">
                                                        <span>Giá</span>: <strong><?php echo $value->price ?></strong>
                                                    </div>
                                                    <div class="price-list">
                                                        <span>Khu vực</span>:
                                                        <strong> <?php echo $value->area ?> </strong>
                                                        <span class="pull-right time">
                                             <i class="glyphicon glyphicon-time"></i>
                                            <?php echo date('Y-m-d', strtotime($value->created_at)) ?>
                                        </span>

                                                    </div>

                                                </div>

                                            </div>

                                        <?php } ?>

                                        <div class="pull-right mt-10 viewall">
                                            <a href="javascript:void(0)"><i class="glyphicon glyphicon-th"></i>
                                                Xem tất cả</a>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="box-module mt-2">
                        <div class="bg-modul"><h1>
                                <i class="glyphicon glyphicon-th"></i> Tin rao mới cập nhật</h1></div>
                    </div>
                    <div class="col-sm-12 ">
                        <div class="card">
                            <div class="card-body">

                                <?php foreach ($ads_new as $key => $value) { ?>
                                    <div class="item-re-list clearfix">
                                        <!--                            <div class="box-img-thumb col-sm-3 col-md-3">-->
                                        <div class="box-img-thumb">
                                            <a
                                                    href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                                <img src="<?php echo public_url('images/ads/' . $value->img) ?>"
                                                     alt="<?php echo $value->title ?>">
                                            </a></div>
                                        <!--                            <div class="box-info-list col-sm-9 col-md-9">-->
                                        <div class="box-info-list">
                                            <h3><a class="color-60"
                                                   href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                                    <?php echo $value->title ?>
                                                </a>
                                            </h3>
                                            <!--                                                <p>--><?php //echo $value->intro ?>
                                            <!--                                                    ...</p>-->
                                            <div class="price-list"><span>Diện tích</span>:
                                                <strong><?php echo $value->acreage ?> m2</strong></div>
                                            <div class="price-list"><span>Giá</span>:
                                                <strong><?php echo $value->price ?></strong></div>
                                            <div class="price-list"><span>Khu vực</span>:
                                                <strong> <?php echo $value->area ?> </strong>
                                                <span class="pull-right time"> <i
                                                            class="glyphicon glyphicon-time"></i> <?php echo date('Y-m-d', strtotime($value->created_at)) ?> </span>
                                            </div>
                                        </div>
                                    </div>

                                <?php } ?>

                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <div class="col-sm-2 col-md-2">
                <div class="box-module mt-2">
                    <div class="bg-modul"><i class="glyphicon glyphicon-link"></i> Liên kết được quan tâm</div>
                </div>

                <div id="right">

                    <div>
                        <!--                        <div class="container">-->
                        <!--                            <h2>Basic List Group</h2>-->
                        <ul class="list-group">
                            <?php foreach ($news as $key => $value) { ?>

                                <?php if ($key == 0) { ?>
                                    <li class="first list-group-item">
                                        <a href="<?php echo base_url('tin-tuc/' . create_slug($value->name) . '-' . $value->id) ?>" rel="nofollow">
                                            <img src="<?php echo public_url('images/news/' . $value->img) ?>" class="img-responsive center-block" alt="<?php echo $value->name ?>">
                                            Nghe thầy chọn ngày động thổ, gia đình tôi phải ở nhà dột 3 năm
                                        </a></li>
                                <?php } ?>


                                <li class="list-group-item">

                                    <a href="<?php echo base_url('tin-tuc/' . create_slug($value->name) . '-' . $value->id) ?>">
                                        <?php echo $value->name ?>
                                    </a>
                                </li>
                            <?php } ?>

                        </ul>
                        <!--                        </div>-->
                    </div>
                    <div class="box-links-right"><p><span style="font-size:12px"><span
                                        style=""><strong>KHU VỰC MIỀN BẮC</strong></span></span>
                        </p>
                        <ul>

                            <?php foreach ($news_mb as $key => $value) { ?>

                                <?php if ($key == 0) { ?>
                                    <li class="first list-group-item">
                                        <a href="<?php echo base_url('tin-tuc/' . create_slug($value->name) . '-' . $value->id) ?>" rel="nofollow">
                                            <img src="<?php echo public_url('images/news/' . $value->img) ?>" class="img-responsive center-block" alt="<?php echo $value->name ?>">
                                            Nghe thầy chọn ngày động thổ, gia đình tôi phải ở nhà dột 3 năm
                                        </a></li>
                                <?php } ?>

                                <li class="list-group-item">

                                    <a href="<?php echo base_url('tin-tuc/' . create_slug($value->name) . '-' . $value->id) ?>">
                                        <?php echo $value->name ?>
                                    </a>
                                </li>
                            <?php } ?>

                        </ul>
                        <p>
                            <span style="font-size:12px"><span style="font-family:tahoma,geneva,sans-serif"><strong>KHU VỰC&nbsp;MIỀN NAM</strong></span></span>
                        </p>
                        <ul class="list-group">
                            <?php foreach ($news_mb as $key => $value) { ?>

                                <?php if ($key == 0) { ?>
                                    <li class="first list-group-item">
                                        <a href="<?php echo base_url('tin-tuc/' . create_slug($value->name) . '-' . $value->id) ?>" rel="nofollow">
                                            <img src="<?php echo public_url('images/news/' . $value->img) ?>" class="img-responsive center-block" alt="<?php echo $value->name ?>">
                                            Nghe thầy chọn ngày động thổ, gia đình tôi phải ở nhà dột 3 năm
                                        </a></li>
                                <?php } ?>

                                <li class="list-group-item">

                                    <a href="<?php echo base_url('tin-tuc/' . create_slug($value->name) . '-' . $value->id) ?>">
                                        <?php echo $value->name ?>
                                    </a>
                                </li>
                            <?php } ?>

                        </ul>
                    </div>
                    <div class="box-module">
                        <div class="bg-modul" style="margin-top:10px">
                            <i class="glyphicon glyphicon-link"></i> Phong
                            thủy
                        </div>
                    </div>
                    <ul class="list-group">
                        <?php foreach ($news as $key => $value) { ?>
                            <li class="list-group-item">

                                <a href="<?php echo base_url('tin-tuc/' . create_slug($value->name) . '-' . $value->id) ?>">
                                    <?php echo $value->name ?>
                                </a>
                            </li>
                        <?php } ?>

                    </ul>


                </div>


            </div>

            <div class="col-sm-5 col-md-5">

                <div id="center-body">

                    <div id="raovat-nb">
                        <div class="box-module mt-2">
                            <div class="bg-modul"><i class="glyphicon glyphicon-th"></i> Tin rao nổi bật
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body pt-0">

                                    <div class="clearfix" id="box-home-svip">

                                        <?php foreach ($ads_center as $key => $value) { ?>

                                            <div class="item-re-list clearfix pt-5" onclick="updateView('<?php echo $value->id; ?>');">
                                                <!--                                <div class="box-img-thumb col-sm-3 col-md-3">-->
                                                <div class="box-img-thumb">
                                                    <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                                        <img src="<?php echo public_url('images/ads/' . $value->img) ?>"
                                                             alt="<?php echo $value->title ?>">
                                                    </a>
                                                </div>
                                                <!--                                <div class="box-info-list col-sm-9 col-md-9">-->
                                                <div class="box-info-list">
                                                    <div class="clearfix box-title-item">
                                                        <label class="label label-danger">NỔI BẬT</label>
                                                        <h3 class="sieu-vip-title">
                                                            <a href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                                                <?php echo $value->title ?> </a>
                                                        </h3>
                                                    </div>
                                                    <!--                                                    <p>--><?php //echo $value->intro ?>
                                                    <!--                                                        <img style="width: 34px;height: 21px;float: left;display: inline;" src="--><?php //echo public_url('images/hot-icon.gif') ?><!--"-->
                                                    <!--                                                    </p>-->
                                                    <div class="price-list">
                                                        <span>Diện tích</span>:
                                                        <strong><?php echo $value->acreage . ' m2' ?></strong>
                                                    </div>
                                                    <div class="price-list">
                                                        <span>Giá</span>: <strong><?php echo $value->price ?></strong>
                                                    </div>
                                                    <div class="price-list">
                                                        <span>Khu vực</span>:
                                                        <strong> <?php echo $value->area ?> </strong>
                                                        <span class="pull-right time">
                                             <i class="glyphicon glyphicon-time"></i>
                                            <?php echo date('Y-m-d', strtotime($value->created_at)) ?>
                                        </span>

                                                    </div>

                                                </div>

                                            </div>

                                        <?php } ?>

                                        <div class="pull-right mt-10 viewall">
                                            <a href="javascript:void(0)"><i class="glyphicon glyphicon-th"></i>
                                                Xem tất cả</a>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>




                </div>

            </div>

        </div>

        <div class="row">
            <div class="box-module mt-2">
                <div class="bg-modul"><h1>
                        <i class="glyphicon glyphicon-th"></i> Tin rao mới cập nhật</h1></div>
            </div>
            <div class="col-sm-12 ">
                <div class="card">
                    <div class="card-body">

                        <?php foreach ($ads_new as $key => $value) { ?>
                            <div class="item-re-list clearfix">
                                <!--                            <div class="box-img-thumb col-sm-3 col-md-3">-->
                                <div class="box-img-thumb">
                                    <a
                                            href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                        <img src="<?php echo public_url('images/ads/' . $value->img) ?>"
                                             alt="<?php echo $value->title ?>">
                                    </a></div>
                                <!--                            <div class="box-info-list col-sm-9 col-md-9">-->
                                <div class="box-info-list">
                                    <h3><a class="color-60"
                                           href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                            <?php echo $value->title ?>
                                        </a>
                                    </h3>
                                    <!--                                                <p>--><?php //echo $value->intro ?>
                                    <!--                                                    ...</p>-->
                                    <div class="price-list"><span>Diện tích</span>:
                                        <strong><?php echo $value->acreage ?> m2</strong></div>
                                    <div class="price-list"><span>Giá</span>:
                                        <strong><?php echo $value->price ?></strong></div>
                                    <div class="price-list"><span>Khu vực</span>:
                                        <strong> <?php echo $value->area ?> </strong>
                                        <span class="pull-right time"> <i
                                                    class="glyphicon glyphicon-time"></i> <?php echo date('Y-m-d', strtotime($value->created_at)) ?> </span>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<style>
    .item-re-list {
        border-bottom: 1px #b0aeae solid;
        margin-top: 2px;
        width: 100%;
        /*padding: 10px;*/
    }

    .box-img-thumb {
        /*width: 150px;*/
        /*width: 16%;*/
        /*float: left;*/
        /*margin-right: 15px;*/
    }

    .box-info-list {
        float: left;
        /*width: 538px;*/
        width: 82%;
    }

    .box-title-item label {
        float: left;
        /* margin-top: 5px; */
        margin-right: 15px;
        /* width: 55px; */
        text-transform: uppercase;
    }

    .item-re-list h3 {
        margin: 0 0 10px;
        padding: 0;
        font-size: 13px;
        font-weight: 700;
    }


    .item-re-list img {
        float: left;
        width: 150px;
        height: 90px;
        margin-right: 10px;
        border: 1px #eee solid;
    }

    img {
        vertical-align: middle;
    }

    h3.sieu-vip-title a {
        color: #055699;
        text-transform: uppercase;
    }

    .bg-modul h2, .bg-modul h1 {
        font-size: 1.2rem;
        font-weight: 700;
        margin: 0;
        padding: 0;
        line-height: 18px;
    }

    .price-list span.time {
        font-weight: 400;
        width: inherit;
    }

    .price-list span {
        display: inline-block;
    }

    .time {
        font-size: 11px;
        white-space: nowrap;
    }
</style>