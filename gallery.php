<?php
    include 'includes/header.php';
    require 'class/View.php';
    $obj_view = new View();
    $query_result = $obj_view->select_all_gallery_images();
?>

<div class="container">
    <div class="row" id="primary">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

        <body>

        <section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
			<h1 class="page-title">Gallery</h1>
		</section>
        <div class="w3-row-padding w3-margin-top">
            <?php while ( $published_portfolio = mysqli_fetch_assoc($query_result)) { ?>
                <div class="w3-third">
                    <div class="w3-card-2">
                        <img src="admin/<?php echo $published_portfolio['gallery_image']; ?>" style="width:100%">
                        <div class="w3-container">
                            <h5><?php echo $published_portfolio['image_title']; ?></h5>
                        </div>
                    </div>
                </div>
            <?php } ?>
    </div>
</div>
</div>

<?php
    include 'includes/footer.php';
?>