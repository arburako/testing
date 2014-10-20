<?php $title="Dragonfly -  Sign In" ; $description="Sign in your account. The Logon page with blurred background." ; include( "inc/header.php"); ?>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Dragon<span class="text-info">fly</span></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right ">

                    <!--Home Pages -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0">Home
                    </a>
                        <ul class="dropdown-menu ">
                            <li>
                                <a href="index.php">Home - Option 1</a>
                            </li>

                            <li>
                                <a href="index-2.php">Home - Option 2</a>
                            </li>
                        </ul>
                    </li>

                    <!--Pages-->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0">Pages</a>

                        <ul class="dropdown-menu">

                            <!-- About Pages -->
                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">About Pages</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="about-us-v1.php">About Us I</a>
                                    </li>
                                    <li>
                                        <a href="about-us-v2.php">About Us II</a>
                                    </li>
                                    <li>
                                        <a href="about-us-v3.php">About Us III</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown-submenu">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Services Pages</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="services-v1.php">Services I</a>
                                    </li>
                                    <li>
                                        <a href="services-v2.php">Services II</a>
                                    </li>
                                    <li>
                                        <a href="services-v3.php">Services III</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="sign-in.php">Sign In</a>
                            </li>
                            <li>
                                <a href="sign-up.php">Sign Up</a>
                            </li>
                            <li>
                                <a href="our-team.php">Our Team</a>
                            </li>
                            <li>
                                <a href="pricing-tables.php">Pricing Tables</a>
                            </li>

                            <li>
                                <a href="contact.php">Contact</a>
                            </li>

                            <li>
                                <a href="support.php">Support</a>
                            </li>
                            <li>
                                <a href="404.php">404 Error</a>
                            </li>

                        </ul>
                    </li>

                    <!--Portfolio-->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0">Portfolio
                    </a>
                        <ul class="dropdown-menu ">
                            <li>
                                <a href="portfolio-v1.php">Portfolio Filter I</a>
                            </li>

                            <li>
                                <a href="portfolio-v2.php">Portfolio Filter II</a>
                            </li>
                            <li>
                                <a href="portfolio-v3.php">Portfolio Page III</a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="portfolio-item-v1.php">Portfolio Item I</a>
                            </li>

                            <li>
                                <a href="portfolio-item-v2.php">Portfolio Item II</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Blog -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0">Blog
                    </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="blog-page.php">Blog Page</a>
                            </li>
                            <li>
                                <a href="blog-item.php">Blog Item</a>
                            </li>
                        </ul>
                    </li>

                    <!--Get Started-->
                    <li class="dropdown">
                        <a href="get-started/index.php" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0">Get Started
                    </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="get-started/index.php">How to Start - Docs</a>
                            </li>
                            <li>
                                <a href="get-started/elements.php#here">Elements - Blocks of Code</a>
                            </li>
                            <li>
                                <a href="get-started/changelog.php#here">Changelog</a>
                            </li>
                            <li>
                                <a href="get-started/php-tutorial.php#here">PHP Tutorial</a>
                            </li>
                            <li>
                                <a href="get-started/license-and-credits.php#here">Licence &amp; Credits</a>
                            </li>
                        </ul>
                    </li>


                    <!-- Sidebar -->
                    <li class="dropdown hidden-xs">
                        <a href="javascript:void(0);" id="sidebar-btn">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>

    <section class="bg-6 bg-center bg-cover  section-fxd">
        <div class="bg-filter">
            <div class="hv-center">
                <div class="sign-up">
                    <div class="sign-up-hr hidden-xs"></div>
                    <h1 class="sign-up-title">Sign In</h1>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <form role="form" class="icon">
                                <div class="form-group ">
                                    <div class="control">
                                        <input type="email" class="form-control" placeholder="Email">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="control">
                                        <input type="password" class="form-control" placeholder="Password">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-check"></i>Login to your account</button>
                                <div class="space visible-sm visible-xs"></div>
                            </form>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <a href="#" title=" Sing in with Google">
                                <div class="sign-up-btn google">
                                    <div class="icon">
                                        <i class="fa fa-google-plus"></i>
                                    </div>
                                    <div class="text">
                                        Sing in with Google
                                    </div>
                                </div>
                            </a>
                            <a href="#" title=" Sing in with Facebook">
                                <div class="sign-up-btn facebook">
                                    <div class="icon">
                                        <i class="fa fa-facebook"></i>
                                    </div>
                                    <div class="text">
                                        Sing in with Facebook
                                    </div>
                                </div>
                            </a>
                            <a href="#" title=" Sing in with Twitter">
                                <div class="sign-up-btn twitter">
                                    <div class="icon">
                                        <i class="fa fa-twitter"></i>
                                    </div>
                                    <div class="text">
                                        Sing in with Twitter
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include( "inc/scripts.php"); ?>

</body>

</html>
