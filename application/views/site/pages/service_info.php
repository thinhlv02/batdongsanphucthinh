<section class="detail">
    <div class="container">
        <div class="col-sm-4 col-md-3">
            <div class="left-menu">
                <div class="left-title">Giới thiệu Website</div>
                <ul>
                    <?php foreach ($products as $p) { ?>
                        <li class="<?php if ($p->id == $active) echo 'active'; ?>">
                            <a href="<?php echo base_url('gioi-thieu-dich-vu/' . create_slug($p->name) . '-' . $p->id . '.html#'.$p->id) ?>">
                                <?php echo $p->name ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="col-md-9 col-sm-8 detail-content">
            <div class="line-height-2 pl-5">

                <?php if (isset($product)) { ?>
                    <h2><?php echo $product->name ?></h2>
                    <p>
                        <?php echo $product->content ?>
                    </p>
                <?php } ?>

            </div>

        </div>

    </div>

</section>

<style>
    .li_active{
        border-left: 2px solid !important;
    }
    .li_active a {
        color: #00b3ee !important;
    }
</style>