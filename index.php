<?php get_header()?>
    <!-- <section class="homepage-banner">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <h2>Pressure,Level and temperature sensors</h2>
                </div>
                <div class="col-4 ">
                <div class="d-pos">
                        <div id="carouselExampleControls" class=" banner carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="./assets/images/part.png" class="d-block w-100" alt="asdsa">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="./assets/images/part.png" class="d-block w-100" alt="sada">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="./assets/images/part.png" class="d-block w-100" alt="asdas">
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <section class="categories">
        <div class="container">
            <div class="row spacer">
                <div class="col">
                    <h3>Categories</h3>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <p>Temperature</p>
                    <img src="./assets/images/temperature.jpg" alt="">
                </div>
                <div class="col">
                    <div class=" text-center">
                        <p>Pressure</p>
                        <img src="./assets/images/pressure.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class=" text-center">
                        <p>Current</p>
                        <img src="./assets/images/current.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class=" text-center">
                        <p>Wind</p>
                        <img src="./assets/images/wind.jpg" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class=" text-center">
                        <p>Curing & Moisture</p>
                        <img src="./assets/images/curing.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="industry-solutions">
        <div class="container">
            <div class="row spacer">
                <div class="col">
                    <h3>Industry Solutions</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <p class='uppercase text-center bold'>Food Processing</p>
                        <img src="./assets/images/industry/food-processing.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <p class='uppercase text-center bold'>Heating,Ventilation & Air Conditioning (HVAC)</p>
                        <img src="./assets/images/industry/food-processing.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <p class='uppercase text-center bold'>Food Processing</p>
                        <img src="./assets/images/industry/food-processing.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <p class='uppercase text-center bold'>Food Processing</p>
                        <img src="./assets/images/industry/food-processing.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="spacer"></div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <p class='uppercase text-center bold'>Food Processing</p>
                        <img src="./assets/images/industry/food-processing.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <p class='uppercase text-center bold'>Heating,Ventilation & Air Conditioning (HVAC)</p>
                        <img src="./assets/images/industry/food-processing.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <p class='uppercase text-center bold'>Food Processing</p>
                        <img src="./assets/images/industry/food-processing.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="box">
                        <p class='uppercase text-center bold'>Food Processing</p>
                        <img src="./assets/images/industry/food-processing.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-7"></div>
                <div class="col-5">
                    <h3>About Company</h3>
                    <p>lapat tapad ye wo flana dhimkana lapat tapad ye wo flana dhimkana lapat tapad ye wo flana dhimkana lapat tapad ye wo flana dhimkana</p>
                    <a href="#">Read More About Company</a>
                </div>
            </div>
        </div>
    </section>
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <h4>BLOG</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sin</p>
                    <a href="#" class="btn-outline fullwidth">ALL NEWS</a>
                </div>
                <div class="col-9">
                        <h4 class="heading">Latest Article</h4>
                    <div class="row">
                       <?php
                            if (have_posts()) {
                                while (have_posts()) {
                                    the_post();
                                    get_template_part('partials/posts/content','excerpt');
                                }
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div> -->
    <?php get_footer()?>