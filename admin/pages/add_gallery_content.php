<?php

    $message = '';

    if (isset($_POST['btn'])) {
        $message = $obj_gallery->save_gallery_image($_POST);
    }

?>

<div>
    <p id="titulli">Add Image to Gallery</p>
    <h3><?php echo $message; ?></h3>
</div>

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Image Title</label>
        <div>
            <input type="text" name="image_title" required class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label>Upload Image</label>

        <div>
            <input type="file" name="gallery_image">
        </div>
    </div>
    <div class="form-group">
        <label>Description</label>
        <div>
            <textarea name="image_description" rows="10"></textarea>
        </div>
    </div>

    <input type="hidden" value="<?php echo $login_id; ?>" name="user">
    <div>
        <label></label>
        <div>
            <input type="submit" name="btn" value="Save Image">
        </div>
    </div>
</form>