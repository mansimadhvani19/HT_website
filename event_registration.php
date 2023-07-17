<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themecraze.net/html/volia/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 09:02:44 GMT -->
<head>
<meta charset="utf-8">
<title>Login</title>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
    function pay_now(event) {
        event.preventDefault();
        var form = document.getElementById('paymentForm');
        var requiredFields = form.querySelectorAll('input[required], select[required]');
        var isFormValid = true;

        for (var i = 0; i < requiredFields.length; i++) {
            if (!requiredFields[i].value) {
                isFormValid = false;
                break;
            }
        }

        if (isFormValid) {
            
            // var name = jQuery('#name').val();
            var amt = 1;
            // var event = jQuery('#category_km').val();
            var name = jQuery('#name').val();
            var email = jQuery('#email').val();
            var phone = jQuery('#phone').val();
            var blood_group = jQuery('#blood_group').val();
            var gender = jQuery('#gender').val();
            var tshirt_size = jQuery('#tshirt_size').val();
            var address1 = jQuery('#address1').val();
            var address2 = jQuery('#address2').val();
            var city = jQuery('#city').val();
            var state = jQuery('#state').val();
            var country = jQuery('#country').val();
            var pin_code = jQuery('#pin_code').val();
            var category_km = jQuery('#category_km').val();
            var emergency_contact_name= jQuery('#emergency_contact_name').val();
            var emergency_contact_number= jQuery('#emergency_contact_number').val();
            var organizer_name = jQuery('#organizer_name').val();
            var reference = jQuery('#reference').val();
            var discount_code = jQuery('#discount_code').val() || null;

            jQuery.ajax({
                type:'post',
                url:'payment_process.php',
                data:"&name="+name+"&email="+email+"&phone="+phone+"&blood_group="+blood_group+"&gender="+gender+"&tshirt_size="+tshirt_size+"&address1="+address1+"&address2="+address2+"&city="+city+"&state="+state+"&country="+country+"&pin_code="+pin_code+"&category_km="+category_km+"&emergency_contact_name="+emergency_contact_name+"&emergency_contact_number="+emergency_contact_number+"&organizer_name="+organizer_name+"&reference="+reference+"&discount_code="+discount_code,
                success:function(result){
                    var options = {
                            "key": "rzp_live_oxEIUm87gzZfhu", 
                            "amount": amt*100, 
                            "currency": "INR",
                            "name": "Happy Team",
                            "description": event,
                            "image": "https://happyteam.co.in/images/CV%20RFGBFV.png",
                            "handler": function (response){
                            jQuery.ajax({
                                type:'post',
                                url:'payment_process.php',
                                data:"payment_id="+response.razorpay_payment_id,
                                success:function(result){
                                    window.location.href="payment_success.php";
                                }
                            });
                            }
                        };
                        var rzp1 = new Razorpay(options);
                        rzp1.open();
                }
            });

        }
    }
