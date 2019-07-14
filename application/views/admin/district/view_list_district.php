<select class="select2_group form-control" name="info">
    <!--                            --><?php //pre($type_status) ?>
    <?php foreach ($lstdata as $key => $value) { ?>
        <option value="<?php echo $value['id'] ?>">
            <?php echo $value['_name'] ?>
        </option>
    <?php } ?>

</select>
