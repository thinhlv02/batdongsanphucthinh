<?php function getTextType($type){
    switch ($type){
        case 1: return "Khách hàng";
        case 2: return "Nhân viên thị trường";
        case 3: return "Cộng tác viên kinh doanh";
    }
}?>

<section class="detail">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('ho-tro')?>">Hỗ trợ</a></li>
            <li class="active"><?php echo getTextType($type)?></li>
        </ol>
        <div class="col-sm-4 col-md-3">
            <div class="left-menu">
                <div class="left-title"><?php echo getTextType($type)?></div>
                <ul>
                    <?php foreach ($categories as $p){ ?>
                        <li style="margin: 15px 0">
                            <a href="<?php echo base_url('ho-tro/'.create_slug($p->name).'-'.$p->id)?>">
                                <?php echo $p->name?>
                            </a>
                        </li>
                    <?php }?>
                </ul>
            </div>
        </div>
        <div class="pl-5 col-md-9 col-sm-8 detail-content line-height-2">
            <ul>
                <?php foreach ($questions as $p){ ?>
                    <li style="margin: 15px 0">
                        <a href="<?php echo base_url('ho-tro/'.create_slug($p->name).'-'.$p->id)?>">
                            <?php echo $p->name?>
                        </a>
                    </li>
                <?php }?>
            </ul>
        </div>
    </div>
</section>