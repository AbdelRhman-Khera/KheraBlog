<textarea class="form-control richTextBox" name="<?php echo e($row->field); ?>" id="richtext<?php echo e($row->field); ?>">
    <?php echo e(old($row->field, $dataTypeContent->{$row->field} ?? '')); ?>

</textarea>
<?php /**PATH D:\work\kherablog\vendor\tcg\voyager\src/../resources/views/formfields/rich_text_box.blade.php ENDPATH**/ ?>