<div class="x_panel">
    <div class="x_title">
        <h2>Danh sách bài đăng(<?php echo $count > 0 ? number_format($count) : $count ?>)</h2>
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
        <!--        form search-->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2 col-xl-2">
                <div class="form-group">
                    <select class="form-control" id="ads_type">
                        <option value="-1" <?php echo $ads_type == -1 ? 'selected' : '' ?>>Phân Loại</option>
                        <?php foreach ($lstAdsType as $k => $v) { ?>
                            <option value="<?php echo $k ?>" <?php echo $ads_type == $k ? 'selected' : '' ?>> <?php echo $v; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-2 col-xl-2">
                <div class="form-group">
                    <select class="form-control" id="created_by">
                        <option value="-1" <?php echo $created_by == -1 ? 'selected' : '' ?>>Người tạo</option>
                        <?php foreach ($lstAdmin as $k => $v) { ?>
                            <option value="<?php echo $v->id ?>" <?php echo $created_by == $v->id ? 'selected' : '' ?>> <?php echo $v->name; ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-2 col-xl-2">
                <input type="text" id="daterange" name="daterange" value="<?php echo $fromdate; ?> - <?php echo $todate; ?>" class="form-control col-md-7 col-xs-12"/>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
                <div class="form-group">
                    <button type="button" onclick="loadpage(1);" class="btn btn-info">Tìm</button>
                </div>
            </div>
        </div>
        <!--        End form search-->
        <table id="datatable-news" class="table table-striped table-bordered bulk_action">
            <thead>
            <tr>
                <th>Mã tin</th>
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
            <?php foreach ($ads as $row) { ?>
                <tr title="<?php echo $row->note; ?>" class="<?php echo $row->note != '' ? 'bg-warning-pt' : ''; ?>">
                    <td class="text-center">
                        <button class="btn btn-default btn-xs"><?php echo $row->id ?></button>

                        <a class="btn btn-xs btn-primary btn-xs" href="<?php echo base_url('admin/ads/edit/' . $row->id) ?>">Sửa</a>
                        <?php if ($_uid == 1) { ?>
                            <a class="btn btn-xs btn-danger" onclick="confirmDel(<?php echo $row->id ?>)">Xóa</a>
                            <!--                            //update link-->
                            <a class="btn btn-xs btn-success btn-xs" href="<?php echo base_url('admin/ads/ads_link/' . $row->id) ?>">Update link</a>
                        <?php } ?>

                        <p><?php echo $row->created_name; ?></p>

                    </td>

                    <td><?php echo $row->phone; ?></td>
                    <td><img src="<?php echo base_url('public/images/ads/' . $row->img) ?>" style="max-width: 80px">
                    </td>
                    <td>
                        <a href="<?php echo base_url('rao-vat/' . create_slug($row->title) . '-' . $row->id) ?>" target="_blank">
                        <?php echo $row->title ?></td>
                    </a>
                    <td>
                        <p class="btn btn-outline-danger btn-xs"><?php echo $row->price ?> </p><br/>
                        <p class="btn btn-outline-cyan btx-xs"><?php echo $row->acreage ?> m<sup>2</sup></p>

                    </td>

                    <td>
                        <i id="ads_left-<?php echo $row->id ?>"
                           class="fa fa-2x <?php echo $row->ads_left ? 'fa-toggle-on' : 'fa-toggle-off' ?> primary"
                           onclick="ads_left(<?php echo $row->id ?>)"
                        ></i>banner trái
                    </td>

                    <td>
                        <i id="ads_right-<?php echo $row->id ?>"
                           class="fa fa-2x <?php echo $row->ads_right ? 'fa-toggle-on' : 'fa-toggle-off' ?> secondary"
                           onclick="ads_right(<?php echo $row->id ?>)"
                        ></i>banner phải
                    </td>

                    <td>
                        <i id="ads_center-<?php echo $row->id ?>"
                           class="fa fa-2x <?php echo $row->ads_center ? 'fa-toggle-on' : 'fa-toggle-off' ?> success"
                           onclick="ads_center(<?php echo $row->id ?>)"

                        ></i>banner giữa
                    </td>

                    <td>
                        <i id="layer_left-<?php echo $row->id ?>"
                           class="fa fa-2x <?php echo $row->layer_left ? 'fa-toggle-on' : 'fa-toggle-off' ?> danger"
                           onclick="layer_left(<?php echo $row->id ?>)"
                        ></i>layer trái
                    </td>

                    <td>
                        <i id="layer_vip-<?php echo $row->id ?>"
                           class="fa fa-2x <?php echo $row->layer_vip ? 'fa-toggle-on' : 'fa-toggle-off' ?> warning"
                           onclick="layer_vip(<?php echo $row->id ?>)"
                        ></i>layer vip
                    </td>

                    <td>
                        <i id="layer_right-<?php echo $row->id ?>"
                           class="fa fa-2x <?php echo $row->layer_right ? 'fa-toggle-on' : 'fa-toggle-off' ?> info"
                           onclick="layer_right(<?php echo $row->id ?>)"
                        ></i>layer phải
                    </td>

                    <td style="display: grid ">
                        <i id="icon_new-<?php echo $row->id ?>"
                           class="fa fa-2x <?php echo $row->icon_new ? 'fa-toggle-on' : 'fa-toggle-off' ?> primary"
                           onclick="icon_new(<?php echo $row->id ?>)"
                        ></i> Mới
                        <i id="icon_vip-<?php echo $row->id ?>"
                           class="fa fa-2x <?php echo $row->icon_vip ? 'fa-toggle-on' : 'fa-toggle-off' ?> info"
                           onclick="icon_vip(<?php echo $row->id ?>)"
                        ></i> Vip

                        <i id="icon_hot-<?php echo $row->id ?>"
                           class="fa fa-2x <?php echo $row->icon_hot ? 'fa-toggle-on' : 'fa-toggle-off' ?> success"
                           onclick="icon_hot(<?php echo $row->id ?>)"
                        ></i> Hot
                    </td>
                    <td><?php echo $row->view ?></td>
                    <td><?php echo date('d/m/Y', strtotime($row->created_at)); ?></td>
                </tr>

            <?php } ?>
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

    $(function () {
        $('input[name="daterange"]').daterangepicker({
            // opens: 'left'
            locale: {
                format: 'DD/MM/YYYY'
            }
        }, function (start, end, label) {
            console.log("A new date selection was made: " + start.format('DD-MM-YYYY') + ' to ' + end.format('DD-MM-YYYY'));
        });
    });

    function loadpage(page) {

        var ads_type = $("#ads_type").val();
        var created_by = $("#created_by").val();
        var dateRange = $("#daterange").val();

        var arrTime = dateRange.split("-");
        // var arrTime = formated.toString().split(',');
        var fromdate = arrTime[0];
        var todate = arrTime[1];
        fromdate = fromdate.split('/');
        fromdate = fromdate[0] + '-' + fromdate[1] + '-' + fromdate[2];
        fromdate = fromdate.replace(/\s+/g, '');
        todate = todate.split('/');
        todate = todate[0] + '-' + todate[1] + '-' + todate[2];
        todate = todate.replace(/\s+/g, '');
        // var result = $(dateRange).split('-');
        // alert( result[0] );
        // console.log('dateRange');
        // console.log(dateRange);
        // var groupid = $('#slcGroup').val().trim();
        // var kw = $("#keyword").val();
        // var searchby = $("#searchby").val();
        window.location = "<?php echo admin_url("ads") ?>?ads_type=" + ads_type + '&created_by=' + created_by + '&fromdate=' + fromdate + '&todate=' + todate;
    }

    function confirmDel(id) {
        if (confirm('Bạn có chắc chắn muốn xóa?')) {
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
                if (msg.status) {
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
                if (msg.status) {
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
                if (msg.status) {
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
                if (msg.status) {
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
                if (msg.status) {
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
                if (msg.status) {
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
                if (msg.status) {
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
                if (msg.status) {
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
                if (msg.status) {
                    $('#icon_hot-' + id).removeClass("fa-toggle-off fa-toggle-on").addClass(msg.class);
                }
            },
            error: function (err) {
                console.log(err);
            }
        })
    }
</script>