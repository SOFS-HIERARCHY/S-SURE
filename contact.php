<?php 
error_reporting (E_ALL ^ E_NOTICE);
$page_id="user_edit";
include_once 'libs/class.database.php';
include_once 'libs/class.session.php';
include_once 'libs/functions.php';
session_start();
?>
<!DOCTYPE html>
<?php
$page_id="contact";
?>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>SOFS Technologies - Contact Us</title>

    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/crumina-fonts.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/grid.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">


    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="css/primary-menu.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

</head>


<body class=" ">

<?php include 'includes/header.php';?>

<div class="header-spacer"></div>

<?php include 'includes/rightmenu.php';?>

<div class="content-wrapper">

<!-- Stunning header -->

<div class="stunning-header stunning-header-bg-blue">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">Contact Information</h1>
        <ul class="breadcrumbs">
            <li class="breadcrumbs-item">
                <a href="home.php">Home</a>
                <i class="seoicon-right-arrow"></i>
            </li>
            <li class="breadcrumbs-item active">
                <span href="#">Contact Information</span>
                <i class="seoicon-right-arrow"></i>
            </li>
        </ul>
    </div>
</div>

<!-- End Stunning header -->

<!-- Overlay Search -->


<div class="overlay_search">
    <div class="container">
        <div class="row">
            <div class="form_search-wrap">
                <form>
                    <input class="overlay_search-input" placeholder="Type and hit Enter..." type="text">
                    <a href="#" class="overlay_search-close">
                        <span></span>
                        <span></span>
                    </a>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- End Overlay Search -->


<div class="container">
    <div class="row pt120 pb80">
        <div class="col-lg-12">
            <div class="heading">
                <h4 class="h1 heading-title">Get In Touch</h4>
                <div class="heading-line">
                    <span class="short-line"></span>
                    <span class="long-line"></span>
                </div>
                <p class="heading-text">At SOFS, we believe that those who challenge the status quo today will do remarkable things tomorrow. If you're as passionate about the possibilities as we are, please contact us.Thank you for your interest in our services. We are always pleasure to fulfill your business needs.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Contacts -->


<div class="container-fluid">
    <div class="row medium-padding80 bg-border-color contacts-shadow">
        <div class="container">
            <div class="row">
                <div class="contacts">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="contacts-item">
                            <img src="img/contact7.png" alt="phone">
                            <div class="content">
                                <a href="https://www.google.co.in/maps/place/SOFS+Technologies+%26+Services/@11.6741691,78.1427264,15z/data=!4m2!3m1!1s0x0:0x441b9167a41c5690?sa=X&ved=0ahUKEwitwYmX75jRAhXLRY8KHfrWC0QQ_BIIXTAL" target="_blank" class="title">Salem, India</a>
                                <p class="sub-title">2/3, Manimegalai St, Advaitha Ashramam Rd, Fairlands - 636016</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="contacts-item">
                            <img src="img/contact8.png" alt="phone">
                            <div class="content">
                                <a href="#" class="title">contact@sofs.in</a>
                                <p class="sub-title">online support</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="contacts-item">
                            <img src="img/contact9.png" alt="phone">
                            <div class="content">
                                <a href="#" class="title">+91 427 404 2427</a>
                                <p class="sub-title">Mon-Sat 9am-6pm</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Contacts -->

<!-- Google map -->


<div class="section">
    <div id="map"></div>
    <script>
        var map;
        function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 11.674169, lng: 78.142727},
                zoom: 22,
                scrollwheel: false//set to true to enable mouse scrolling while inside the map area
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBESxStZOWN9aMvTdR3Nov66v6TXxpRZMM&amp;callback=initMap"
            async defer></script>

</div>

<!-- End Google map -->

<!-- Contact form -->


