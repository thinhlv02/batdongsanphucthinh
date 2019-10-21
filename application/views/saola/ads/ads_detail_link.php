<section class="contact">
    <div class="container">
        <div class="row subpage">

            <!--Begin left-->
            <div class="col-xs-12 left land_page">

                <!--Begin land_box-->
                <div class="_box">
                    <p class="title_box" style="color: #055699"><strong>Cần bán
                            <i class="fa fa-angle-right"></i> <?php echo $ads->title ?></strong>
                    </p>

                    <div class="">

                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#home">Danh sách bài đăng
                                    website</a></li>
                            <li><a data-toggle="tab" href="#menu1">Danh sách bài đăng trên facebook</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">

                                <div class="land_box">

                                    <div class="clearfix"></div>

                                    <div style="clear: both;"></div>

                                    <?php foreach ($ads_end as $k1 => $v1) { ?>
                                        <div class="pack_land_box" style="border: 0;">
                                            <div class="row">
                                                <div class="col-xs-12 pland" style="border: 0;">
                                                    <div class="ads_link">
                                                        <?php
                                                        $tags_link = explode('a href="', trim($v1->link_web));
                                                        ?>
                                                        <h5>Ngày đẩy tin: <?php echo $v1->created_at; ?></h5>
                                                        <table class="table table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th>STT</th>
                                                                <th>Link website</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                            $index_2 = -1;
                                                            foreach ($tags_link as $key => $value) {
                                                                $index_2++;
                                                                $link = $value;
                                                                if ($key != 0) {
                                                                    $value = explode('">', $value);
                                                                    $value = $value[0];
                                                                    ?>
                                                                    <tr>
                                                                        <td><?php echo $index_2; ?></td>
                                                                        <td><a href="<?php echo $value; ?>"
                                                                               target="_blank"><?php echo $value; ?></a>
                                                                        </td>
                                                                    </tr>
                                                                <?php }
                                                            }
                                                            ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } ?>

                                </div>

                            </div>
                            <div id="menu1" class="tab-pane fade">

                                <div class="land_box">

                                    <div class="clearfix"></div>

                                    <div style="clear: both;"></div>

                                    <?php foreach ($ads_end as $k1 => $v1) { ?>
                                        <div class="pack_land_box" style="border: 0;">
                                            <div class="row">
                                                <div class="col-xs-12 pland" style="border: 0;">
                                                    <div class="ads_link">
                                                        <?php
                                                        $tags_link = explode('a href="', trim($v1->link_facebook));
                                                        ?>
                                                        <h5>Ngày đẩy tin: <?php echo $v1->created_at; ?></h5>
                                                        <table class="table table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th>STT</th>
                                                                <th>Link Facebook</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                            $index_2 = -1;
                                                            foreach ($tags_link as $key => $value) {
                                                                $index_2++;
                                                                $link = $value;
                                                                if ($key != 0) {
                                                                    $value = explode('">', $value);
                                                                    $value = $value[0];
                                                                    ?>
                                                                    <tr>
                                                                        <td><?php echo $index_2; ?></td>
                                                                        <td><a href="<?php echo $value; ?>"
                                                                               target="_blank"><?php echo $value; ?></a>
                                                                        </td>
                                                                    </tr>
                                                                <?php }
                                                            }
                                                            ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <?php } ?>

                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!--End detail_land-->
            </div>

        </div>
    </div>
</section>

<script>

</script>

<style>
    .land_page .pack_land_box .pland {
        border-bottom: 1px solid #e0e0e0;
        border-left: 1px solid #e0e0e0;
        color: #333;
    }

    .land_page .pack_land_box {
        border-top: 1px solid #e0e0e0;
        border-right: 1px solid #e0e0e0;
    }

    .land_page .pack_land_box .pland > strong {
        line-height: 32px;
        font-weight: 600;
        display: inline-block;
        padding-left: 10px;
        width: 110px;
    }

    .land_page .poster_land_box .detail_poster_land_box p:first-child {
        border-top: 0;
    }

    .land_page .poster_land_box .detail_poster_land_box p {
        padding: 5px 0;
        border-top: 1px dotted #ddd;
    }

    .land_page .land_box {
        border: 1px solid #ddd;
        padding: 15px;
    }

    .land_page .title1_land_box strong {
        background: #fff;
        display: inline-block;
        position: relative;
        margin-bottom: -10px;
        font-weight: 600;
        line-height: 20px;
        font-size: 16px;
    }

    p.title_box1 strong {
        display: inline-block;
        font-size: 16px;
        line-height: 50px;
        font-weight: 600;
        padding-left: 10px;
        border-left: 5px solid #4dbb6d;
    }

    .land_page .land_box h1, .land_page .land_box h2, .land_box h5 {
        color: #e40b00;
        text-transform: uppercase;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .land_page .land_box {
        border: 1px solid #ddd;
        padding: 15px;
    }

    .land_page .poster_land_box .pic_poster_land_box p {
        border: 1px solid #ddd;
        padding: 4px;
        margin-top: 5px;
    }

    /*//css tab active*/
    li.active a {
        border-right: 6px solid #D3D6DA !important;
        font-weight: bold;
    }
</style>

