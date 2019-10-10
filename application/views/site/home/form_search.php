
<div class="col-sm-2 col-md-2">
    <div class="box-module mt-2">
        <div class="bg-modul"><h7>
                <i class="glyphicon glyphicon-search"></i> <?php echo $common_lang['search_title']; ?></h7></div>
    </div>
    <div class="card" style="background: #5caceb33 !important;">
        <div class="card-body pt-0 " style="height: 295px;">
            <!--                        <div class="box-module">-->
            <!--                            <div class="bg-modul"><i class="glyphicon glyphicon-search"></i> Tìm kiếm</div>-->
            <!--                        </div>-->
            <!--                        <div class="page-title text-center">-->
            <!--                            <h4 class="border-bottom">Chức năng tìm kiếm</h4>-->
            <!--                            <button type="button" class="btn btn-success">Thanh tìm kiếm <span class="badge"></span></button>-->
            <!--                        </div>-->

            <!--                        <form id="formAddProduct_book" method="post" enctype="multipart/form-data">-->

            <form id="formAddProduct_book12" data-parsley-validate class="" method="get"
                  action="<?php echo base_url('tim-kiem') ?>"
                  enctype="multipart/form-data">
                <div class="form-group">
<!--                    <label for="email">Mã tin:</label>-->
                    <input type="text" class="form-control" placeholder="<?php echo $common_lang['search_phone']; ?>" name="code">
                </div>
                <div class="form-group">
                    <!--                                <label for="email">Tỉnh thành</label>-->
                    <select class="form-control" name="province" onchange="get_district(this)">
                        <option value=""> <?php echo $common_lang['choose_province']; ?> </option>
                        <?php echo $_GET['province'] ?>
                        <?php foreach ($lstProvince as $key => $value) { ?>
                            <option value="<?= $value->id ?>" <?php if (isset($_GET['province']) && $_GET['province'] == $value->id) echo 'selected' ?>>
                                <?php echo $value->_name ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <!--                                <label for="email">Quận Huyện</label>-->
                    <div class="" id="divDistrict">
                        <select class="form-control" name="district">
                            <option value="0"> <?php echo $common_lang['choose_district']; ?></option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <!--                                <label for="email">Xã / Phường</label>-->
                    <div class="" id="divWard">
                        <select class="form-control" name="ward">
                            <option value="0"> <?php echo $common_lang['choose_ward']; ?></option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
<!--                                            <label for="email">Loại</label>-->
                    <select class="form-control">
                        <option value=""> -- <?php echo $common_lang['choose_type']; ?> --</option>
                        <option value="1"> <?php echo $common_lang['for_sale']; ?></option>
                        <option value="2"> <?php echo $common_lang['need_to_buy']; ?></option>
                    </select>
                </div>
                <div class="text-center">

                    <button style="background: #5caceb " type="submit" class="btn btn-default"><?php echo $common_lang['btn_search']; ?>
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>