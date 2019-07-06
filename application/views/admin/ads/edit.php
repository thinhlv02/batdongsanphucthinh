<!--<script language="javascript" src="--><?php //echo base_url('public') ?><!--/ckeditor/ckeditor.js" type="text/javascript"></script>-->
<script type="text/javascript" src="<?php echo base_url(); ?>public/scripts/ckeditor/ckeditor.js"></script>

<div class="x_panel">
    <div class="x_title">
        <h2>Chỉnh sửa rao vặt</h2>
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


        <div class="row" style="margin-top: 40px">
            <form id="formAddCatalog" data-parsley-validate class="form-horizontal form-label-left" method="post"
                  enctype="multipart/form-data">
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Tiêu đề
                        <span class="required">*</span></label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="txtName" name="txtName" value="<?php echo $ads->title ?>"
                               required="required" class="form-control col-md-7 col-xs-12" placeholder="Tên bài viết">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Giới thiệu ngắn
                        <span class="required">*</span></label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <textarea name="txtIntro" rows="3"
                                  class="form-control"><?php echo str_replace('<br />', '&#13;', $ads->intro) ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Ảnh minh họa<span
                                class="required">*</span></label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="file" class="form-control" name="img_news" id="img_news">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Nội dung
                        <span class="required">*</span></label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <textarea name="txtContent" class="form-control"
                                  style="height: 120px"><?php echo $ads->content ?></textarea>
                        <script type="text/javascript">CKEDITOR.replace('txtContent', {height: '300px'}); </script>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Giá tiền <span
                                class="required">*</span></label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="" name="price" value="<?php echo $ads->price ?>" required="required"
                               class="form-control col-md-7 col-xs-12" placeholder="ví dụ : 1,2 tỷ / nền">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Diện tích<span
                                class="required">*</span></label>
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <input type="text" id="" name="acreage" value="<?php echo $ads->acreage ?>"
                               required="required" class="form-control col-md-7 col-xs-12" placeholder="ví dụ: 90">
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
                <!--                    <div class="col-md-8 col-sm-8 col-xs-12">-->
                <!--                        <input type="text" id="txtDocumentTitle" name="txtDocumentTitle" value="-->
                <?php //echo $ads->document_title ?><!--" required="required" class="form-control col-md-7 col-xs-12" placeholder="Tiêu đề tin trên web">-->
                <!--                    </div>-->
                <!--                </div>-->

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Khu vực<span
                                class="required">*</span></label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="" name="area" required="required" value="<?php echo $ads->area ?>"
                               class="form-control col-md-7 col-xs-12" placeholder="Địa chỉ tin rao vặt">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">SĐT liên hệ<span
                                class="required">*</span></label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="" name="phone" required="required" value="<?php echo $ads->phone ?>"
                               class="form-control col-md-7 col-xs-12" placeholder="sđt liên hệ">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Linh bài viết<span class="required">*</span></label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <input type="text" id="" name="link" value="<?php echo $ads->link ?>" required="required" class="form-control col-md-7 col-xs-12" placeholder="nhập link bài viết">
                    </div>
                </div>

                <!--                <div class="form-group">-->
                <!--                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Meta Description-->
                <!--                        <span class="required">*</span></label>-->
                <!--                    <div class="col-md-8 col-sm-8 col-xs-12">-->
                <!--                        <input type="text" id="txtMetaDescription" name="txtMetaDescription" value="-->
                <?php //echo $ads->meta_description ?><!--" required="required" class="form-control col-md-7 col-xs-12" placeholder="Meta Description">-->
                <!--                    </div>-->
                <!--                </div>-->

                <!--                <div class="form-group">-->
                <!--                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Meta Keywords-->
                <!--                        <span class="required">*</span></label>-->
                <!--                    <div class="col-md-8 col-sm-8 col-xs-12">-->
                <!--                        <input type="text" id="txtMetaKeywords" name="txtMetaKeywords" value="-->
                <?php //echo $ads->meta_keywords ?><!--" required="required" class="form-control col-md-7 col-xs-12" placeholder="Meta Keywords">-->
                <!--                    </div>-->
                <!--                </div>-->

                <!--                <div class="form-group">-->
                <!--                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Canonical URL-->
                <!--                        <span class="required">*</span></label>-->
                <!--                    <div class="col-md-8 col-sm-8 col-xs-12">-->
                <!--                        <input type="text" id="txtCanonicalUrl" name="txtCanonicalUrl" value="-->
                <?php //echo $ads->canonical_url ?><!--" required="required" class="form-control col-md-7 col-xs-12" placeholder="Canonical URL">-->
                <!--                    </div>-->
                <!--                </div>-->

                <!--                <div class="form-group">-->
                <!--                    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Robots meta setting-->
                <!--                        <span class="required">*</span></label>-->
                <!--                    <div class="col-md-8 col-sm-8 col-xs-12">-->
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