<!--<script language="javascript" src="--><?php //echo base_url('public')?><!--/ckeditor/ckeditor.js" type="text/javascript"></script>-->
<script type="text/javascript" src="<?php echo base_url(); ?>public/scripts/ckeditor/ckeditor.js"></script>

<div class="x_panel">
    <div class="x_title">
        <h2>Thêm rao bán mới</h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                            class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a>
                    </li>
                    <li><a href="#">Settings 2</a>
                    </li>
                </ul>
            </li>
            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="x_content">


        <div class="row" style="">
            <form id="formAddCatalog" data-parsley-validate class="form-horizontal form-label-left" method="post"
                  enctype="multipart/form-data">
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Tiêu đề <span
                                class="required">*</span></label>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <input type="text" id="txtName" name="txtName" required="required"
                               class="form-control col-md-7 col-xs-12" placeholder="Tiêu đề">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Giới thiệu ngắn <span
                                class="required">*</span></label>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <textarea name="txtIntro" rows="3" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Ảnh minh họa <span
                                class="required">*</span></label>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <!--                        <input type="file" class="form-control" name="img_news" id="img_news">-->
                        <input type="file" class="form-control" name="img_news">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Ảnh Slide <span
                                class="required">*</span></label>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <input type="file" class="form-control" name="files[]" multiple>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Nội dung <span
                                class="required">*</span></label>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <textarea name="txtContent" class="form-control" style="height: 120px"></textarea>
                        <script type="text/javascript">CKEDITOR.replace('txtContent', {height: '300px'}); </script>
                    </div>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Giá tiền <span
                                class="required">*</span></label>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <input type="text" id="" name="price" required="required"
                               class="form-control col-md-7 col-xs-12" placeholder="ví dụ : 1,2 tỷ / nền">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Diện tích<span
                                class="required">*</span></label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <input type="text" id="" name="acreage" required="required"
                               class="form-control col-md-7 col-xs-12" placeholder="ví dụ: 90">
                    </div>

                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Đơn vị<span
                                class="required">*</span></label>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" id="" name="" required="required" value="m2"
                               class="form-control col-md-7 col-xs-12" placeholder="" readonly>
                    </div>

                </div>

                <!--                <div class="form-group">-->
                <!--                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Tiêu đề tin trên web <span class="required">*</span></label>-->
                <!--                    <div class="col-md-10 col-sm-10 col-xs-12">-->
                <!--                        <input type="text" id="txtDocumentTitle" name="txtDocumentTitle" required="required" class="form-control col-md-7 col-xs-12" placeholder="Tiêu đề tin trên web">-->
                <!--                    </div>-->
                <!--                </div>-->

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Khu vực<span
                                class="required">*</span></label>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <input type="text" id="" name="area" required="required" class="form-control col-md-7 col-xs-12"
                               placeholder="Địa chỉ tin rao vặt">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">SĐT liên hệ<span
                                class="required">*</span></label>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <input type="text" id="" name="phone" required="required"
                               class="form-control col-md-7 col-xs-12" placeholder="sđt liên hệ">
                    </div>
                </div>

                <div class="form-group" style="">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Tỉnh / TP<span
                                class="required">*</span></label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <select class="select2_group form-control" name="province" onchange="get_district(this)">
                            <option value="0">-- Chọn Tỉnh/TP --</option>

                            <?php foreach ($lstProvince as $key => $value) { ?>
                                <option value="<?= $value->id ?>" <?php if (isset($_POST['type']) && $_POST['type'] == $key) echo 'selected' ?>>
                                    <?php echo $value->_name ?>
                                </option>
                            <?php } ?>

                        </select>


                    </div>


                    <label class="control-label col-md-1 col-sm-1 col-xs-12 " for="first-name">Quận / Huyện<span
                                class="required">*</span></label>


                    <div class="col-md-2 col-sm-2 col-xs-12" id="divDistrict">

                    </div>

                    <label class="control-label col-md-1 col-sm-1 col-xs-12 " for="first-name">Xã / Phường<span
                                class="required">*</span></label>

                    <div class="col-md-2 col-sm-2 col-xs-12" id="divWard">

                    </div>

                    <label class="control-label col-md-1 col-sm-1 col-xs-12 " for="first-name">Đường phố<span
                                class="required">*</span></label>

                    <div class="col-md-2 col-sm-2 col-xs-12" id="divStreet">

                    </div>

                </div>

                <!--                <div class="form-group">-->
                <!--                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Meta Description <span class="required">*</span></label>-->
                <!--                    <div class="col-md-10 col-sm-10 col-xs-12">-->
                <!--                        <input type="text" id="txtMetaDescription" name="txtMetaDescription" required="required" class="form-control col-md-7 col-xs-12" placeholder="Meta Description">-->
                <!--                    </div>-->
                <!--                </div>-->

                <!--                <div class="form-group">-->
                <!--                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Meta Keywords <span class="required">*</span></label>-->
                <!--                    <div class="col-md-10 col-sm-10 col-xs-12">-->
                <!--                        <input type="text" id="txtMetaKeywords" name="txtMetaKeywords" required="required" class="form-control col-md-7 col-xs-12" placeholder="Meta Keywords">-->
                <!--                    </div>-->
                <!--                </div>-->

                <!--                <div class="form-group">-->
                <!--                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Canonical URL <span class="required">*</span></label>-->
                <!--                    <div class="col-md-10 col-sm-10 col-xs-12">-->
                <!--                        <input type="text" id="txtCanonicalUrl" name="txtCanonicalUrl" required="required" class="form-control col-md-7 col-xs-12" placeholder="Canonical URL">-->
                <!--                    </div>-->
                <!--                </div>-->

                <!--                <div class="form-group">-->
                <!--                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Robots meta setting <span class="required">*</span></label>-->
                <!--                    <div class="col-md-10 col-sm-10 col-xs-12">-->
                <!--                        <label class="radio-inline"><input type="checkbox" name="robots_meta[]" value="noindex" > Apply noindex to this page</label><br>-->
                <!--                        <label class="radio-inline"><input type="checkbox" name="robots_meta[]" value="nofollow" > Apply nofollow to this page</label><br>-->
                <!--                        <label class="radio-inline"><input type="checkbox" name="robots_meta[]" value="noarchive" > Apply noarchive to this page</label>-->
                <!--                    </div>-->
                <!--                </div>-->

                <div class="form-group" style="margin-top: 30px">
                    <div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-2" style="width: 70px">
                        <input type="submit" id="btnAddProduct" name="btnAdd" required="required"
                               class="btn btn-primary" value="Thêm">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function get_district(sel) {
        var id = sel.value;
        console.log(id);
        if (id == 0) {
            // $("#divDistrict").hide();
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
                // $("#question").html('');
                if (data == 'NOT_LOGIN') {
                    window.location.reload(true);
                } else if (data === 'false') {
                    alert('Danh mục "' + cat_name + '" không tồn tại!');
                } else {
                    console.log(data);
                    $("#divDistrict").html(data);
                }
            };//

            getAjax('<?php echo admin_url('ads/ajax_get_list_district'); ?>', params, '', 'GET', '', false, _onSuccess);


            //getAjax('<?php //echo admin_url('Gift_item_info/ajax_get_list_gift_item_by_type') ?>//', params, 'POST', _onSuccess);
        }
    }

    function get_ward(sel) {
        var id = sel.value;
        console.log(id);
        if (id == 0) {
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
                // $("#question").html('');
                if (data == 'NOT_LOGIN') {

                } else if (data === 'false') {

                } else {
                    // console.log(data);
                    $("#divWard").html(data);
                }
            };

            getAjax('<?php echo admin_url('ads/ajax_get_list_ward'); ?>', params, '', 'GET', '', false, _onSuccess);
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
                // $("#question").html('');
                if (data == 'NOT_LOGIN') {

                } else if (data === 'false') {

                } else {
                    // console.log(data);
                    $("#divStreet").html(data);
                }
            };

            getAjax('<?php echo admin_url('ads/ajax_get_list_street'); ?>', params, '', 'GET', '', false, _onSuccess);
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