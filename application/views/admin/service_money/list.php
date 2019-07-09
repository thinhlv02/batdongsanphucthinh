
<div class="x_panel">
    <div class="x_title">
        <h2>Danh sách bài đăng</h2>
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
                <th>Mã số</th>
                <th>Ảnh minh họa</th>
                <th>Tiêu đề</th>
                <th>Giá</th>
                <th>Diện tích</th>
                <th>Khu vực</th>
                <th>Ngày Tạo</th>
                <th>service_money</th>
                <th>make_money_by</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
            <?php $sum = 0;
            foreach ($ads as $row){
                $sum += $row->service_money;
                ?>
                <tr>
<!--                    <td>--><?php //echo $row->id?><!--</td>-->
                    <td><?php echo $row->code?></td>
                    <td><img src="<?php echo base_url('public/images/ads/'.$row->img)?>" style="max-width: 150px"> </td>
                    <td><?php echo $row->title?></td>
                    <td><?php echo $row->price?></td>
                    <td><?php echo $row->acreage?></td>
                    <td><?php echo $row->area?></td>
                    <td><?php echo date('d/m/Y', strtotime($row->created_at)); ?></td>
                    <td><?php echo $row->service_money?></td>
                    <td><?php echo $row->make_money_by?></td>
                    <td>
                        <a class="btn btn-xs btn-primary" href="<?php echo base_url('admin/service_money/edit/'.$row->id)?>">Sửa</a>
                    </td>

                </tr>

            <?php }?>
            </tbody>
            <tfoot>
            <tr class="bg-primary">
                <td colspan="8">Tổng tiền</td>
                <td><?php echo($sum > 0 ? number_format($sum) : '') ?></td>
                <td colspan="3"></td>
            </tr>
            </tfoot>
        </table>
        <!-- <a href="#" class="btn btn-danger">Xóa đã chọn </a> -->
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#datatable-news').dataTable({
            "ordering": false
        });
    });

</script>