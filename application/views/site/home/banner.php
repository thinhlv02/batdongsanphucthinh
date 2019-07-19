<section class="news mt-3">
    <div class="container">
        <!--        <div class="box-module">-->
        <!--            <div class="bg-modul"><i class="glyphicon glyphicon-star"></i> Tin Vip</div>-->
        <!--        </div>-->
        <div class="row">
            <div class="col-sm-3 col-md-3">
                <div class="card">
                    <div class="card-body pt-0 " style="height: 339px">
<!--                        <div class="box-module">-->
<!--                            <div class="bg-modul"><i class="glyphicon glyphicon-search"></i> Tìm kiếm</div>-->
<!--                        </div>-->
                        <div class="page-title text-center" style="">
                            <h4 class="border-bottom">Chức năng tìm kiếm</h4>
<!--                            <button type="button" class="btn btn-success">Thanh tìm kiếm <span class="badge"></span></button>-->
                        </div>

                        <form action="">
                            <!--                <div class="form-group">-->
                            <!--                    <label for="email">Mã tin:</label>-->
                            <!--                    <input type="email" class="form-control" id="email" placeholder="Nhập mã tin" name="code">-->
                            <!--                </div>-->
                            <div class="form-group">
                                <label for="email">Tỉnh thành</label>
                                    <select class="form-control" name="province" onchange="get_district(this)">
                                    <option value=""> -- Chọn Tỉnh thành --</option>
                                    <?php foreach ($lstProvince as $key => $value) { ?>
                                        <option value="<?= $value->id ?>" <?php if (isset($_POST['type']) && $_POST['type'] == $key) echo 'selected' ?>>
                                            <?php echo $value->_name ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email">Quận Huyện</label>
                                <div class="" id="divDistrict">
                                    <select class="form-control">
                                        <option value="0"> -- Chọn Quận Huyện --</option>
                                    </select>
                                 </div>
                            </div>

                            <div class="form-group">
                                <label for="email">Xã / Phường</label>
                                <div class="" id="divWard">
                                    <select class="form-control">
                                        <option value="0"> -- Xã / Phường --</option>
                                    </select>
                                </div>
                            </div>

    <!--                        <div class="form-group">-->
    <!--                            <label for="email">Loại</label>-->
    <!--                            <select class="form-control">-->
    <!--                                <option value=""> -- Loại --</option>-->
    <!--                            </select>-->
    <!--                        </div>-->
                            <div class="text-center">

                            <button type="submit" class="btn btn-default">Tìm</button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
            <div class="col-sm-6 col-md-6">
                <div class="card">
                    <div class="card-body">

                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <?php foreach ($ads_left as $key => $value) {
                                    ?>
                                    <li data-target="#myCarousel" data-slide-to="<?php echo $key ?>" class="<?php if ($key == 0) echo 'active'; ?>"></li>
                                <?php } ?>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <?php foreach ($ads_left as $key => $value) {
    //                        echo $key;
                                    ?>
                                    <div class="item <?php if ($key == 0) echo 'active'; ?>">
    <!--                                    <img src="--><?php //echo public_url('images/ads/' . $value->img) ?><!--" alt="$value->img" style="width:100% ">-->
                                        <img src="<?php echo public_url('images/ads/' . $value->img) ?>" alt="<?php echo $value->img ?>" style="width:100%; height: 320px">
                                        <div class="carousel-caption" style="    background-image: linear-gradient(to right, rgba(0,0,0,0.9), rgba(0,0,0,0));">
                                            <h4 class=""><a class="text-white" href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>">
                                                    <?php echo $value->title ?>
                                                </a></h4>
<!--                                            <p><a class="text-danger" href="">-->
<!--                                                --><?php //echo $value->intro ?>
<!--                                            </a></p>-->
                                        </div>
                                    </div>
                                <?php } ?>

                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>


                    </div>
                </div>
            </div>

            <div class="col-sm-3 col-md-3">
            <div class="card">
                <div class="card-body">

<!--                    <div class="box-module mt-2">-->
<!--                        <div class="bg-modul"><i class="glyphicon glyphicon-file"></i>Tin tức mới</div>-->
<!--                    </div>-->

                    <div id="myCarouse2" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <?php foreach ($ads_right as $key => $value) {
                                ?>
                                <li data-target="#myCarouse2" data-slide-to="<?php echo $key ?>" class="<?php if ($key == 0) echo 'active'; ?>"></li>
                            <?php } ?>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <?php foreach ($ads_right as $key => $value) {
//                        echo $key;
                                ?>
                                <div class="item <?php if ($key == 0) echo 'active'; ?>">
<!--                                    <img src="--><?php //echo public_url('images/ads/' . $value->img) ?><!--" alt="$value->img" style="width:100% ">-->
                                    <img src="<?php echo public_url('images/ads/' . $value->img) ?>" alt="$value->img" style="width: 100%; height: 320px ">
                                    <div class="carousel-caption">
                                        <h4><a class="text-danger" href="<?php echo base_url('rao-vat/' . create_slug($value->title) . '-' . $value->id) ?>"><?php echo $value->title ?></a></h4>
<!--                                        <p>--><?php //echo $value->intro ?><!--</p>-->
                                    </div>
                                </div>
                            <?php } ?>

                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarouse2" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarouse2" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

<!--                    <div class="box-links-right">-->
<!--                        <p>-->
<!--                            <span style="font-size:12px">-->
<!--                                <span  style="font-family:tahoma,geneva,sans-serif"><strong>KHU VỰC&nbsp;HÀ NỘI</strong></span></span>-->
<!--                        </p>-->
<!---->
<!--                        <ul>-->
<!---->
<!--                            --><?php //foreach ($news as $key=>$value){ ?>
<!---->
<!--                            <li>-->
<!--                                <a href="--><?php //echo base_url('tin-tuc/'.create_slug($value->name).'-'.$value->id)?><!--">-->
<!--                                    --><?php //echo $value->name?>
<!--                                </a>-->
<!--                            </li>-->
<!---->
<!--                            --><?php //} ?>
<!---->
<!--                        </ul>-->
<!---->
<!--                    </div>-->
                </div>
            </div>
        </div>

         </div>
    </div>

</section>

<script>
    function get_district(sel) {
        var id = sel.value;
        console.log(id);
        if (id == 0) {
            $('#selectDistrict').empty();
            $('#selectWard').empty();
            $('#selectStreet').empty();
        } else {
            // ajax
            var params = {
                'id': id
            };

            // console.log(params);
            var _onSuccess = function (data) {
                // console.log(data);
                if (data == 'NOT_LOGIN') {
                    window.location.reload(true);
                } else if (data === 'false') {

                } else {
                    // console.log(data);
                    $("#divDistrict").html(data);
                }
            };//

            getAjax('<?php echo base_url('home/ajax_get_list_district'); ?>', params, '', 'GET', '', false, _onSuccess);
        }
    }

    function get_ward(sel) {
        var id = sel.value;
        console.log(id);
        if (id == 0) {
            $('#selectWard').empty();
            $('#selectStreet').empty();
        } else {
            var params = {
                'id': id
            };

            var _onSuccess = function (data) {
                // console.log(data);
                if (data == 'NOT_LOGIN') {

                } else if (data === 'false') {

                } else {
                    $("#divWard").html(data);
                }
            };

            getAjax('<?php echo base_url('home/ajax_get_list_ward'); ?>', params, '', 'GET', '', false, _onSuccess);
        }
    }

    function get_street(sel) {
        var id = sel.value;
        console.log(id);
        if (id == 0) {
            $('#selectStreet').empty();
        } else {
            // ajax
            var params = {
                'id': id
            };

            // console.log(params);
            var _onSuccess = function (data) {
                // console.log(data);
                if (data == 'NOT_LOGIN') {

                } else if (data === 'false') {

                } else {
                    // console.log(data);
                    $("#divStreet").html(data);
                }
            };

            getAjax('<?php echo base_url('home/ajax_get_list_street'); ?>', params, '', 'GET', '', false, _onSuccess);
        }
    }


    function getAjax(url, params, eID, method, dataType, showLoading, onSuccess, onError, onComplete) {
        showLoading = (typeof (showLoading) === 'undefined' || showLoading === '') ? true : showLoading;
        method = (typeof (method) == 'undefined' || method == '' || (method.toUpperCase() != 'POST' && method.toUpperCase() != 'GET')) ? 'GET' : method.toUpperCase();
        dataType = (typeof (dataType) == 'undefined' || dataType == '') ? 'html' : dataType;

        if (typeof (onSuccess) == 'undefined' || onSuccess == '') {
            var _onSucess = function (data) {
                if (dataType.toLocaleLowerCase() == 'json') {
                    $(eID).html(data.form);
                } else {
                    $(eID).html(data);
                }
            };
        } else {
            var _onSucess = onSuccess;
        }

        if (typeof (onError) == 'undefined' || onError == '') {
            var _onError = function (jqXHR, textStatus, errorThrown) {
                try {
                    $(eID).html("Sorry. There was an error.");
                } catch (e) {
                    alert("Sorry. There was an error.");
                }
            };
        } else {
            var _onError = onError;
        }

        if (typeof (onComplete) == 'undefined' || onComplete == '') {
            var _onComplete = function (jqXHR, textStatus) {
            };
        } else {
            var _onComplete = onComplete;
        }

        if (showLoading) {
            //var h=parseInt($('#'+eID).offset().top);
            //h=(h==0)?'auto':(h+"px");
            $(eID).html('<span class="ajaxLoading">&nbsp;</span>');
        }
        $.ajax({
            type: method,
            url: url,
            dataType: dataType,
            data: params,
            success: _onSucess,
            error: _onError,
            complete: _onComplete
        });
    }
</script>