<!--<script language="javascript" src="--><?php //echo base_url('public') ?><!--/ckeditor/ckeditor.js" type="text/javascript"></script>-->
<script type="text/javascript" src="<?php echo base_url(); ?>public/scripts/ckeditor/ckeditor.js"></script>

<div class="x_panel">
    <div class="x_title">
        <h2>Chỉnh sửa rao vặt: <span class="text-danger" style="color: red !important;"><?php echo $ads->code ?></span>

       Mã màu chữ: <span class="text-primary "  style="color: #ff9900">#eb5c66; font-size: 36pt, font-family: tahoma, stroke: 3pt, lineheight: 48pt</span></h2>
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
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Tiêu đề
                        <span class="required">*</span></label>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <input type="text" id="txtName" name="txtName" value="<?php echo $ads->title ?>"
                               required="required" class="form-control col-md-7 col-xs-12" placeholder="Tên bài viết">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Giới thiệu ngắn
                        <span class="required">*</span></label>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <textarea name="txtIntro" rows="4"
                                  class="form-control"><?php echo str_replace('<br />', '&#13;', $ads->intro) ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Ảnh minh họa<span
                                class="required">*</span></label>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <input type="file" class="form-control" name="img_news" id="img_news">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Ảnh Slide <span class="required">*</span></label>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <input type="file" class="form-control" name="files[]" multiple>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Nội dung
                        <span class="required">*</span></label>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <textarea name="txtContent" class="form-control"
                                  style="height: 120px"><?php echo $ads->content ?></textarea>
                        <script type="text/javascript">CKEDITOR.replace('txtContent', {height: '500px'}); </script>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Link site
                        <span class="required">*</span></label>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <textarea name="txtLinkSite" class="form-control"
                                  style="height: 120px"><?php echo $ads->link_list ?></textarea>
                        <script type="text/javascript">CKEDITOR.replace('txtLinkSite', {height: '500px'}); </script>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Giá tiền <span
                                class="required">*</span></label>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <input type="text" id="" name="price" value="<?php echo $ads->price ?>" required="required"
                               class="form-control col-md-7 col-xs-12" placeholder="ví dụ : 1,2 tỷ / nền">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Diện tích<span
                                class="required">*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="acreage" value="<?php echo $ads->acreage ?>"
                               required="required" class="form-control col-md-12 col-xs-12" placeholder="ví dụ: 90">
                    </div>

<!--                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Đơn vị<span-->
<!--                                class="required">*</span></label>-->
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <input type="text" id="" name="" required="required" value="m2"
                               class="form-control col-md-7 col-xs-12" placeholder="" readonly>
                    </div>

                </div>

                <!--                <div class="form-group">-->
                <!--                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Tiêu đề tin trên web <span class="required">*</span></label>-->
                <!--                    <div class="col-md-10 col-sm-10 col-xs-12">-->
                <!--                        <input type="text" id="txtDocumentTitle" name="txtDocumentTitle" value="-->
                <?php //echo $ads->document_title ?><!--" required="required" class="form-control col-md-7 col-xs-12" placeholder="Tiêu đề tin trên web">-->
                <!--                    </div>-->
                <!--                </div>-->

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Khu vực<span
                                class="required">*</span></label>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <input type="text" id="" name="area" required="required" value="<?php echo $ads->area ?>"
                               class="form-control col-md-7 col-xs-12" placeholder="Địa chỉ tin rao vặt">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">SĐT liên hệ<span
                                class="required">*</span></label>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <input type="text" id="" name="phone" required="required" value="<?php echo $ads->phone ?>"
                               class="form-control col-md-7 col-xs-12" placeholder="sđt liên hệ">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Tỉnh / TP<span
                                class="required">*</span></label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <select class="select2_group form-control" name="province" onchange="get_district(this)">
                            <option value="0">-- Chọn Tỉnh/TP --</option>

                            <?php foreach ($lstProvince as $key => $value) { ?>
<!--                                <option value="--><?//= $value->id ?><!--" --><?php //if (isset($_POST['type']) && $_POST['type'] == $key) echo 'selected' ?>
                                <option value="<?= $value->id ?>" <?php if (isset($province_id) && $province_id == $value->id) echo 'selected' ?>>
                                    <?php echo $value->_name ?>
                                </option>
                            <?php } ?>

                        </select>
                    </div>

                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Quận / Huyện<span
                                class="required">*</span></label>
                    <div class="col-md-2 col-sm-2 col-xs-12" id="divDistrict">
<!--                        <select class="select2_group form-control" name="district" id="" onchange="">-->
                            <select class="select2_group form-control" name="district" id="selectDistrict" onchange="get_ward(this)">

                            <option value="0">Chọn Quận/Huyện</option>
                            <?php if (isset($district_arr) && !empty($district_arr)) {
                                foreach ($district_arr as $k => $val) { ?>
                                    <option value="<?php echo $val->id ?>" <?php if (isset($district_id) && $district_id == $val->id) echo 'selected' ?>>
                                        <?php echo $val->_name ?>
                                    </option>
                                <?php }
                            } ?>
                        </select>

                    </div>

                    <label class="control-label col-md-2 col-sm-2 col-xs-12 " for="first-name">Xã / Phường<span
                                class="required">*</span></label>

                    <div class="col-md-2 col-sm-2 col-xs-12" id="divWard">
