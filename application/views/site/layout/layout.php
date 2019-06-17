<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('site/layout/head') ?>
</head>
<body>
<?php $this->load->view('site/layout/banner') ?>
<?php $this->load->view('site/layout/menu') ?>
<?php $this->load->view($temp) ?>
<?php $this->load->view('site/layout/footer') ?>
</body>

<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5caafdd953f1e453fb8ca695/default';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>

<!--//thinhlv add-->
<script>
    $(".project-hot").bxSlider({auto: true, pager: true, controls: false});
    $("#raovat-nb").load("/Home/LoadAdsNbHome");
    $(".ulthumb li:gt(0)").hide();
    var j = 1;
    var len = 5;
    var first = true;
    $(".box-news-home").jCarouselLite({
        vertical: true,
        hoverPause: false,
        visible: len,
        start: 0,
        warp: "circle",
        auto: 500,
        speed: 1000,
        beforeStart: function (a) {
            if (!first) $(a).parent().delay(1000);
        },
        afterEnd: function (a) {
            if (first) {
                first = false;
            } else {
                $("ul.ulthumb #li_" + j).css("display", "none");
                j++;
                if (j > len) j = 1;
                $("ul.ulthumb #li_" + j).css("display", "block");
            }
            $(a).parent().delay(6500);
        }
    });
</script>
<!--//thinhlv add-->

</html>