</script>
</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
     <!-- Main Header-->
     <?php include 'header.php'; ?>
    <!--End Main Header -->
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
                <li><i class="flaticon-location"></i>A-838 Sun Westbank,Ahmedabad <strong>Address</strong></li>
                <li><i class="flaticon-alarm-clock-1"></i>Monday - Friday 10am - 6pm <strong>Timing</strong></li>
                <li><i class="flaticon-email-1"></i> <a href="mailto:ask@happyteam.co.in">ask@happyteam.co.in</a> <strong>Mail to us</strong></li>
            </ul>
        </div>
    </section>
    <!--End Hidden Bar -->

    <!--Page Title-->
    <section class="page-title" style="background-image: url(images/background/11.jpg);">
        <div class="anim-icons full-width">
            <span class="icon icon-bull-eye"></span>
            <span class="icon icon-dotted-circle"></span>
        </div>
        <div class="auto-container">
            <div class="title-outer">
                <h1>Registration</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Register Now</li>
                </ul> 
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Register Section-->
    <section class="register-section">
        <div class="auto-container">
            <form id="paymentForm" action="" method="POST" onsubmit="pay_now(event)">
                <div class="row clearfix">
                    <div class="sec-title">
                        <h2>Event Registration</h2>
                        <div class="separate"></div>
                        <?php
                                // session_start();
                                $message ="";
                                if(isset($_GET['err'])){
                                    $message = $_GET['err'];
                                    echo '<div class = "alert alert-danger">'.$message.'</div>';
                                }
                            ?>
                    </div>
                    <!--Form Column-->
                    <div class="form-column column col-lg-6 col-md-12 col-sm-12">
                    
                        
                        <!--Login Form-->
                        <div class="styled-form address-form">
                            <form method="post" action="">
                                <div class="sec-title">
                                    <h6>Personal Details</h6>
                                    <div class="separate"></div>
                                </div>
                                <div class="form-group">
                                    <span class="adon-icon"><span class="fa fa-user"></span></span>
                                    <input type="text" name="name" id="name" value="" placeholder="Enter your Name *" required>
                                </div>
                                <div class="form-group">
                                    <span class="adon-icon"><span class="fa fa-envelope"></span></span>
                                    <input type="email" name="email" id="email" value="" placeholder="Enter your Email ID*" required>
                                </div>
                                <div class="form-group">
                                    <span class="adon-icon"><span class="fa fa-phone"></span></span>
                                    <input type="text" name="phone" id="phone" value="" placeholder="Enter phone number*" required>
                                </div>
                                <div class="form-column">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="add-form">
                                                <div class="form-group">
                                                    <span class="adon-icon"><span class="fa fa-heart"></span></span>
                                                    <select name="blood_group" id="blood_group" required>
                                                        <option value="">Select blood group*</option>
                                                        <option value="A+">A+</option>
                                                        <option value="A-">A-</option>
                                                        <option value="B+">B+</option>
                                                        <option value="B-">B-</option>
                                                        <option value="AB+">AB+</option>
                                                        <option value="AB-">AB-</option>
                                                        <option value="O+">O+</option>
                                                        <option value="O-">O-</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="add-form">
                                                <div class="form-group">
                                                    <span class="adon-icon"><span class="fa fa-venus-mars"></span></span>
                                                    <select name="gender" id="gender" required>
                                                        <option value="">Select gender*</option>
                                                        <option value="male">Male</option>
                                                        <option value="female">Female</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <span class="adon-icon"><span class="fa fa-tshirt"></span></span>
                                    <input type="text" name="tshirt_size" id="tshirt_size" value="" placeholder="Enter t-shirt size*" required>
                                </div>

                                <div class="sec-title">
                                    <h6>Address</h6>
                                    <div class="separate"></div>
                                </div>

                                <div class="form-column">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="add-form">
                                                <div class="form-group">
                                                    <span class="adon-icon"><span class="fa fa-map-marker"></span></span>
                                                    <input type="text" name="address1" id="address1" value="" placeholder="Address line 1*" required>
                                                </div>
                                                <div class="form-group">
                                                    <span class="adon-icon"><span class="fa fa-map-marker"></span></span>
                                                    <input type="text" name="address2" id="address2" value="" placeholder="Address line 2*" required>
                                                </div>
                                                <div class="form-group">
                                                    <span class="adon-icon"><span class="fa fa-map-marker"></span></span>
                                                    <input type="text" name="city" id="city" value="" placeholder="City*" required>
                                                </div>
                                                <!-- <div class="form-group">
                                                    <span class="adon-icon"><span class="fa fa-map-marker"></span></span>
                                                    <input type="text" name="state" value="" placeholder="State*" required>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="add-form">
                                                <!-- <div class="form-group">
                                                    <span class="adon-icon"><span class="fa fa-map-marker"></span></span>
                                                    <input type="text" name="address2" value="" placeholder="Address line 2*" required>
                                                </div> -->
                                                <div class="form-group">
                                                    <span class="adon-icon"><span class="fa fa-map-marker"></span></span>
                                                    <input type="text" name="state" id="state" value="" placeholder="State*" required>
                                                </div>
                                                <div class="form-group">
                                                    <span class="adon-icon"><span class="fa fa-globe"></span></span>
                                                    <input type="text" name="country" id="country" value="" placeholder="Country*" required>
                                                </div>
                                                <div class="form-group">
                                                    <span class="adon-icon"><span class="fa fa-map-pin"></span></span>
                                                    <input type="text" name="pin_code" id="pin_code" value="" placeholder="PIN Code*" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <!-- Closing tag for the main form -->
                        </form>
                    </div>
                        
                    </div>
                    
                    <!--Form Column-->
                    <div class="form-column column col-lg-6 col-md-12 col-sm-12">
                        <div class="sec-title">
                            <h6>Emergency contact details</h6>
                            <div class="separate"></div>
                        </div>

                        <div class="styled-form register-form">
                            <form method="post" action="">
                                <div class="form-group">
                                    <span class="adon-icon"><span class="fa fa-user-plus"></span></span>
                                    <input type="text" name="emergency_contact_name" id="emergency_contact_name" value="" placeholder="Emergency contact name *" required>
                                </div>
                                <div class="form-group">
                                    <span class="adon-icon"><span class="fa fa-phone"></span></span>
                                    <input type="text" name="emergency_contact_number" id="emergency_contact_number" value="" placeholder="Emergency contact number*" required>
                                </div>
                                <div class="sec-title">
                                    <h6>Event details</h6>
                                    <div class="separate"></div>
                                </div>
                                <div class="form-group">
                                    <span class="adon-icon"><span class="fa fa-info-circle"></span></span>
                                    <input type="text" name="category_km" id="category_km" value="" placeholder="Enter category*" required>
                                </div>
                                <div class="form-group">
                                    <span class="adon-icon"><span class="fa fa-building"></span></span>
                                    <input type="text" name="organizer_name" id="organizer_name" value="" placeholder="Enter organizer*" required>
                                </div>
                                <div class="form-group">
                                    <span class="adon-icon"><span class="fa fa-refer-by"></span></span>
                                    <input type="text" name="reference" id="reference" value="" placeholder="Referred by*" required>
                                </div>
                                <div class="form-group">
                                    <span class="adon-icon"><span class="fa fa-ticket-alt"></span></span>
                                    Have a discount coupon?
                                    <input type="text" name="discount_code" id="discount_code" value="" placeholder="Enter code">
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <div class="clearfix">
                        <div class="form-group pull-left">
                        <!-- <input type="submit" id="payNowButton" value="Pay Now" disabled> -->
                        <!-- <button onclick="showPicture()">Enlarge</button> -->
                            <!-- <img id="bigpic" src="images/razorpay_qr_code.jpg" /> -->
                            <!-- <input type="button" name="btn" id="btn" value="Pay Now" onclick="pay_now()"/> -->
                            <button type="submit" class="theme-btn btn-style-one" id = 'payNowButton' onclick="pay_now()"><span class="btn-title">Pay Now</span></button>
                        </div>
                    </div>                 
                </div>
            </form>
        </div>
    </section>
    <!--End Register Section -->
    
    <!-- Subscribe Section Two -->
    <section class="subscribe-section-two">
        <div class="auto-container">
            <div class="content-box">
                <div class="sec-title text-center light">
                    <span class="sub-title">Get The Latest Updates</span>
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
                                                    A-838 sun westbank.Ahmedabad
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
            <div class="copyright-text">Copyright © 2023 All Rights Reserved by <a href="gallery.php">Happy Team</a></div>
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
<script src="js/jquery.bootstrap-touchspin.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Color Setting -->
<script src="js/color-settings.js"></script>
 
</body>

<!-- Mirrored from themecraze.net/html/volia/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 31 May 2023 09:02:44 GMT -->
</html>