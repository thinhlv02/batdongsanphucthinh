<section class="contact">
    <div class="container">
        <div class="title-section"><h2>Tin tức BĐS Phúc Thịnh</h2></div>
        <div class="col-md-8 col-sm-12 col-xs-12" style="margin-top: 20px">
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url('tin-tuc') ?>">Tin tức</a></li>
                <li class="active"><?php echo $ads->title ?></li>
            </ol>
            <div class="item-news-1" style="padding: 10px">
                <span><?php echo date('d/m/Y', strtotime($ads->created_at)) ?></span>
                <h2 class="title-news-1"><?php echo $ads->title ?></h2>
                <div class="img-news-1">
                    <img src="<?php echo public_url('images/news/' . $ads->img) ?>">
                </div>
                <div class="content-news-1" style="margin-top: 20px">
                    <?php echo $ads->content ?>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12" style="margin-top: 20px">
            <div class="left-title">Nổi bật</div>
            <?php foreach ($highlight as $key => $value) { ?>
                <a href="<?php echo base_url('tin-tuc/' . create_slug($value->title) . '-' . $value->id) ?>">
                    <div class="item-news-1">
                        <div class="img-news-1">
                            <img src="<?php echo public_url('images/news/' . $value->img) ?>">
                        </div>
                        <div style="padding: 10px">
                            <h2 class="title-news-1"><?php echo $value->title ?></h2>
                        </div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</section>