<div class="container">
    <div class="contact-form medium-padding120">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="heading">
                    <h4 class="heading-title">Have You Any Questions?</h4>
                    <div class="heading-line">
                        <span class="short-line"></span>
                        <span class="long-line"></span>
                    </div>
                    <p class="heading-text">Please contact us using the form and we’ll get back to you as soon as possible.</p>
                </div>
            </div>
        </div>

  			<form role="contacts" action="contact_actions.php" enctype="multipart/form-data" method="post" autocomplete="off">
					<input type="hidden" name="mode" value="user">
                    <div class="row">
                    
                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <input class="email input-standard-grey" id="name" required name="name" placeholder="Your Name" type="text">
                 </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
               		<input class="email input-standard-grey" id="qualification" required name="qualification" placeholder="Qualification" type="text">
                 </div>

                

            </div>

            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <input class="email input-standard-grey" id="email" required name="email" placeholder="Email Address" type="text">
                 </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <input class="email input-standard-grey" id="contact" required name="contact" placeholder="Contact Number" type="text">
                 </div>

            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                	<textarea class="email input-standard-grey" id="details"  name="details" placeholder="Details"></textarea>
                 </div>
                    
            </div>

            <div class="row">
                <div class="submit-block table">
                   <div class="col-lg-3 table-cell">
                        <button class="btn btn-small btn--primary" name="action">
                            <span class="text">Submit Now</span>
                        </button>
                    </div>

                  <div class="col-lg-5 table-cell">
                        <div class="submit-block-text">
                            Please, let us know any particular things to check and the best time
                            to contact you by phone (if provided).
                        </div>
                  </div>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- End Contact form -->

<?php include 'includes/footer.php';?>

