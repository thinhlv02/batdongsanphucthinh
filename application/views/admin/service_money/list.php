

<!--form-->
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content">
                <br/>
                <form id="formAddProduct" data-parsley-validate class="form-horizontal form-label-left" method="post"
                      enctype="multipart/form-data">
                    <div class="form-group">

                        <label class="control-label col-md-1 col-sm-1 col-xs-2" for="first-name">Bắt đầu<span
                                    class="required">*</span></label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <!--                <span style="float: left;margin-top: 7px">Từ ngày: </span>-->
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" id="txtFrom" name="txtFrom" required
                                       class="form-control col-md-7 col-xs-12"
                                       value="<?php if (isset($_POST['txtFrom'])) echo $_POST['txtFrom'] ?>">
                            </div>
                        </div>

                        <label class="control-label col-md-1 col-sm-1 col-xs-2" for="first-name">kết thúc<span
                                    class="required">*</span></label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <!--                <span style="float: left;margin-top: 7px">Từ ngày: </span>-->

                            <input type="text" id="txtTo" name="txtTo" required
                                   class="form-control col-md-7 col-xs-12"
                                   value="<?php if (isset($_POST['txtTo'])) echo $_POST['txtTo'] ?>">

                        </div>

                        <label class="control-label col-md-1 col-sm-1 col-xs-2" for="first-name">Nhân sự<span
                                    class="required">*</span></label>
                        <div class="col-md-2 col-sm-2 col-xs-12">
                            <select class="select2_group form-control" name="make_money_by">
                                <option value="99">-- All --</option>
                                <?php foreach ($emps as $key => $value) { ?>
                                    <option value="<?= $value->id ?>" <?php if (isset($_POST['make_money_by']) && $_POST['make_money_by'] == $value->id) echo 'selected' ?>>
                                        <?php echo $value->name ?>
                                    </option>
                                <?php } ?>

                            </select>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-0" style="width: 70px">
                            <input type="submit" id="btnAddEvent" name="btnAddSearch" class="btn btn-success"
                                   value="Tìm">
                        </div>
                    </div>

                    <div class="form-group">

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--end form-->

<div class="x_panel">
    <div class="x_title">
        <h2>Danh sách</h2>
        <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
        <table id="datatable-news" class="table table-striped table-bordered bulk_action">
            <thead>
            <tr>
                <th>Mã tin</th>
                <th>Ảnh minh họa</th>
                <th>Tiêu đề</th>
<!--                <th>Giá</th>-->
<!--                <th>Diện tích</th>-->
<!--                <th>Khu vực</th>-->
                <th>Ngày Tạo</th>
                <th>service_money</th>
                <th>make_money_by</th>
                <th>pay time</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
            <?php
            if (isset($ads) && !empty($ads)) {
            $sum = 0;
            foreach ($ads as $row){
                $sum += $row->service_money;
                ?>
                <tr>
<!--                    <td>--><?php //echo $row->id?><!--</td>-->
                    <td><?php echo $row->id?></td>
                    <td><img src="<?php echo base_url('public/images/ads/'.$row->img)?>" alt="<?php echo $row->img ?>" style="max-width: 80px"> </td>
                    <td>
                        <a href="<?php echo base_url('rao-vat/' . create_slug($row->title) . '-' . $row->id) ?>" target="_blank">
                        <?php echo $row->title?></td>
                        </a>

<!--                    <td>--><?php //echo $row->price?><!--</td>-->
<!--                    <td>--><?php //echo $row->acreage?><!--</td>-->
<!--                    <td>--><?php //echo $row->area?><!--</td>-->
                    <td><?php echo date('d/m/Y', strtotime($row->created_at)); ?></td>
                    <td><?php echo $row->service_money > 0 ? number_format($row->service_money) : '' ?></td>
                    <td><?php echo $row->name_emp ?></td>
                    <td><?php echo $row->pay_time ?></td>
                    <td>
                        <a class="btn btn-xs btn-primary" href="<?php echo base_url('admin/service_money/edit/'.$row->id)?>">Sửa</a>
                    </td>

                </tr>

            <?php } } ?>
            </tbody>

            <?php if (isset($ads) && !empty($ads)) { ?>
                <tfoot>
                <tr class="bg-primary">
                    <td colspan="3">Tổng tiền</td>
                    <td><?php echo($sum > 0 ? number_format($sum) : '') ?></td>
                    <td><?php echo($sum > 0 ? number_format($sum*0.15) : '') ?></td>
                    <td colspan="3"></td>
                </tr>
                </tfoot>
            <?php } ?>

        </table>
        <!-- <a href="#" class="btn btn-danger">Xóa đã chọn </a> -->
    </div>
</div>
<script>
    // $(document).ready(function () {
    //     $('#datatable-news').dataTable({
    //         "ordering": false
    //     });
    // });

</script>