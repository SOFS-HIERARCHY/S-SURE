<!-- Header -->

<header class="header" id="site-header">

    <div class="container">

            <div class="header-content-wrapper">

                <div class="logo">
                    <a href="index-2.html" class="full-block-link"></a>
                    <img src="img/logo.png" alt="SOFS">
                </div>

                <nav id="primary-menu" class="primary-menu">

                    <a href='javascript:void(0)' id="menu-icon-trigger" class="menu-icon-trigger showhide">
                        <span class="mob-menu--title">Menu</span>
                        <span id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: hidden">
                            <svg width="1000px" height="1000px">
                                <path id="pathD" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                                <path id="pathE" d="M 300 500 L 700 500"></path>
                                <path id="pathF" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                            </svg>
                        </span>
                    </a>

                    <!-- menu-icon-wrapper -->

                    <ul class="primary-menu-menu">
                        <li class="menu-item-has-children <?php if($page_id == "home"){ echo "active"; } ?>">
                            <a href="home.php">Home</a>
                        </li>
                        
                        <li class="menu-item-has-children <?php if($page_id == "about"){ echo "active"; } ?>">
                            <a href="about.php">About Us</a>
                        </li>

                        <li class=" <?php if($page_id == "about"){ echo "active"; } ?> ">
                            <a href="services.php">Services</a>
                            <ul class="dropdown">
                                <li class="megamenu-item-info">
                                    <h5 class="megamenu-item-info-title">List of Services</h5>
                                    <p class="megamenu-item-info-text">Choose a Service</p>
                                </li>
                                <li class="hover-ver2">
                                    <a href="web_development.php"><i class="seoicon-pin-map"></i>
                                       Web Development
                                    </a>
                                </li>
                                <li class="hover-ver2">
                                    <a href="software_development.php"><i class="seoicon-button"></i>
                                      Software Development
                                    </a>
                                </li>
                                <li class="hover-ver2">
                                    <a href="mobile_app.php"><i class="seoicon-chat-comment"></i>
                                      Mobile App Development
                                    </a>
                                </li>
                                <li class="menu-item-has-children hover-ver2">
                                    <a href="bulk_sms.php"><i class="seoicon-mail-send"></i>
                                        Bulk Sms & E-Marketing
                                    </a>
                                </li>
                                <li class="hover-ver2">
                                    <a href="seo-digital.php"><i class="seoicon-search"></i>
                                        SEO & Digital Marketing
                                    </a>
                                </li>
                                <li class="menu-item-has-children hover-ver2">
                                    <a href="services.php">
                                        <i class="seoicon-pie-graph-split"></i>
                                        Services Promo List
                                    </a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="menu-item-has-children <?php if($page_id == "portfolio"){ echo "active"; } ?>">
                            <a href="portfolio.php">Our Portfolio</a>
                        </li>
                        
                        <li class="menu-item-has-children <?php if($page_id == "career"){ echo "active"; } ?>">
                            <a href="career.php">Career</a>
                        </li>

                        <li class="menu-item-has-children <?php if($page_id == "contact"){ echo "active"; } ?>">
                            <a href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                </nav>

                <div class="user-menu open-overlay">
                    <a href="#" class="user-menu-content  js-open-aside">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
            </div>

    </div>

</header>
<!-- ... End Header -->