<!--                        <select class="select2_group form-control" name="ward" id="" onchange="">-->
<!--                        <select class="select2_group form-control" name="ward" id="" onchange="">-->
                        <select class="select2_group form-control" name="ward" id="selectWard" onchange="get_street(this)">

                        <option value="0">Chọn Xã/Phường</option>
                            <?php if (isset($ward_arr) && !empty($ward_arr)) {
                                foreach ($ward_arr as $k => $val) { ?>
                                    <option value="<?php echo $val->id ?>" <?php if (isset($ward_id) && $ward_id == $val->id) echo 'selected' ?>>
                                        <?php echo $val->_name ?>
                                    </option>
                                <?php }
                            } ?>
                        </select>

                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12 " for="first-name">Đường phố<span
                                class="required">*</span></label>

                    <div class="col-md-2 col-sm-2 col-xs-12" id="divStreet">
                        <select class="select2_group form-control" name="street" id="">
                            <option value="0">-- Không có --</option>
                        </select>
                    </div>

                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Lượt xem<span class="required">*</span></label>
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <input type="number" name="view" value="<?php echo $ads->view ?>" required="required" class="form-control col-md-7 col-xs-12" placeholder="nhập lượt xem">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Linh bài viết<span class="required">*</span></label>
                    <div class="col-md-10 col-sm-10 col-xs-12">
                        <input type="text" name="link" value="<?php echo $ads->link ?>" class="form-control col-md-7 col-xs-12" placeholder="nhập link bài viết">
                    </div>
                </div>

                <!--                <div class="form-group">-->
                <!--                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Meta Description-->
                <!--                        <span class="required">*</span></label>-->
                <!--                    <div class="col-md-10 col-sm-10 col-xs-12">-->
                <!--                        <input type="text" id="txtMetaDescription" name="txtMetaDescription" value="-->
                <?php //echo $ads->meta_description ?><!--" required="required" class="form-control col-md-7 col-xs-12" placeholder="Meta Description">-->
                <!--                    </div>-->
                <!--                </div>-->

                <!--                <div class="form-group">-->
                <!--                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Meta Keywords-->
                <!--                        <span class="required">*</span></label>-->
                <!--                    <div class="col-md-10 col-sm-10 col-xs-12">-->
                <!--                        <input type="text" id="txtMetaKeywords" name="txtMetaKeywords" value="-->
                <?php //echo $ads->meta_keywords ?><!--" required="required" class="form-control col-md-7 col-xs-12" placeholder="Meta Keywords">-->
                <!--                    </div>-->
                <!--                </div>-->

                <!--                <div class="form-group">-->
                <!--                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Canonical URL-->
                <!--                        <span class="required">*</span></label>-->
                <!--                    <div class="col-md-10 col-sm-10 col-xs-12">-->
                <!--                        <input type="text" id="txtCanonicalUrl" name="txtCanonicalUrl" value="-->
                <?php //echo $ads->canonical_url ?><!--" required="required" class="form-control col-md-7 col-xs-12" placeholder="Canonical URL">-->
                <!--                    </div>-->
                <!--                </div>-->

                <!--                <div class="form-group">-->
                <!--                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Robots meta setting-->
                <!--                        <span class="required">*</span></label>-->
                <!--                    <div class="col-md-10 col-sm-10 col-xs-12">-->
                <!--                        <label class="radio-inline"><input type="checkbox" name="robots_meta[]" value="noindex" -->
                <?php //echo $ads->robots_meta && strpos($ads->robots_meta, 'noindex') > -1 ? 'checked' : '' ?><!-- > Apply noindex to this page</label><br>-->
                <!--                        <label class="radio-inline"><input type="checkbox" name="robots_meta[]" value="nofollow" -->
                <?php //echo $ads->robots_meta && strpos($ads->robots_meta, 'nofollow') > -1 ? 'checked' : '' ?><!-- > Apply nofollow to this page</label><br>-->
                <!--                        <label class="radio-inline"><input type="checkbox" name="robots_meta[]" value="noarchive" -->
                <?php //echo $ads->robots_meta && strpos($ads->robots_meta, 'noarchive') > -1 ? 'checked' : '' ?><!-- > Apply noarchive to this page</label>-->
                <!--                    </div>-->
                <!--                </div>-->


                <div class="form-group" style="margin-top: 30px">
                    <div class="col-md-4 col-sm-4 col-xs-12 col-md-offset-2" style="width: 70px">
                        <input type="submit" id="btnAddProduct" name="btnEdit" required="required"
                               class="btn btn-primary" value="Cập nhật">
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

            getAjax('<?php echo admin_url('ads/ajax_get_list_district'); ?>', params, '', 'GET', '', false, _onSuccess);
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

</script>