<svg style="display:none;">
    <symbol id="arrow-left" viewBox="122.9 388.2 184.3 85">
        <path d="M124.1,431.3c0.1,2,1,3.8,2.4,5.2c0,0,0.1,0.1,0.1,0.1l34.1,34.1c1.6,1.6,3.7,2.5,5.9,2.5s4.3-0.9,5.9-2.4
		c1.6-1.6,2.4-3.7,2.4-5.9s-0.9-3.9-2.4-5.5l-19.9-19.5h11.1c1.5,0,2.7-1.5,2.7-3c0-1.5-1.2-3-2.7-3h-17.6c-1.1,0-2.1,0.6-2.5,1.6
		c-0.4,1-0.2,2.1,0.6,2.9l24.4,24.4c0.6,0.6,0.9,1.3,0.9,2.1s-0.3,1.6-0.9,2.1c-0.6,0.6-1.3,0.9-2.1,0.9s-1.6-0.3-2.1-0.9
		l-34.2-34.2c0,0,0,0,0,0c-0.6-0.6-0.8-1.4-0.9-1.9c0,0,0,0,0,0c0-0.2,0-0.4,0-0.6c0.1-0.6,0.3-1.1,0.7-1.6c0-0.1,0.1-0.1,0.2-0.2
		l34.1-34.1c0.6-0.6,1.3-0.9,2.1-0.9s1.6,0.3,2.1,0.9c0.6,0.6,0.9,1.3,0.9,2.1s-0.3,1.6-0.9,2.1l-24.4,24.4c-0.8,0.8-1,2-0.6,3
		c0.4,1,1.4,1.7,2.5,1.7h125.7c1.5,0,2.7-1,2.7-2.5c0-1.5-1.2-2.5-2.7-2.5H152.6l19.9-20.1c1.6-1.6,2.4-3.8,2.4-6s-0.9-4.4-2.4-6
		c-1.6-1.6-3.7-2.5-5.9-2.5s-4.3,0.9-5.9,2.4l-34.1,34.1c-0.2,0.2-0.3,0.3-0.5,0.5c-1.1,1.2-1.8,2.8-2,4.4
		C124.1,430.2,124.1,430.8,124.1,431.3C124.1,431.3,124.1,431.3,124.1,431.3z"></path>
        <path d="M283.3,427.9h14.2c1.7,0,3,1.3,3,3c0,1.7-1.4,3-3,3H175.1c-1.5,0-2.7,1.5-2.7,3c0,1.5,1.2,3,2.7,3h122.4
		c4.6,0,8.4-3.9,8.4-8.5c0-4.6-3.8-8.5-8.4-8.5h-14.2c-1.5,0-2.7,1-2.7,2.5C280.7,426.9,281.8,427.9,283.3,427.9z"></path>
    </symbol>
    <symbol id="arrow-right" viewBox="122.9 388.2 184.3 85">
        <path d="M305.9,430.2c-0.1-2-1-3.8-2.4-5.2c0,0-0.1-0.1-0.1-0.1l-34.1-34.1c-1.6-1.6-3.7-2.5-5.9-2.5c-2.2,0-4.3,0.9-5.9,2.4
		c-1.6,1.6-2.4,3.7-2.4,5.9s0.9,4.1,2.4,5.7l19.9,19.6h-11.1c-1.5,0-2.7,1.5-2.7,3c0,1.5,1.2,3,2.7,3h17.6c1.1,0,2.1-0.7,2.5-1.7
		c0.4-1,0.2-2.2-0.6-2.9l-24.4-24.5c-0.6-0.6-0.9-1.3-0.9-2.1s0.3-1.6,0.9-2.1c0.6-0.6,1.3-0.9,2.1-0.9c0.8,0,1.6,0.3,2.1,0.9
		l34.2,34.2c0,0,0,0,0,0c0.6,0.6,0.8,1.4,0.9,1.9c0,0,0,0,0,0c0,0.2,0,0.4,0,0.6c-0.1,0.6-0.3,1.1-0.7,1.6c0,0.1-0.1,0.1-0.2,0.2
		l-34.1,34.1c-0.6,0.6-1.3,0.9-2.1,0.9s-1.6-0.3-2.1-0.9c-0.6-0.6-0.9-1.3-0.9-2.1s0.3-1.6,0.9-2.1l24.4-24.4c0.8-0.8,1-1.9,0.6-2.9
		c-0.4-1-1.4-1.6-2.5-1.6H158.1c-1.5,0-2.7,1-2.7,2.5c0,1.5,1.2,2.5,2.7,2.5h119.3l-19.9,20c-1.6,1.6-2.4,3.7-2.4,6s0.9,4.4,2.4,5.9
		c1.6,1.6,3.7,2.5,5.9,2.5s4.3-0.9,5.9-2.4l34.1-34.1c0.2-0.2,0.3-0.3,0.5-0.5c1.1-1.2,1.8-2.8,2-4.4
		C305.9,431.3,305.9,430.8,305.9,430.2C305.9,430.2,305.9,430.2,305.9,430.2z"></path>
        <path d="M146.7,433.9h-14.2c-1.7,0-3-1.3-3-3c0-1.7,1.4-3,3-3h122.4c1.5,0,2.7-1.5,2.7-3c0-1.5-1.2-3-2.7-3H132.4
		c-4.6,0-8.4,3.9-8.4,8.5c0,4.6,3.8,8.5,8.4,8.5h14.2c1.5,0,2.7-1,2.7-2.5C149.3,434.9,148.1,433.9,146.7,433.9z"></path>
    </symbol>
    <symbol id="to-top" viewBox="0 0 32 32">
        <path d="M17,22 L25.0005601,22 C27.7616745,22 30,19.7558048 30,17 C30,14.9035809 28.7132907,13.1085075 26.8828633,12.3655101
         L26.8828633,12.3655101 C26.3600217,9.87224935 24.1486546,8 21.5,8 C20.6371017,8 19.8206159,8.19871575 19.0938083,8.55288165
         C17.8911816,6.43144875 15.6127573,5 13,5 C9.13400656,5 6,8.13400656 6,12 C6,12.1381509 6.00400207,12.275367 6.01189661,12.4115388
          L6.01189661,12.4115388 C4.23965876,13.1816085 3,14.9491311 3,17 C3,19.7614237 5.23249418,22 7.99943992,22 L16,22 L16,16 L12.75,19.25
           L12,18.5 L16.5,14 L21,18.5 L20.25,19.25 L17,16 L17,22 L17,22 Z M16,22 L16,27 L17,27 L17,22 L16,22 L16,22 Z" id="cloud-upload"></path>
    </symbol>

</svg>

<!-- JS Script -->

<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/crum-mega-menu.js"></script>
<script src="js/swiper.jquery.min.js"></script>

<script src="js/theme-plugins.js"></script>
<script src="js/main.js"></script>

<script src="js/ScrollMagic.min.js"></script>
<script src="js/velocity.min.js"></script>
<script src="js/animation.velocity.min.js"></script>

<script src="js/ajax-pagination.js"></script>

<!-- ...end JS Script -->


</body>
</html>