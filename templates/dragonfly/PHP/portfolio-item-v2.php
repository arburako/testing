<?php $title="Dragonfly -  Portfolio Item II" ; $description="Three column portfolio for your products and your amazing works." ; include( "inc/header.php"); ?>

<body>
    <!-- Navigation -->
    <?php include( "inc/nav-default.php"); ?>

    <!-- Header Box -->
    <section class="bg-16 bg-center bg-cover">
        <div class="bg-filter">
            <div class="container section-lg">
                <h1 class="top-title">Portfolio item II</h1>
            </div>
        </div>
    </section>

    <section class="section bg-grey-2">
        <div class="container">

            <h2 class="big-title">Mauris dictum facilisis augue</h2>
            <p class="text-block">Aenean fermentum risus id tortor. Mauris dictum facilisis augue. Maecenas lorem. Fusce tellus. Duis pulvinar. Sed ac dolor sit amet purus malesuada congue. Nam quis nulla. Praesent dapibus. Pellentesque pretium lectus id turpis. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p class="text-block">Aliquam in lorem sit amet leo accumsan lacinia. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Integer pellentesque quam vel velit. Morbi scelerisque luctus velit. Praesent id justo in neque elementum ultrices. Integer in sapien.</p>
            <div class="space"></div>
            <ul id="slider-aboutUs">
                <li>
                    <a href="#slide1">
                        <img src="assets/img/DeathtoStock_Wired3a.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#slide2">
                        <img src="assets/img/DeathtoStock_Desk3a.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a href="#slide3">
                        <img src="assets/img/DeathtoStock_Desk1a.jpg" alt="">
                    </a>
                </li>
            </ul>
            <div class="space"></div>
            <p class="text-block">Aenean fermentum risus id tortor. Mauris dictum facilisis augue. Maecenas lorem. Fusce tellus. Duis pulvinar. Sed ac dolor sit amet purus malesuada congue. Nam quis nulla. Praesent dapibus. Pellentesque pretium lectus id turpis. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <p class="text-block">Aliquam in lorem sit amet leo accumsan lacinia. Nullam feugiat, turpis at pulvinar vulputate, erat libero tristique tellus, nec bibendum odio risus sit amet ante. Integer pellentesque quam vel velit. Morbi scelerisque luctus velit. Praesent id justo in neque elementum ultrices. Integer in sapien.</p>
            <div class="space"></div>
            <ul class="list-unstyled info-list">
                <li><strong>Category: </strong>Websites
                </li>
                <li><strong>Services in project: </strong>Webdesing, UX, SEO
                </li>
                <li><strong>Client: </strong>Google Inc.
                </li>
                <li><strong>Date released: </strong>February 2014</li>
            </ul>
            <div class="space"></div>
            <div class="inline-btn">
                <a class="btn btn-primary btn-xlg" href="#"><i class="fa fa-paper-plane-o"></i>Live Preview</a>
                <div class="space-sm visible-xs"></div>
                <a class="btn btn-primary-trn btn-xlg" href="portfolio-v1.php"><i class="fa fa-arrow-left"></i>Back To Portfolio</a>
            </div>
        </div>
    </section>

    <section class="section ">
        <div class="container">
            <div class="clearfix ">
                <h3 class="pull-left">More Projects</h3>
                <a href="portfolio/portfolio-v1.php">
                    <h3 class="pull-right">View all projects</h3>
                </a>
            </div>
            <div class="space-sm"></div>
            <div class="row portfolio-grid">
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio/portfolio-item-v1.php" title="View portfolio item">
                        <div class="hover-content">
                            <img src="assets/img/macbook.jpg" class="img-responsive" alt="Apple Macbook Pro">
                            <div class="top-part hidden-xs">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="bottom-part hidden-xs">
                                <h3>Some Title</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="portfolio/portfolio-item-v1.php" title="View portfolio item">
                        <div class="hover-content">
                            <img src="assets/img/webdesign.jpg" class="img-responsive" alt="Webdesign">
                            <div class="top-part hidden-xs">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="bottom-part hidden-xs">
                                <h3>Some Title</h3>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6">
                    <a href="portfolio/portfolio-item-v1.php" title="View portfolio item">
                        <div class="hover-content">
                            <img src="assets/img/app-screen.jpg" class="img-responsive" alt="application">
                            <div class="top-part hidden-xs">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="bottom-part hidden-xs">
                                <h3>Some Title</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Scripts-->
    <?php include( "inc/scripts.php"); ?>

    <!-- Footer-->
    <?php include( "inc/footer.php"); ?>

</body>

</html>
