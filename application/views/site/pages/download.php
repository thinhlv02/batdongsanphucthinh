<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view($this->_template_f . 'layout/head')?>
</head>
<body>
<?php $this->load->view($this->_template_f . 'layout/menu')?>

<div style="margin-top: 60px">
    <?php $this->load->view($this->_template_f . 'home/download')?>
</div>

<?php $this->load->view($this->_template_f . 'layout/footer')?>
</body>
</html>