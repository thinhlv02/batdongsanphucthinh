<section class="detail">
    <div class="container">
        <div class="col-md-3 col-sm-4">
            <div class="left-menu">
                <div class="left-title">Chính sách và điều khoản</div>
                <ul>
                    <li class="<?php if ($active == 99) echo 'active' ?>"><a
                                href="<?php echo base_url('dieu-khoan-su-dung.html') ?>">Điều khoản sử dụng</a></li>
                    <li class="<?php if ($active == 100) echo 'active' ?>"><a
                                href="<?php echo base_url('chinh-sach-bao-mat.html') ?>">Chính sách bảo mật</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9 col-sm-8 detail-content">
            <div class="card line-height-2">
                <div class="card-body">
                    <?php echo $page_content ?>
                </div>
            </div>
        </div>
    </div>
</section>