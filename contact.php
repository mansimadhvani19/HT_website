<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themecraze.net/html/volia/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 09:02:31 GMT -->
<head>
<meta charset="utf-8">
<title>Contact</title>
<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/HT [Converted]-01.png" type="image/x-icon">
<link rel="icon" href="images/HT [Converted]-01.png" type="image/x-icon">
<!--Color Switcher Mockup-->
<link href="css/color-switcher-design.css" rel="stylesheet">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <?php include 'header.php'; ?>
    <!--End Main Header -->

    <!-- Hidden bar back drop -->
    <div class="form-back-drop"></div>

    <!-- Hidden Bar -->
    <section class="hidden-bar">
        <div class="inner-box">
            <div class="title-box">
                <h2>Contact Us</h2>
                <div class="cross-icon"><span class="fa fa-times"></span></div>
            </div>
            
            <!--Appointment Form-->
            <div class="form-style-one">
                <form action="#" method="post">
                    <div class="form-group">
                        <input type="text" name="username" class="username" placeholder="Your Name *">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="email" placeholder="Your Email *">
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" class="phone" value="" placeholder="Your Phone*" required>
                    </div>
                    <div class="form-group">
                        <textarea name="contact_message" class="message" placeholder="Text Message"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="theme-btn btn-style-one" type="button" id="submit" name="submit-form"><span class="btn-title">Submit Now</span> </button>
                    </div>
                </form>
            </div>

            <ul class="contact-list-one">
                <li><i class="flaticon-location"></i>A-838 sun westbank.ahemdavad<strong>Address</strong></li>

                <li><i class="flaticon-alarm-clock-1"></i>Monday - Saturday 10am - 7pm <strong>Timeing</strong></li>

                <li><i class="flaticon-email-1"></i> <a href="mailto:ask@happyteam.co.in">ask@happyteam.co.in</a> <strong>Mail to us</strong></li>
            </ul>
        </div>
    </section>
    <!--End Hidden Bar -->

    <!--Page Title-->
    <section class="page-title" style="background-image: url(./images/1-Copy.jpg);">
        <div class="anim-icons full-width">
            <span class="icon icon-bull-eye"></span>
            <span class="icon icon-dotted-circle"></span>
        </div>
        <div class="auto-container">
            <div class="title-outer">
                <h1>Contact</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Contact</li>
                </ul> 
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="sub-title">GET IN TOUCH</span>
                <h2>If Contact With Us Send Detail</h2>
                <span class="divider"></span>
            </div>

            <div class="contact-form">
                <form method="post" action="contact_handler.php" id="contact-form">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <div class="input-outer">
                                <input type="text" name="name" placeholder="Name" required="">
                                <span class="icon fa fa-user"></span>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <div class="input-outer">
                                <input type="email" name="email" placeholder="Email" required="">
                                <span class="icon fa fa-envelope"></span>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <div class="input-outer">
                                <input type="text" name="phone" placeholder="Phone" required="">
                                <span class="icon fa fa-phone"></span>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                            <div class="input-outer">
                                <input type="text" name="subject" placeholder="Subject" required="">
                                <span class="icon fa fa-pencil-alt"></span>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 form-group text-center">
                            <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Submit Now</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--End Contact Page Section -->

     <!-- Map Section -->
    <section class="map-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="contact-column col-lg-5 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">QUICK CONTACT</span>
                            <h2>Need Help? Contact Us</h2>
                            <span class="divider"></span>
                            <div class="text">Available to our business customers 24 hours a day.</div>
                        </div>
                        <ul class="contact-info">
                            <li>
                                <span class="icon fa fa-map-marker-alt"></span> 
                                <h4>Our Location:</h4>
                                <p>A-838 sun westbank,Ahmedabad</p>
                            </li>

                            <li>
                                <span class="icon fa fa-phone-volume"></span> 
                                <h4>24/7 Hotline:</h4>
                                <p>+91 9662695956/079-46022913</p>
                            </li>

                            <li>
                                <span class="icon fa fa-envelope"></span> 
                                <h4>Email:</h4>
                                <p><a href="mailto:ask@happyteam.co.in">ask@happyteam.co.in</a></p>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Form Column -->
                <div class="map-column col-lg-7 col-md-12 col-sm-12">
                     <!--Map Outer-->
                    <div class="map-outer">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.8017434483586!2d72.56835041079287!3d23.03105051592506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e85eb1c23db1d%3A0x9ae71e556ff4a3!2sThe%20Address%20Sun%20Westbank%20Ashram%20Road%20Ahmedabad!5e0!3m2!1sen!2sin!4v1685359878400!5m2!1sen!2sin" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Map Section -->

    <!-- Subscribe Section Two -->
    <section class="subscribe-section-two">
        <div class="auto-container">
            <div class="content-box">
                <div class="sec-title text-center light">
                    <span class="sub-title-get">Get The Latest Updates</span>
                    <h2>Signup For Newsletter</h2>
                    <div class="divider"></div>
                </div>

                <div class="newsletter-form-two">
                    <form method="post" action="https://themecraze.net/html/volia/blog.php">
                        <div class="form-group">
                            <input type="email" name="field-name" value="" placeholder="Signup For Newsletter" required>
                            <button type="submit" class="theme-btn btn-style-two"><span class="btn-title">Subscribe</span></button>
                        </div>
                    </form>
                </div>

                <div class="text">If You Want to Update For on Our Site a#<a href="#">Subscribe</a> Now.</div>
            </div>
        </div>
    </section>
    <!--End Subscribe Section Two -->

    <!-- Main Footer -->
   <footer class="main-footer style-three">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row">
                    <!--Big Column-->
                    <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-xl-7 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <div class="logo">
                                        <a href="index-2.php"><img src="images/HAPPY TEAM-01 2.png" alt="" /></a>
                                    </div>
                                    <div class="text">
                                        <p>We have very good strength in innovative technology and tools with over 35 years of experience. We makes long-term investments goal in global companies in different sectors, mainly in Europe and other countries.</p>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-xl-5 col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget lnks-widget">
                                    <h2 class="widget-title">Useful Links</h2>
                                    <ul class="user-links">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">About</a></li>
                                        <li><a href="service.php">Services</a></li>
                                        <li><a href="gallery.php">Gallery</a></li>
                                        <li><a href="work.php">Our Work</a></li>
                                        <li><a href="media.php">Media</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Big Column-->
                    <div class="big-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="row">
                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <!--Footer Column-->
                                <div class="footer-widget contact-widget">
                                    <h2 class="widget-title">Get in Touch</h2>
                                     <!--Footer Column-->
                                    <div class="widget-content">
                                        <ul class="contact-list-three">
                                            <li>
                                                <i class="icon flaticon-alarm-clock-1"></i>
                                                <div class="text">
                                                    Monday - Sturday 10am - 6pm <br> 
                                                    <strong>Timeing</strong>
                                                </div>
                                            </li>

                                            <li>
                                                <i class="icon flaticon-email-1"></i>
                                                <div class="text">
                                                    <a href="mailto:ask@happyteam.co.in">ask@happyteam.co.in</a><br>
                                                    <strong>Mail to us</strong>
                                                </div>
                                            </li>

                                            <li>
                                                <i class="icon flaticon-location"></i>
                                                <div class="text">
                                                    A-838 Sun Westbank,Ahmedabad
                                                    <strong>Address</strong>
                                                </div>
                                            </li>                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget">
                                    <h2 class="widget-title">Events</h2>
                                    <div class="widget-content">
                                        <ul class="events-list">
                                            <li>BalloonRun – Ahmedabad</li>
                                            <li>GreenplanetRun – Ahmedabad</li>
                                            <li>Corporate Event – Ahmedabad</li>
                                            <li>Thrill Addict- Ahmedabad</li>
                                        </ul>

                                        <ul class="social-icon-two">
                                           
                                            <li><a href="https://instagram.com/happyteam95?igshid=MzRlODBiNWFlZA=="><span class="fab fa-instagram"></span></a></li>

                                            <li><a href="https://www.facebook.com/2065237537081440/posts/pfbid0JcPLdZC6kXgEQzGGD5sDwfkuCnQqWfKZdgtF4VrgTY2USteVhX694rdSqofJ7SYhl/?mibextid=Nif5oz "><span class="fab fa-facebook-f"></span></a></li>
                        
                                            <li><a href="https://wa.me/message/DB7YRHTPF7RQA1"><span class="fab fa-whatsapp"></span></a></li>
                        
                                            <li><a href="https://youtube.com/@HappyTeam.95"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>       
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="copyright-text">Copyright © 2023 All Rights Reserved by <a href="contact.php">Happy Team</a></div>
        </div>
    </footer>
    <!--End Main Footer -->


</div>
<!-- End Page Wrapper -->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!-- Color Palate -->
<!--<div class="color-palate">-->
<!--    <div class="color-trigger">-->
<!--        <i class="fa fa-cog"></i>-->
<!--    </div>-->
<!--    <div class="color-palate-head">-->
<!--        <h6>Choose Your Demo</h6>-->
<!--    </div>-->
<!--    <ul class="box-version option-box"> <li>Full width</li> <li class="box">Boxed</li> </ul>-->
<!--    <ul class="rtl-version option-box"> <li>LTR Version</li> <li class="rtl">RTL Version</li> </ul>-->
<!--    <div class="palate-foo">-->
<!--        <span>You will find much more options for colors and styling in admin panel. This color picker is used only for demonstation purposes.</span>-->
<!--    </div>-->
<!--    <a href="#" class="purchase-btn">Purchase now</a>-->
<!--</div><!-- End Color Switcher -->-->


<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
<!-- Color Setting -->
<script src="js/color-settings.js"></script>
</body>

<!-- Mirrored from themecraze.net/html/volia/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 09:02:31 GMT -->
</html>