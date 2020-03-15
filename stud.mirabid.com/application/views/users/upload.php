<!DOCTYPE html>
<html>
    <head>
        <title>Image Upload</title>
    </head>
    <body>
        <?php echo form_open_multipart('UploadController/uploadPic'); ?>
        <?php echo form_upload(['name' => 'userfile', 'value' => 'Save']); ?>
            <?php echo form_error('userfile', '<div class="text-danger">','</div>'); ?>
            <?php echo form_submit(['name' => 'submit', 'value' => 'PUBLISH IMAGE']); ?>
            <?php echo anchor("UploadController/viewImages", 'View Images'); ?>
        <?php echo form_close(); ?>
        </body>

</html>