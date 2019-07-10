<?php
    $db = mysqli_connect('localhost', 'root', '', 'dbportfolio');

    $image_id = $_GET['id'];
    $query_result = $obj_gallery->select_gallery_info_by_id($image_id);
    $gallery_info = mysqli_fetch_assoc($query_result);
    extract($gallery_info);

    if (isset($_POST['btn'])) 
    {
        $image_title = $_POST['image_title'];
        $image_description = $_POST['image_description'];
        $queryStr = "UPDATE tbl_gallery SET image_title='$image_title', image_description='$image_description',user='$login_id'";

        $check = getimagesize($_FILES['gallery_image']['tmp_name']);
        if($check)
        {
            $directory = '../uploads/';
            $target_file = $_FILES['gallery_image']['name'];
            $file_type = pathinfo($target_file, PATHINFO_EXTENSION);

            //create an unique name
            $target_file = $directory . uniqid() .'.'. $file_type;
            move_uploaded_file($_FILES['gallery_image']['tmp_name'], $target_file);

            $queryStr .= ", gallery_image='$target_file'";
        }

        $queryStr .= "Where image_id=$image_id";

        $user = $_POST['user'];

        mysqli_query($db, $queryStr);
        header('location:manage_gallery.php');
    }

    $query_result = $obj_gallery->select_all_users();

?>

<div class="row">
    <div>
        <div>
            <p>Edit Gallery Form</p>
        </div>
    </div>
</div>

<div class="row">
    <div>
        <div>
            <form action="" method="post" name="edit_category_form"  enctype="multipart/form-data">
                <div class="form-group">
                    <label">Image Name</label>
                    <div>
                        <input type="text" name="image_title" required class="form-control" value="<?php echo $image_title; ?>">
                    </div>
                </div>
                <div>
                    <label>Upload Image</label>
                    <div>
                        <input type="file" name="gallery_image">
                        <br><br>
                        <td><img src="<?php echo $gallery_image; ?>" height="150" width="200"></td>
                    </div>
                </div>

                <label>Description </label>
                <div>
                    <textarea name="image_description" style="width:200px;" rows="10"><?php echo $image_description;?></textarea>
                    <input type="hidden" value="<?php echo $login_session; ?>" name="user">
                </div>
                <div>
                    <label></label>
                    <div>
                        <input type="submit" name="btn" value="Update Image Info">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>