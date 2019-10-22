<div class="x_panel">
    <div class="x_title">
        <h2>Danh sách banner</h2>
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
        <table id="datatable-product" class="table table-striped table-bordered bulk_action">
            <thead>
            <tr>
                <th>Mã số</th>
                <th>Ảnh minh họa</th>
                <th>ID rao vặt</th>
                <th>rao vặt</th>
                <!--                <th>IMEI</th>-->
                <th>Loại</th>
                <!--                <th>Mô tả</th>-->
                <!--                <th>Giá tiền</th>-->
                <th>Người tạo</th>
                <th>Ngày Tạo</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>
            <?php
            //            $sum = 0;
            foreach ($devices as $row) {
//                $sum += $row->price;
                ?>
                <tr>
                    <td><?php echo $row->id ?></td>
                    <td>
                        <img src="<?php echo base_url('public/images/banner/' . $row->img) ?>" style="max-width: 150px">
                    </td>
                    <td><?php echo $row->id_ads; ?></td>
                    <td><?php echo $row->title; ?></td>
                    <!--                    <td>--><?php //echo $row->imei ?><!--</td>-->
                    <td><?php echo $row->type_name ?></td>
                    <!--                    <td>--><?php //echo $row->description ?><!--</td>-->
                    <!--                    <td>--><?php //echo $row->price ? number_format($row->price) : ''; ?><!--</td>-->
                    <td><?php echo $row->created_by ?></td>
                    <td><?php echo date('d/m/Y', strtotime($row->created_at)); ?></td>
                    <td>
                        <?php echo $row->status; ?>
                        <i id="highlight-<?php echo $row->id ?>"
                           class="fa fa-2x <?php echo $row->status == 2 ? 'fa-toggle-off' : 'fa-toggle-on' ?>"
                           onclick="highlight(<?php echo $row->id ?>)"
                           style="color: green"
                        ></i></td>

                    <td>
                        <a class="btn btn-xs btn-primary" href="<?php echo base_url('admin/banner/edit/' . $row->id) ?>">Sửa</a>
                        <a class="btn btn-xs btn-danger" onclick="confirmDel(<?php echo $row->id ?>)">Xóa</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>

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

    function confirmDel(id) {
        if (confirm('Bạn có chắc chắn muốn xóa?')) {
            window.location.href = '<?php echo base_url('admin/banner/del/')?>' + id;
        }
    }

    function highlight(id) {
        $.ajax({
            url: "<?php echo admin_url('banner/highlight')?>",
            type: "post",
            data: {
                id: id
            },
            success: function (msg) {
                msg = JSON.parse(msg);
                console.log(msg);
                console.log(msg.status);
                if (msg.status == 1) {
                    console.log('11111');
                    $('#highlight-' + id).removeClass("fa-toggle-off").addClass(msg.class);
                } else {
                    console.log('222222');
                    $('#highlight-' + id).removeClass("fa-toggle-on").addClass(msg.class);
                }
            },
            error: function (err) {
                console.log(err);
            }
        })
    }


</script>