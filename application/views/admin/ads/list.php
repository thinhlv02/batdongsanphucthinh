
<div class="x_panel">
    <div class="x_title">
        <h2>Danh sách bài đăng(<?php echo $count> 0 ? number_format($count) : $count ?>)</h2>
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
<!--            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">-->
            <thead>
            <tr>
                <th>Mã tin</th>
<!--                <th>Tạo bởi</th>-->
                <th>SĐT</th>
                <th>Ảnh minh họa</th>
                <th>Tiêu đề</th>
                <th>Giá / Diện tích</th>
                <th>Trái</th>
                <th>Phải</th>
                <th>Giữa</th>
                <th>Layer trái</th>
                <th>Layer vip</th>
                <th>Layer phải</th>
                <th>Trạng thái</th>
                <th>Lượt xem</th>
                <th>Ngày Tạo</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($ads as $row){ ?>
                <tr title="<?php echo $row->note; ?>">
                    <td class="text-center">
                        <button class="btn btn-default btn-xs"><?php echo $row->id ?></button>

                        <a class="btn btn-xs btn-primary btn-xs" href="<?php echo base_url('admin/ads/edit/'.$row->id)?>">Sửa</a>
                        <?php if ($_uid == 1) { ?>
                            <a class="btn btn-xs btn-danger" onclick="confirmDel(<?php echo $row->id?>)">Xóa</a>
                        <?php } ?>

                        <p><?php echo $row->created_name; ?></p>

                    </td>

                    <td><?php echo $row->phone; ?></td>
                    <td><img src="<?php echo base_url('public/images/ads/'.$row->img)?>" style="max-width: 80px"> </td>
                    <td>
                        <a href="<?php echo base_url('rao-vat/' . create_slug($row->title) . '-' . $row->id) ?>" target="_blank">
                            <?php echo $row->title?></td>
                        </a>
                    <td>
                        <p class="btn btn-outline-danger btn-xs"><?php echo $row->price?> </p><br/>
                        <p class="btn btn-outline-cyan btx-xs"><?php echo $row->acreage?> m<sup>2</sup> </p>

                    </td>

                    <td>
                        <i id="ads_left-<?php echo $row->id?>"
                           class="fa fa-2x <?php echo $row->ads_left ? 'fa-toggle-on' : 'fa-toggle-off'?> primary"
                           onclick="ads_left(<?php echo $row->id?>)"
                        ></i>banner trái
                    </td>

                    <td>
                        <i id="ads_right-<?php echo $row->id?>"
                           class="fa fa-2x <?php echo $row->ads_right ? 'fa-toggle-on' : 'fa-toggle-off'?> secondary"
                           onclick="ads_right(<?php echo $row->id?>)"
                        ></i>banner phải
                    </td>

                    <td>
                        <i id="ads_center-<?php echo $row->id?>"
                           class="fa fa-2x <?php echo $row->ads_center ? 'fa-toggle-on' : 'fa-toggle-off'?> success"
                           onclick="ads_center(<?php echo $row->id?>)"

                        ></i>banner giữa
                    </td>

                    <td>
                        <i id="layer_left-<?php echo $row->id?>"
                           class="fa fa-2x <?php echo $row->layer_left ? 'fa-toggle-on' : 'fa-toggle-off'?> danger"
                           onclick="layer_left(<?php echo $row->id?>)"
                        ></i>layer trái
                    </td>

                    <td>
                        <i id="layer_vip-<?php echo $row->id?>"
                           class="fa fa-2x <?php echo $row->layer_vip ? 'fa-toggle-on' : 'fa-toggle-off'?> warning"
                           onclick="layer_vip(<?php echo $row->id?>)"
                        ></i>layer vip
                    </td>

                    <td>
                        <i id="layer_right-<?php echo $row->id?>"
                           class="fa fa-2x <?php echo $row->layer_right ? 'fa-toggle-on' : 'fa-toggle-off'?> info"
                           onclick="layer_right(<?php echo $row->id?>)"
                        ></i>layer phải
                    </td>

                    <td style="display: grid ">
                        <i id="icon_new-<?php echo $row->id?>"
                           class="fa fa-2x <?php echo $row->icon_new ? 'fa-toggle-on' : 'fa-toggle-off'?> primary"
                           onclick="icon_new(<?php echo $row->id?>)"
                        ></i> Mới
                        <i id="icon_vip-<?php echo $row->id?>"
                           class="fa fa-2x <?php echo $row->icon_vip ? 'fa-toggle-on' : 'fa-toggle-off'?> info"
                           onclick="icon_vip(<?php echo $row->id?>)"
                        ></i> Vip

                        <i id="icon_hot-<?php echo $row->id?>"
                           class="fa fa-2x <?php echo $row->icon_hot ? 'fa-toggle-on' : 'fa-toggle-off'?> success"
                           onclick="icon_hot(<?php echo $row->id?>)"
                        ></i> Hot
                    </td>
                    <td><?php echo $row->view ?></td>
                    <td><?php echo date('d/m/Y', strtotime($row->created_at)); ?></td>
                </tr>

            <?php }?>
            </tbody>
        </table>
    </div>
