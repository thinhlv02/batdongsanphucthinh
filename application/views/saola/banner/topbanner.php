<?php if (isset($banner_top) && !empty($banner_top)) { ?>
    <div id="TopBanner">
        <a href="<?php echo base_url('rao-vat/' . create_slug($banner_top[0]->title) . '-' . $banner_top[0]->id_ads) ?>" target="_blank" title="" rel="nofollow"><img src="<?php echo public_url('images/banner/') . $banner_top[0]->img ?>" style="max-width: 100%; height:auto;"></a>
    </div>
<?php } ?>
