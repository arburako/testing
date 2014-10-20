<?php $title="Dragonfly -  Portfolio Item I" ; $description="Three column portfolio for your products and your amazing works." ; include( "inc/header.php"); ?>

<body>
    <!-- Navigation -->
    <?php include( "inc/nav-default.php"); ?>

    <!-- Header Box -->
    <section class="bg-16 bg-center bg-cover">
        <div class="bg-filter">
            <div class="container section-lg">
                <h1 class="top-title">Portfolio item I</h1>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container-sm">
            <h2 class="big-title">Project title</h2> 
            <div class="space-sm"></div>
            <p class="text-block">Turnip greens yarrow ricebean rutabaga endive cauliflower sea lettuce kohlrabi amaranth water spinach avocado daikon napa cabbage asparagus winter purslane kale. Celery potato scallion desert raisin horseradish spinach carrot soko.</p>
            <p class="text-block">Lotus root water spinach fennel kombu maize bamboo shoot green bean swiss chard seakale pumpkin onion chickpea gram corn pea. Brussels sprout coriander water chestnut gourd swiss chard wakame kohlrabi beetroot carrot watercress. Corn amaranth salsify bunya nuts nori azuki bean chickweed potato bell pepper artichoke.</p>
            <div class="space"></div>
            <img class="img-responsive  center-block" src="assets/img/rmbp-sm.png" alt="macbook pro retina">
            <div class="space"></div>
            <p class="text-block">Etiam sapien elit, consequat eget, tristique non, venenatis quis, ante. In enim a arcu imperdiet malesuada. Maecenas ipsum velit, consectetuer eu lobortis ut, dictum at dui. Aliquam in lorem sit amet leo accumsan lacinia. Curabitur bibendum justo non orci. Sed convallis magna eu sem. Nam quis nulla.</p>
            <hr class="hr">

            <ul class="list-unstyled info-list">
                <li><strong>Category: </strong>Websites
                </li>
                <li><strong>Services in project: </strong>Webdesing, UX, SEO
                </li>
                <li><strong>Client: </strong>Google Inc.
                </li>
                <li><strong>Date released: </strong>February 2014</li>
            </ul>

            <hr class="hr">

            <div class="inline-btn">
                <a class="btn btn-primary btn-xlg" href="#"><i class="fa fa-paper-plane-o"></i>Live Preview</a>
                <div class="space-sm visible-xs"></div>
                <a class="btn btn-primary-trn btn-xlg" href="portfolio-v1.php"><i class="fa fa-arrow-left"></i>Back To Portfolio</a>
            </div>
        </div>
    </section>

    <section class="bg-grey section">
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
                            <img src="assets/img/sign-up-sketch.jpg" class="img-responsive" alt="Portfolio - application">
                            <div class="top-part hidden-xs">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="bottom-part hidden-xs">
                                <h3>Title</h3>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 ">
                    <a href="portfolio/portfolio-item-v1.php" title="View portfolio item">
                        <div class="hover-content">
                            <img src="assets/img/minimal-wireframe-assets.jpg" class="img-responsive" alt="Websites Layout">
                            <div class="top-part hidden-xs">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="bottom-part hidden-xs">
                                <h3>Title</h3>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6 ">
                    <a href="portfolio/portfolio-item-v1.php" title="View portfolio item">
                        <div class="hover-content">
                            <img src="assets/img/App-Preview.jpg" class="img-responsive" alt="Portfolio - application">
                            <div class="top-part hidden-xs">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="bottom-part hidden-xs">
                                <h3>Title</h3>
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