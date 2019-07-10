<?php

    require 'class/View.php';
    $obj_view = new View();
    $query_result = $obj_view->select_latest_gallery_images();
    include 'includes/header.php';

?>

    <!-- Entry section -->
    <div class="entry-section">
        <div class="container">
            <div class="gradient-section">

            </div>
        </div>
    </div>

    <!-- Slider -->
    <div id="medium-content">
        <div class="slider-container">
            <div class="slideri">
                <div id="slider1" class="jSlider" data-loop="true">
                    <div><img src="img/slider1.png" alt=""/></div>
                    <div><img src="img/slider2.png" alt=""/></div>
                    <div><img src="img/slider3.png" alt=""/></div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- LAtest Gallery Images Section -->
    <div class="container">
        <div class="row">
            <section>
                <h1 class="section-title">Latest gallery images</h1>
            </section>
            <div class="row">
                <?php while ( $published_portfolio = mysqli_fetch_assoc($query_result)) { ?>
                    <div class="column">
                        <div class="latest-card">
                            <img src="admin/<?php echo $published_portfolio['gallery_image']; ?>" style="width:100%">
                            <div class="latest-description">
                                <h5><?php echo $published_portfolio['image_title']; ?></h5>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

<br>
</br>


    <!-- Showcase section -->
    <div class="showcase-section">
        <div class="container">

            <div class="showcase-left">

                <div class="sc-left-top">
                    <div class="sc-first-row">
                        <div class="sc-item">
                            <div class="sc-item-img">
                                <img src="img/1.png" alt="">
                            </div>
                            <div class="sc-item-text">
                                <h4>Lorem ipsum dolor est</h4>
                                <p>Sed eget augue mauris, ac vestibulu dolor. Etiam ut possuere dolor.</p>
                            </div>
                        </div>
                        <div class="sc-item second-ch">
                            <div class="sc-item-img">
                                <img src="img/2.png" alt="">
                            </div>
                            <div class="sc-item-text">
                                <h4>Lorem ipsum dolor est</h4>
                                <p>Sed eget augue mauris, ac vestibulu dolor. Etiam ut possuere dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="sc-second-row">
                        <div class="sc-item">
                            <div class="sc-item-img">
                                <img src="img/3.png" alt="">
                            </div>
                            <div class="sc-item-text">
                                <h4>Lorem ipsum dolor est</h4>
                                <p>Sed eget augue mauris, ac vestibulu dolor. Etiam ut possuere dolor.</p>
                            </div>
                        </div>
                        <div class="sc-item second-ch">
                            <div class="sc-item-img">
                                <img src="img/4.png" alt="">
                            </div>
                            <div class="sc-item-text">
                                <h4>Lorem ipsum dolor est</h4>
                                <p>Sed eget augue mauris, ac vestibulu dolor. Etiam ut possuere dolor.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="sc-left-bottom">
                    <h2>Lorem ipsum dolor est ante tincidunt</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et voluptatibus asperiores iure
                        exercitationem debitis sit repudiandae quo, nemo soluta ad dignissimos facere doloremque dolorum
                        qui adipisci, libero fugiat alias quaerat! Et voluptatibus asperiores iure exercitationem
                        debitis sit repudiandae quo, nemo soluta ad dignissimos facere doloremque dolorum qui adipisci,
                        libero fugiat alias quaerat!</p>
                </div>
            </div>
            <div class="showcase-right">
                <div class="sc-right-items">
                    <h4>Lorem ipsum dolor est</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, consectetur, distinctio!
                        Tenetur quia ut sapiente.</p>
                </div>
                <div class="sc-right-items">
                    <h4>Lorem ipsum dolor est</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, consectetur, distinctio!
                        Tenetur quia ut sapiente.</p>
                </div>
                <div class="sc-right-items">
                    <h4>Lorem ipsum dolor est</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, consectetur, distinctio!
                        Tenetur quia ut sapiente.</p>
                </div>
                <div class="sc-right-items">
                    <h4>Lorem ipsum dolor est</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, consectetur, distinctio!
                        Tenetur quia ut sapiente.</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Grid section -->
    <div class="grid-section clear">
        <div class="container">

            <div class="grid-one">
                <h3>Read more about us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga maxime deserunt quibusdam dolorem
                    doloremque facere eum quod tempora debitis explicabo.</p>
            </div>

            <div class="grid-two">
                <h3>Download latest tutorials</h3>

                <div class="grid-list">
                    <ul>
                        <li>Lorem ipsum dolor est</li>
                        <li>Curcus ut purus libero</li>
                        <li>Mauritus mortua est</li>
                        <li>Nam egestas tincidunt</li>
                    </ul>
                </div>
            </div>

            <div class="grid-two gridd">
                <h3>Category list</h3>

                <div class="grid-list">
                    <ul>
                        <li>Lorem ipsum dolor est</li>
                        <li>Curcus ut purus libero</li>
                        <li>Mauritus mortua est</li>
                        <li>Nam egestas tincidunt</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


<?php
    include 'includes/footer.php';
?>