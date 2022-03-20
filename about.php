<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Door to Door Delivery</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

     <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a href="index.php"><img src="img/core-img/img1.png" alt=""></a>
                        </div>
						<div class="top-contact-info d-flex align-items-center"><h4>
							<?php session_start();
                            if(isset($_SESSION["username"]))
							{
								echo "Welcome ".$_SESSION['username']." !..";
							}?> </h4></div>
                        <!-- Top Contact Info -->
                        <div class="top-contact-info d-flex align-items-center">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="D2d, KEC nagar, Near kongu engineering college, Perundurai, Erode"><img src="img/core-img/placeholder.png" alt=""> <span>D2d, KEC nagar, Erode.</span></a>
                            <a href="mailto:techsquadkec@gmail.com" data-toggle="tooltip" data-placement="bottom" title="techsquadkec@gmail.com"><img src="img/core-img/message.png" alt=""> <span>techsquadkec@gmail.com</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="creditNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    
                                    <li><a href="Drivers.php">Transporter</a></li>
                                   
                                    <li><a href="customer.php">Customer</a></li>
                                    <li><a href="#contact">Contact Us</a></li>
                                   
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div> 

                        <!-- Contact -->
                        <div class="contact">
							<?php 
							if(isset($_SESSION["username"]))
							{
                           echo "<a href='../registeration-login-system-master/logout.php'><img src='img/core-img/call3.png' alt=''> Logout</a>";
							}
							else
							{
								 echo "<a href='../registeration-login-system-master/registration.php'><img src='img/core-img/call3.png' alt=''> Signup</a> / <a href='../registeration-login-system-master/login.php'>Login</a>";
						     
							}?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>About us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### About Area Start ###### -->
    <section class="about-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="about-content mb-100">
                        <!-- Section Heading -->
                        <div class="section-heading">
                            <div class="line"></div>
                            <p>Take look at our</p>
                            <h2>About our company</h2> 
                        </div>
                        <h6 class="mb-4">OUR MISSION </h6>
                        <p class="mb-0">We are committed to deliver cost-effective, error-free, timely and superior logistics solutions to our clients continuously through the use of latest technology, industry expertise and innovation.
                            Our aim is to emerge as the most preferred choice for clients, employees and associates across the world and also support the freelance drivers to deliver goods.</p>
                       
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="about-thumbnail mb-100">
                        <img src="img/bg-img/ship.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ##### Call To Action Start ###### -->
    <section class="cta-2-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Cta Content -->
                    <div class="cta-content d-flex flex-wrap align-items-center justify-content-between">
                        <div class="cta-text">
                            <h4>Want to join us a driving partner?</h4>
                         
                        </div>
                        <div class="cta-btn">
                            <a href="Drivers.html" class="btn credit-btn box-shadow">Know More!!!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action End ###### -->

    <!-- ##### Team Member Area Start ##### -->
    <section class="team-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center mb-100">
                        <div class="line"></div>
                        <p>Take look at our</p>
                        <h2>Our team</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member-area mb-100">
                        <div class="team-thumb">
                            <img src="img/bg-img/15.jpg" alt="">
                            <!-- View More -->
                            <div class="view-more">
                                <a href="#">+</a>
                            </div>
                        </div>
                        <div class="team-info">
                            <h5>Monisha</h5>
                            <h6>Developer</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member-area mb-100">
                        <div class="team-thumb">
                            <img src="img/bg-img/16.jpg" alt="">
                            <!-- View More -->
                            <div class="view-more">
                                <a href="#">+</a>
                            </div>
                        </div>
                        <div class="team-info">
                            <h5>Krithika Tharani</h5>
                            <h6>Developer</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member-area mb-100">
                        <div class="team-thumb">
                            <img src="img/bg-img/17.jpg" alt="">
                            <!-- View More -->
                            <div class="view-more">
                                <a href="#">+</a>
                            </div>
                        </div>
                        <div class="team-info">
                            <h5>Mathiarasi</h5>
                            <h6>Developer</h6>
                        </div>
                    </div>
                </div>

                <!-- Single Team Member Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-team-member-area mb-100">
                        <div class="team-thumb">
                            <img src="img/bg-img/18.jpg" alt="">
                            <!-- View More -->
                            <div class="view-more">
                                <a href="#">+</a>
                            </div>
                        </div>
                        <div class="team-info">
                            <h5>Naishad</h5>
                            <h6>Developer</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Team Member Area End ##### -->
    <section class="credit-faq-area s" style="background-color: lightpink;">
        <div class="container"  >
            <div class="row">
                <!-- FAQ Area -->
               

                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">what is logistic management?
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseOne" class="accordion-content collapse show">
                                <p>Logistics management is a function where a company usually consisting of various shipping and distribution professionals provide services to analyze a company’s supply chain, offer carrier and service options, and provide continued management of all or some areas of a customer’s transportation needs. </p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">I'm a small start-up can Door to Door support me?
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseTwo" class="accordion-content collapse">
                                <p>Yes, we love working with small and emerging companies. Door to Door provides the expertise and support to help your company scale. </p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">WHAT TECHNOLOGY CAN Door to Door PROVIDE US?

                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseThree" class="accordion-content collapse">
                                <p>We offer top-notch technology solutions to handle your freight, small parcel, and E-commerce needs. Each system gives you full visibility and the tools to best manage your shipping. Request a demo so we can show you how easy it is </p>
                            </div>
                        
                    </div>
                     <!-- single accordian area -->
                     <div class="panel single-accordion">
                        <h6>
                            <a role="button" aria-expanded="true" aria-controls="collapseFour" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseFour">I ALREADY HAVE STRONG SERVICE PROVIDERS DOOR TO DOOR STILL HELP ME?
                                

                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                </a>
                        </h6>
                        <div id="collapseFour" class="accordion-content collapse">
                            <p>Yes, not only do we offer the services of our quality partners, but we can help manage your existing transportation network. At times, we may offer to blend in alternative options if beneficial.</p>
                        </div>
                
                </div>
                 <!-- single accordian area -->
                 <div class="panel single-accordion">
                    <h6>
                        <a role="button" aria-expanded="true" aria-controls="collapseFive" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseFive">DOES IT COST ANYTHING TO DO A FULL ANALYSIS OF OUR SUPPLY CHAIN SERVICES?
                            

                                <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            </a>
                    </h6>
                    <div id="collapseFive" class="accordion-content collapse">
                        <p>No, we do not charge for our initial analysis. There is absolutely nothing to lose by having our expert logistics professionals review your shipping and distribution spend and profile. In most cases we are compensated by our providers should you utilize our services</p>
                    </div>
                
            </div>
         
         <div class="panel single-accordion">
            <h6>
                <a role="button" aria-expanded="true" aria-controls="collapseSix" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseSix">WHAT TECHNOLOGY CAN Door to Door PROVIDE US?

                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                    </a>
            </h6>
            <div id="collapseSix" class="accordion-content collapse">
                <p>We offer top-notch technology solutions to handle your freight, small parcel, and E-commerce needs. Each system gives you full visibility and the tools to best manage your shipping. Request a demo so we can show you how easy it is </p>
            </div>
        
    </div>
                

             
                </div> 
            </div>
        </div>
    </section>
    <!-- ##### FAQ Area End ###### -->
    <!-- ##### Newsletter Area Start ###### -->
   

    <section class="newsletter-area section-padding-100 bg-img jarallax" style="background-image: url(img/bg-img/6.jpg);">
        <div class="container" style="color: whitesmoke;">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-lg-8">
                    <div class="nl-content text-center">
                        <h2>Subscribe to our newsletter</h2>
                        <form action="#" method="post">
                            <input type="email" name="nl-email" id="nlemail" placeholder="Your e-mail">
                            <button type="submit">Subscribe</button>
                        </form>
                       
                    </div>
                </div>
            </div>
            <div class="row" id= contact>
                <div class="col-md-6 col-xl-4">
                    <div class="single-widget contact-widget" data-aos="fade-up" data-aos-delay="0">
                        <h5 class="widget-tiltle" id="CONTACT" style="color: orange">Contact details</h5>
                        <p  style="color: whitesmoke;">By subscribing to our mailing list you will always be update with the latest news from
                            us.
                        </p>
                        <div class="media">
                            <i><img src="img/core-img/location.png" alt=""></i>
                            <div class="media-body ml-3">
                                <h6  style="color: orange">Address</h6>
                                <a>D2d, KEC Nagar,vNear Kongu Engineering college<br>
                                Perundurai,Erode (dist.),TamilNadu, India</a>
                            </div>
                        </div>
                        <div class="media">
                            <i class="fa fa-envelope-o"></i>
                            <div class="media-body ml-3">
                                <h6 style="color: orange" >Have any questions?</h6>
                                <a href="mailto:techsquadkec@gmail.com" style="color: whitesmoke;">d2d.queries@gmail.com</a>
                            </div>
                        </div>
                        <div class="media">
                            <i > <img src="img/core-img/call.png" alt=""></i>
                            <div class="media-body ml-3">
                                <h6 style="color: orange">Call us & Hire us</h6>
                                <a href="tel:+91 7402410785" style="color: whitesmoke;"> +91 7402410785</a>
                            </div>
                        </div>
                        <div class="media">
                            <i><img src="img/core-img/message2.png" alt=""></i>
                            <div class="media-body ml-3">
                                <h6 style="color: orange">Whatsapp</h6>
                                <a href="fax:911889047521432" style="color: whitesmoke;">+91 9999888776</a>
                            </div>
                        </div>


                                           <!--# start of that icon# -->
                                           <br><br>
                                           <div class="span6 widget-span widget-type-cell footer-listing-content"  data-widget-type="cell" data-x="6" data-w="6">
                        
                                            <div class="row-fluid-wrapper row-depth-2 row-number-6 ">
                                            <div class="row-fluid ">
                                            <div class="span12 widget-span widget-type-custom_widget goo_mob"  data-widget-type="custom_widget" data-x="0" data-w="12">
                                            <div id="hs_cos_wrapper_module_1559304490995382" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_module widget-type-linked_image"  data-hs-cos-general-type="widget" data-hs-cos-type="module">
                                            
                                            <span id="hs_cos_wrapper_module_1559304490995382_" class="hs_cos_wrapper hs_cos_wrapper_widget hs_cos_wrapper_type_linked_image"  data-hs-cos-general-type="widget" data-hs-cos-type="linked_image"><a href="https://itunes.apple.com/in/app/lalamove-india/id1445657185?mt=8" target="_blank" id="hs-link-module_1559304490995382_" style="border-width:0px;border:0px;"><img src="https://www.lalamove.com/hubfs/Lalamove%20Jan%202019/images/footer/app-store.svg" class="hs-image-widget " width="161" height="57" alt="app-store" title="app-store"></a></span>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                    
                    
                    
                                        <!--#  of that icon# -->
                    </div>
                </div>
                <div class="col-md-6 col-xl-5">
                    <div class="single-widget twitter-widget" data-aos="fade-up" data-aos-delay="200">
                        <h5 class="widget-tiltle" style="color: orange">Customer Ratings</h5>
                        <div class="media">
                            <i class="fa fa-comments-o" style="font-size:25px;color:wheat"></i>
                            <div class="media-body ml-3">
                                <h6 ><a href="#" style="color: orange"><p>@Jeff Bezos,</a>1hr ago</p></h6>
                                <span><b>One of the best delivery services i have ever met. Its a great idea I think before 2025, this company would become a huge success. </span></b>
                            </div>
                        </div>
                        <div class="media">
                            <i class="fa fa-comments-o" style="font-size:25px;color:wheat"></i>
                            <div class="media-body ml-3">
                                <h6 ><a href="#" style="color: orange"><p>@Ratan Tata,</a>3hr ago</p></h6>
                            <b><span>I really loved their service. You won't be paranoid or anxious because you'll get the progress and update of your package. From delivery to delivery. They have approachable staff, too!.</span></b>
                            </div>
                        </div>
                        <div class="media">
                            <i class="fa fa-comments-o" style="font-size:25px;color:wheat"></i>
                            <div class="media-body ml-3">
                                <h6 ><a href="#" style="color: orange"><p>@Elon Musk,</a>19hrs ago</p></h6>
                            <b><span>Great service. The parcel was collected and delivered well within the timescales and the tracking made it easy to follow. </span></b>
                            </div>
                        </div>
                        <div class="media">
                            <i class="fa fa-comments-o" style="font-size:25px;color:wheat"></i>
                            <div class="media-body ml-3">
                                <h6 ><a href="#" style="color: orange"><p>@sundar pitchai,</a>2days ago</p></h6>
                            <b><span>Man picked up a parcel and delivered my parcel all in one, well-coordinated and excellent service. Delivery was on time also. Well done.                            </span></b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                        
                    <div class="single-footer-widget mb-100">
                        <h5 class="widget-title" style="color: orange">Pages</h5>
                        <!-- Nav -->
                        
                            <ul >
                                <li><a style="color:burlywood; font-size: medium;" href="#">Homepage</a></li>
                                <li><a style="color:burlywood; font-size: medium;" href="#">About Us</a></li>
                                <li><a  style="color:burlywood; font-size: medium;" href="#">Deliver</a></li>
                                <li><a  style="color:burlywood; font-size: medium;" href="#">Carrier</a></li>
                                <li><a style="color:burlywood; font-size: medium;" href="#">Contacts</a></li>
                    </div>      
                    <div>
                        <img src=img/bg-img/sum.png>

                    </div>  

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Newsletter Area End ###### -->
 

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        
        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
              panel.style.display = "none";
            } else {
              panel.style.display = "block";
            }
          });
        }
        </script>


<!-- Start of ChatBot (www.chatbot.com) code -->
<script type="text/javascript">
    window.__be = window.__be || {};
    window.__be.id = "607559d520327f0007eb940a";
    (function() {
        var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
        be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.chatbot.com/widget/plugin.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(be, s);
    })();
</script>
<!-- End of ChatBot code -->
</body>

</html>