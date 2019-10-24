<?php if (isset($banner_left) && !empty($banner_left)) { ?>
    <div id='ads-left'>
<!--        <div style='margin:0 0 5px 0; padding:0;width:160px;position:fixed; left:0; top:47px;'>-->
        <div id="ads-left-sub" style='margin:0 0 5px 0; padding:0;width:160px;position:fixed; top:47px;display: none'>
            <a href='<?php echo base_url('rao-vat/' . create_slug($banner_left[0]->title) . '-' . $banner_left[0]->id_ads) ?>' target='_blank'><img border='0' height='600' src='<?php echo public_url('images/banner/'). $banner_left[0]->img ?>' width='160'/></a>
        </div>
    </div>
<?php } ?>


<?php if (isset($banner_right) && !empty($banner_right)) { ?>
<div id='ads-right'>
<!--    <div style='margin:0 0 5px 0; padding:0;width:160px;position:fixed; right:0; top:47px;'>-->
    <div id="ads-right-sub" style='margin:0 0 5px 0; padding:0;width:160px;position:fixed;top:47px;display: none'>
        <a href='<?php echo base_url('rao-vat/' . create_slug($banner_right[0]->title) . '-' . $banner_right[0]->id_ads) ?>' target='_blank'><img border='0' height='600' src='<?php echo public_url('images/banner/'). $banner_right[0]->img ?>' width='160'/></a>
    </div>
</div>
<?php } ?>
