<?php require_once('layouts/header.php') ?>

<section id="slider">
    <div class="h_slider">
        <div class="large-12 columns">
            <div class="owl-carousel-h-main owl-theme">
                <div class="item">
                    <img class="img-fluid" src="images/h_slider2.jpg" style="background-position: center;background-size: cover;height:515px;object-fit: cover;">
                </div>
                <div class="item">
                    <img class="img-fluid" src="images/h_slider1.jpg" style="background-position: center;background-size: cover;height:515px;object-fit: cover;">
                </div>
                <div class="item">
                    <img class="img-fluid" src="images/h_slider3.jpg" style="background-position: center;background-size: cover;height:515px;object-fit: cover;">
                </div>
            </div>
            <script>
                $(document).ready(function() {
                var owl = $('.owl-carousel-h-main');
                owl.owlCarousel({
                    items: 1,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: false
                });

                })
            </script>
        </div>
    </div>
</section>

<section id="gallery">
    <div class="container">
        <!-- <div class="g_header">
            <h5>Gallery</h5>
        </div> -->
        <!-- <div class="h_header_desc">
            <p>&nbsp&nbsp&nbsp&nbsp Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit nulla voluptates aliquid facilis inventore deserunt ut molestias non nisi nostrum facere, architecto fugit repellendus accusamus ducimus dicta, laboriosam, porro debitis?</p>
        </div> -->
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12 g_wid">
                <div class="g_img">
                    <img class="img-fluid" src="images/gallery1.JPG" alt="" style="min-height: 417px;">
                </div>
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12 g_wid">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 g_wid">
                        <div class="g_img">
                            <img class="img-fluid" src="images/gallery2.JPG" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 g_wid">
                        <div class="g_img">
                            <img class="img-fluid" src="images/gallery3.JPG" alt="">
                        </div>
                    </div>
                </div>
                <div class="g_img">
                    <img class="img-fluid" src="images/gallery4.jpg" alt="" style="padding-top: 24px;">
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once('layouts/footer.php') ?>