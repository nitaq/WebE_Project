<?php

    include('auth/session.php');
    require '../class/Gallery.php';
    $obj_gallery = new Gallery();
    $query_result = $obj_gallery->select_all_users();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../css/admin.css">
    </head>

    <body>
        <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
        <div id="wrapper" class="toggled">
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li><a href="add_gallery.php">Add Gallery</a></li>
                    <li><a href="manage_gallery.php">Manage Gallery</a></li>
                </ul>
            </div>
            <b id="logout"><a href="auth/logout.php">Log Out</a></b>

            <div id="page-wrapper">
                <?php
                if (isset($pages)) 
                {
                    if ($pages == 'add_gallery') 
                    {
                        include './pages/add_gallery_content.php';

                    } 
                    else if ($pages == 'manage_gallery') 
                    {
                        include './pages/manage_gallery_content.php';
                    } 
                    else if ($pages == 'edit_gallery') 
                    {
                        include './pages/edit_gallery_content.php';
                    }
                } ?>
            </div>
        </div>
    </body>
</html>