<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo isset($title) && $title ? $title : 'Đơn giản hóa việc bán hàng, vì chúng tôi luôn bên cạnh bạn. Mang đến nguồn thông tin mua bán và cho thuê nhà đất, văn phòng, chung cư... Cập nhật tin tức bất động sản nhanh nhất và chính xác nhất'?></title>
    <link rel="shortcut icon" type="image/png" href="<?php echo public_url('images/favicon.png')?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo isset($description) && $description ? $description : 'Bất động sản phúc thịnh - Kênh thông tin số 1 về bất động sản tại Việt Nam. Mang đến nguồn thông tin mua bán và cho thuê nhà đất, văn phòng, chung cư... Cập nhật tin tức bất động sản nhanh nhất và chính xác nhất'?>">
    <meta name="apple-itunes-app" content="app-id=1455427957">
    <?php echo isset($robots) && $robots ? '<meta name="robots" content="'.$robots.'">' : ''?>
    <?php echo isset($keywords) && $keywords ? '<meta name="keywords" content="'.$keywords.'"/>' : ''?>
    <?php echo isset($canonical) && $canonical ? '<link rel="canonical" href="'.$canonical.'"/>' : ''?>

    <meta property="og:title" content="<?php echo isset($title) && $title ? $title : 'Bất động sản phúc thịnh - Kênh thông tin số 1 về bất động sản tại Việt Nam. Mang đến nguồn thông tin mua bán và cho thuê nhà đất, văn phòng, chung cư... Cập nhật tin tức bất động sản nhanh nhất và chính xác nhất'?>" />
    <meta property="og:description" content="<?php echo isset($description) && $description ? $description : 'Bất động sản phúc thịnh - Kênh thông tin số 1 về bất động sản tại Việt Nam. Mang đến nguồn thông tin mua bán và cho thuê nhà đất, văn phòng, chung cư... Cập nhật tin tức bất động sản nhanh nhất và chính xác nhất'?>" />
    <meta property="og:url" content="<?php echo isset($page_url) ? $page_url : base_url();?>" />
    <meta property="og:site_name" content="Bất động sản phúc thịnh - Kênh thông tin số 1 về bất động sản tại Việt Nam. Mang đến nguồn thông tin mua bán và cho thuê nhà đất, văn phòng, chung cư... Cập nhật tin tức bất động sản nhanh nhất và chính xác nhất" />
    <meta property="og:image" content="<?php echo isset($image) ? $image : public_url('images/og_image.png')?>" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="200" />
    <meta property="og:type" content="website" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('public/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/sweetalert.css'); ?>">

    <!--thinhlv add css-->

    <link rel="stylesheet" href="<?php echo base_url('public/css/common.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/custom.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/lightslider.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/jquery.bxslider.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/hp.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/colors.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap-extended.css'); ?>">

    <!--thinhlv add css-->
    <link href="<?php echo base_url('public/css/responsive.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <!--<script src="--><?php //echo public_url('js/jquery.min.js')?><!--"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="<?php echo public_url('js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('public/js/page.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/common.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/lightslider.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/bxslider/jquery.bxslider.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/bxslider/jquery.flexisel.js'); ?>"></script>
    <script src="<?php echo base_url('public/js/sweetalert.min.js'); ?>"></script>
</head>
<body>
<?php $this->load->view($this->_template_f . 'menu') ?>
<?php $this->load->view($this->_template_f . 'banner') ?>
<?php $this->load->view($temp) ?>
<?php $this->load->view($this->_template_f . 'footer_view') ?>
</body>

<!--<div id='ads-left'>-->
<!--    <div style='margin:0 0 5px 0; padding:0;width:160px;position:fixed; left:0; top:0;'>-->
<!--        <a href='--><?php //echo public_url('images/ads/banner1.jpg') ?><!--' target='_blank'>-->
<!--            <img border='0' height='665' src='--><?php //echo public_url('images/ads/banner1.jpg') ?><!--' width='200'/>-->
<!--        </a>-->
<!--    </div>-->
<!--</div>-->
<!--<div id='ads-right'>-->
<!--    <div style='margin:0 0 5px 0; padding:0;width:200px;position:fixed; right:0; top:0;'>-->
<!--        <a href='Link quảng cáo bên phải' target='_blank'><img border='0' height='665' src='Ảnh quảng cáo bên phải'-->
<!--                                                               width='200'/></a>-->
<!--    </div>-->
<!--</div>-->

<!--<script type="text/javascript">-->
<!--    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();-->
<!--    (function(){-->
<!--        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];-->
<!--        s1.async=true;-->
<!--        s1.src='https://embed.tawk.to/5caafdd953f1e453fb8ca695/default';-->
<!--        s1.charset='UTF-8';-->
<!--        s1.setAttribute('crossorigin','*');-->
<!--        s0.parentNode.insertBefore(s1,s0);-->
<!--    })();-->
<!--</script>-->


<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5d0f3b4453d10a56bd7b6c63/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

</html>