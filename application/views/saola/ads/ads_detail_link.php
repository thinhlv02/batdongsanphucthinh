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

                    <div class="tab">
                        <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Danh sách bài đăng
                            web
                        </button>
                        <button class="tablinks" onclick="openCity(event, 'Paris')">Danh sách bài đăng trên facebook
                        </button>
                    </div>

                    <div id="London" class="tabcontent">

                        <div class="land_box">

                            <div class="clearfix"></div>

                            <div style="clear: both;"></div>

                            <div class="title_land_box">Ngày đẩy tin:</div>
                            <div class="pack_land_box" style="border: 0;">
                                <div class="row">
                                    <div class="col-xs-12 pland" style="border: 0;">
                                        <div class="ads_link">
                                            <?php
                                            $tags_link = explode('a href="', trim($ads->link_web));
                                            ?>

                                            <table class="table table-hover">
                                                <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Link</th>
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
                                                                   target="_blank"><?php echo $value; ?></a></td>
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

                        </div>

                    </div>

                    <div id="Paris" class="tabcontent">
                        <p>Facebook đang update</p>
                    </div>


                </div>
                <!--End detail_land-->
            </div>

        </div>
    </div>
</section>

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>

<style>
    /*old slider*/
    ul {
        list-style: none outside none;
        padding-left: 0;
        margin-bottom: 0;
    }

    li {
        /*display: block;*/
        display: list-item;
        /*float: left;*/
        margin-right: 6px;
        cursor: pointer;
    }

    img {
        display: block;
        /*height: 703px;*/
        height: auto;
        /*max-height: 920px;*/
        max-width: 100%;
    }

    /*old slider*/

    .brief_land_box .ibrief {
        line-height: 24px;
    }

    .land_page .title_land_box {
        background: #f8f8f8;
        color: #e40b00;
        font-size: 17px;
        font-weight: 600;
        padding: 10px;
        margin: 15px 0 5px 0;
    }

    .land_page .pack_land_box .pland {
        border-bottom: 1px solid #e0e0e0;
        border-left: 1px solid #e0e0e0;
        color: #333;
    }

    .land_page .pack_land_box .pland .title_detail_pland {
        font-weight: 600;
        font-size: 18px;
        padding: 10px 10px 0 10px;
    }

    .land_page .pack_land_box .pland .body_detail_pland {
        padding: 5px 10px 10px 10px;
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

    .land_page .poster_land_box .pic_poster_land_box {
        padding-right: 30px;
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

    .land_page .title1_land_box {
        border-bottom: 1px solid #ddd;
        margin: 10px 0 20px 0;
    }

    p.title_box1 strong {
        display: inline-block;
        font-size: 16px;
        line-height: 50px;
        font-weight: 600;
        padding-left: 10px;
        border-left: 5px solid #4dbb6d;
    }

    .body_top2_box {
        padding: 15px;
        border: 1px solid #ddd;
        border-top: 0;
    }

    .land_page .land_box h1, .land_page .land_box h2 {
        color: #e40b00;
        font-size: 20px;
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

    p.title_box1 {
        background: #efefef;
        border-bottom: 1px solid #ddd;
    }

    .land_page .price_ibrief {
        font-size: 20px;
        color: #e40b00;
    }
</style>


<style>
    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }
</style>