</div>
<script>
    // $(document).ready(function () {
    //     $('#datatable-news').dataTable({
    //         "ordering": false,
    //         "iDisplayLength": 30,
    //     });
    // });

    function confirmDel(id) {
        if(confirm('Bạn có chắc chắn muốn xóa?')){
//            console.log('delll');
            window.location.href = '<?php echo base_url('admin/ads/del/')?>' + id;
        }
    }

    function ads_left(id) {
        $.ajax({
            url: "<?php echo admin_url('ads/ads_left')?>",
            type: "post",
            data: {
                id: id
            },
            success: function (msg) {
                msg = JSON.parse(msg);
                console.log(msg);
                if(msg.status){
                    $('#ads_left-' + id).removeClass("fa-toggle-off fa-toggle-on").addClass(msg.class);
                }
            },
            error: function (err) {
                console.log(err);
            }
        })
    }

    function ads_right(id) {
        $.ajax({
            url: "<?php echo admin_url('ads/ads_right')?>",
            type: "post",
            data: {
                id: id
            },
            success: function (msg) {
                msg = JSON.parse(msg);
                console.log(msg);
                if(msg.status){
                    $('#ads_right-' + id).removeClass("fa-toggle-off fa-toggle-on").addClass(msg.class);
                }
            },
            error: function (err) {
                console.log(err);
            }
        })
    }

    function ads_center(id) {
        $.ajax({
            url: "<?php echo admin_url('ads/ads_center')?>",
            type: "post",
            data: {
                id: id
            },
            success: function (msg) {
                msg = JSON.parse(msg);
                console.log(msg);
                if(msg.status){
                    $('#ads_center-' + id).removeClass("fa-toggle-off fa-toggle-on").addClass(msg.class);
                }
            },
            error: function (err) {
                console.log(err);
            }
        })
    }

    function layer_left(id) {
        $.ajax({
            url: "<?php echo admin_url('ads/layer_left')?>",
            type: "post",
            data: {
                id: id
            },
            success: function (msg) {
                msg = JSON.parse(msg);
                console.log(msg);
                if(msg.status){
                    $('#layer_left-' + id).removeClass("fa-toggle-off fa-toggle-on").addClass(msg.class);
                }
            },
            error: function (err) {
                console.log(err);
            }
        })
    }

    function layer_vip(id) {
        $.ajax({
            url: "<?php echo admin_url('ads/layer_vip')?>",
            type: "post",
            data: {
                id: id
            },
            success: function (msg) {
                msg = JSON.parse(msg);
                console.log(msg);
                if(msg.status){
                    $('#layer_vip-' + id).removeClass("fa-toggle-off fa-toggle-on").addClass(msg.class);
                }
            },
            error: function (err) {
                console.log(err);
            }
        })
    }

    function layer_right(id) {
        $.ajax({
            url: "<?php echo admin_url('ads/layer_right')?>",
            type: "post",
            data: {
                id: id
            },
            success: function (msg) {
                msg = JSON.parse(msg);
                console.log(msg);
                if(msg.status){
                    $('#layer_right-' + id).removeClass("fa-toggle-off fa-toggle-on").addClass(msg.class);
                }
            },
            error: function (err) {
                console.log(err);
            }
        })
    }

    function icon_new(id) {
        $.ajax({
            url: "<?php echo admin_url('ads/icon_new')?>",
            type: "post",
            data: {
                id: id
            },
            success: function (msg) {
                msg = JSON.parse(msg);
                console.log(msg);
                if(msg.status){
                    $('#icon_new-' + id).removeClass("fa-toggle-off fa-toggle-on").addClass(msg.class);
                }
            },
            error: function (err) {
                console.log(err);
            }
        })
    }

    function icon_vip(id) {
        $.ajax({
            url: "<?php echo admin_url('ads/icon_vip')?>",
            type: "post",
            data: {
                id: id
            },
            success: function (msg) {
                msg = JSON.parse(msg);
                console.log(msg);
                if(msg.status){
                    $('#icon_vip-' + id).removeClass("fa-toggle-off fa-toggle-on").addClass(msg.class);
                }
            },
            error: function (err) {
                console.log(err);
            }
        })
    }

    function icon_hot(id) {
        $.ajax({
            url: "<?php echo admin_url('ads/icon_hot')?>",
            type: "post",
            data: {
                id: id
            },
            success: function (msg) {
                msg = JSON.parse(msg);
                console.log(msg);
                if(msg.status){
                    $('#icon_hot-' + id).removeClass("fa-toggle-off fa-toggle-on").addClass(msg.class);
                }
            },
            error: function (err) {
                console.log(err);
            }
        })
    }
</script>