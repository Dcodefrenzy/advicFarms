<?php 
  $blog = fetchBlog($conn);
 $project = viewLatestProject($conn);
    extract($project);
 ?>

<!-- RD Navbar Nav--><!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  
<!-- Mirrored from livedemo00.template-help.com/wt_prod-3849/home-classic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Jul 2018 19:31:26 GMT -->
<head>
    <!-- Site Title-->
    <title>Home Classic</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CLato:400,400i,700">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Page-->
    <div class="text-center text-sm-left page">
      <!-- Page preloader-->
      <div class="preloader">
        <div>
          <div class="preloader-body">
            <div class="loader"><span class="block-1"></span><span class="block-2"></span><span class="block-3"></span><span class="block-4"></span><span class="block-5"></span><span class="block-6"></span><span class="block-7"></span><span class="block-8"></span><span class="block-9"></span><span class="block-10"></span><span class="block-11"></span><span class="block-12"></span><span class="block-13"></span><span class="block-14"></span><span class="block-15"></span><span class="block-16"></span></div>
          </div>
        </div>
      </div>
      <!-- Page Header-->
      <header class="page-header header-classic">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fullwidth" data-lg-device-layout="rd-navbar-fullwidth" data-md-stick-up-offset="73px" data-lg-stick-up-offset="93px" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true" data-lg-stick-up="true">
            <div class="rd-navbar-collapse-toggle" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer">
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><a class="brand-name" href="index-2.html"><img class="desktop-element" src="images/logo-default-228x39.png" alt="" width="228" height="39"/><img class="mobile-element" src="images/logo-var3-227x40.png" alt="" width="227" height="40"/></a></div>
              </div>
              <div class="rd-navbar-aside rd-navbar-collapse">
                <address class="contact-info">
                  <ul class="list-address">
                    <li>
                      <div class="unit unit-middle unit-spacing-icon unit-horizontal">
                        <div class="unit__left"><span class="icon icon-md icon-primary-dark fa-phone"></span></div>
                        <div class="unit__body list-tel">
                          <div class="p tel"><a href="tel:#">1 (800) 123 1234</a></div>
                          <div class="p tel"><a href="tel:#">1 (800) 123 1235</a></div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-middle unit-spacing-icon unit-horizontal">
                        <div class="unit__left"><span class="icon icon-md icon-primary-dark fa-home"></span></div>
                        <div class="unit__body"><a class="text-middle address" href="contacts.html">227 Marion Street,<br>Columbia, SC 29201</a></div>
                      </div>
                    </li>
                    <li>
                      <div class="unit unit-middle unit-spacing-icon unit-horizontal">
                        <div class="unit__left"><span class="icon icon-md icon-primary-dark fa-clock-o"></span></div>
                        <div class="unit__body">
                          <div class="p">Mon - Sat 8.00 - 18.00</div>
                          <div class="p">Sunday CLOSED</div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="list-inline mobile-element">
                    <li><a class="fa fa-facebook text-white" href="#"></a></li>
                    <li><a class="fa fa-google-plus text-white" href="#"></a></li>
                    <li><a class="fa fa-linkedin text-white" href="#"></a></li>
                    <li><a class="fa fa-twitter text-white" href="#"></a></li>
                  </ul>
                </address>
              </div>
            </div>
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-aside-wrap">
                <div class="rd-navbar-nav-wrap">
                  <!-- [ start, end )-->
                  <ul class="rd-navbar-nav">
                    <li class=""><a href="index">Home
                        <svg class="button-santos" xmlns="http://www.w3.org/2000/svg" shape-rendering="crispEdges">
                          <rect class="shape" width="100%" height="100%" x="0" y="0"></rect>
                        </svg></a>
                    </li>
                    <li><a href="about">About us
                        <svg class="button-santos" xmlns="http://www.w3.org/2000/svg" shape-rendering="crispEdges">
                          <rect class="shape" width="100%" height="100%" x="0" y="0"></rect>
                        </svg></a>

                    </li>
                    <li><a href="services">Services
                        <svg class="button-santos" xmlns="http://www.w3.org/2000/svg" shape-rendering="crispEdges">
                          <rect class="shape" width="100%" height="100%" x="0" y="0"></rect>
                        </svg></a>
                    </li>
                    <li><a href="blog">Blog
                        <svg class="button-santos" xmlns="http://www.w3.org/2000/svg" shape-rendering="crispEdges">
                          <rect class="shape" width="100%" height="100%" x="0" y="0"></rect>
                        </svg></a>
                    </li>
                    <li><a href="project">Projects
                        <svg class="button-santos" xmlns="http://www.w3.org/2000/svg" shape-rendering="crispEdges">
                          <rect class="shape" width="100%" height="100%" x="0" y="0"></rect>
                        </svg></a>
                    </li>
                    <li><a href="#">Shop
                        <svg class="button-santos" xmlns="http://www.w3.org/2000/svg" shape-rendering="crispEdges">
                          <rect class="shape" width="100%" height="100%" x="0" y="0"></rect>
                        </svg></a>
                      <!-- RD Navbar Dropdown-->
                      <ul class="rd-navbar-dropdown">
                        <li><a href="category">We Sell</a></li>
                        <li><a href="estimate">We Buy</a></li>
                      </ul>
                    </li>
                    <li><a href="contact">Contacts
                        <svg class="button-santos" xmlns="http://www.w3.org/2000/svg" shape-rendering="crispEdges">
                          <rect class="shape" width="100%" height="100%" x="0" y="0"></rect>
                        </svg></a>
                    </li>
                  </ul>
                </div>
                <ul class="list-inline desktop-element">
                  <li><a class="fa fa-facebook text-white" href="#"></a></li>
                  <li><a class="fa fa-google-plus text-white" href="#"></a></li>
                  <li><a class="fa fa-linkedin text-white" href="#"></a></li>
                  <li><a class="fa fa-twitter text-white" href="#"></a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <section class="swiper-classic swiper-custom-container swiper-custom-nav">
        <!-- Swiper-->
        <div class="swiper-container swiper-slider swiper-bg swiper-scale-effect" data-loop="true" data-autoplay="4000" data-slide-effect="fade" data-simulate-touch="false">
          <div class="swiper-wrapper">
            <div class="swiper-slide" data-slide-bg="images/swiper1-slide1-1920x764.jpg">
              <div class="swiper-slide-cover" style="background: url(images/swiper1-slide1-1920x764.jpg) center; background-size: cover;"></div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/swiper1-slide2-1920x764.jpg">
              <div class="swiper-slide-cover" style="background: url(images/swiper1-slide2-1920x764.jpg) center; background-size: cover;"></div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/swiper1-slide3-1920x764.jpg">
              <div class="swiper-slide-cover" style="background: url(images/swiper1-slide3-1920x764.jpg) center; background-size: cover;"></div>
            </div>
          </div>
        </div>
        <div class="swiper-bg-content">
          <div class="swiper-slide-caption">
            <div class="swiper-slide-content">
              <div class="shell">
                <div class="range">
                  <div class="cell-xs-12">
                    <h6>Welcome To Advic Farms</h6>
                    <h2><span class="icon icon-xmd fl-great-icon-set-mobile226"></span><a href="tel:#">+1 (800) 123 1264</a></h2>
                    <div class="group-xs"><a class="button button-md button-primary" href="category">Our Products<span class="icon-arrow icon-rotate-90 material-icons-keyboard_backspace"></span></a><a class="button button-md button-primary-dark" href="services">Our services<span class="icon-arrow icon-rotate-90 material-icons-keyboard_backspace"></span></a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="shell box-nav box-nav-small box-nav__classic">
          <!--Created by ragnar on 8/22/2018.
          -->
          <!-- Swiper Navigation-->
          <div class="swiper-button-prev">
            <!--Created by ragnar on 8/22/2018.
            --><span class="icon-arrow material-icons-keyboard_backspace"></span>
          </div>
          <div class="wrap-counter">
            <!-- Swiper Pagination-->
            <div class="swiper-pagination"></div>
            <div class="divider-counter">/</div>
            <div class="total-counter">03</div>
          </div>
          <!-- Swiper Navigation-->
          <div class="swiper-button-next">
            <!--Created by ragnar on 8/22/2018.
            --><span class="icon-arrow material-icons-keyboard_backspace"></span>
          </div>
        </div>
      </section>
      <section class="section-lg bg-gray-3 section-relative index-2">
        <div class="shell">
          <div class="range range-50 range-center">
            <div class="cell-md-7">
              <h3 class="text-width-small">INDUSTRY-LEADING Expertise & Consistent Customer Satisfaction</h3>
              <p class="offset-top-28">Beautiful lawn is an industry-leading landscaping, lawn care, and snow removal company. We have established a proven system that allows us to provide exceptional grounds care services and customized lawn solutions to both commercial and residential clients. Our business model is built on a culture of care and we are dedicated to complete customer satisfaction. We are focused on delivering quality results that exceed your expectations!</p>
              <div class="range range-30 range-center range-lg-left">
                <div class="cell-lg-5 cell-sm-6 cell-xs-10 wow fadeInUp" data-wow-delay=".1s">
                  <div class="unit unit-spacing-icon unit-sm-horizontal">
                    <div class="unit__left"><span class="icon-primary icon-sm fl-great-icon-set-alarm49"></span></div>
                    <div class="unit__body">
                      <div class="box-icon-content">
                        <div class="heading-6 text-primary">Anywhere, Anytime</div>
                        <p>Beautiful Lawn Mowing comes to you at your premises be it a home or business.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cell-sm-6 cell-xs-10 wow fadeInUp" data-wow-delay=".2s">
                  <div class="unit unit-spacing-icon unit-sm-horizontal">
                    <div class="unit__left"><span class="icon-primary icon-sm fl-great-icon-set-credit95"></span></div>
                    <div class="unit__body">
                      <div class="box-icon-content">
                        <div class="heading-6 text-primary">Value For Money</div>
                        <p>Our goal is to always provide a value for money service which appeals to people from all walks of life.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cell-lg-5 cell-sm-6 cell-xs-10 wow fadeInUp" data-wow-delay=".3s">
                  <div class="unit unit-spacing-icon unit-sm-horizontal">
                    <div class="unit__left"><span class="icon-primary icon-sm fl-great-icon-set-favorites5"></span></div>
                    <div class="unit__body">
                      <div class="box-icon-content">
                        <div class="heading-6 text-primary">Excellent Service</div>
                        <p>We provide our clients with service of exceptional quality to satisfy their lawn care needs.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cell-sm-6 cell-xs-10 wow fadeInUp" data-wow-delay=".4s">
                  <div class="unit unit-spacing-icon unit-sm-horizontal">
                    <div class="unit__left"><span class="icon-primary icon-sm fl-great-icon-set-like77"></span></div>
                    <div class="unit__body">
                      <div class="box-icon-content">
                        <div class="heading-6 text-primary">100% Satisfaction Guaranteed!</div>
                        <p>If for any reason you are disappointed with our service, we will quickly re - perform the service to your liking.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="cell-md-5 wow fadeInUp" data-wow-delay=".1s">
              <div class="offset-negative-lg-top-154">
                <div class="form-request form-request-inset box-shadow-var-2">
                  <h4>Request an estimate</h4>
                  <!-- RD Mailform-->
                  <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="forms" method="post" action="https://livedemo00.template-help.com/wt_prod-3849/bat/rd-mailform.php">
                    <div class="form-wrap">
                      <label class="form-label" for="form-login-name-3">Your name</label>
                      <input class="form-input" id="form-login-name-3" type="text" name="name" data-constraints="@Required">
                    </div>
                    <div class="form-wrap">
                      <label class="form-label" for="form-email-2">Your email</label>
                      <input class="form-input" id="form-email-2" type="email" name="email" data-constraints="@Email @Required">
                    </div>
                    <div class="form-wrap">
                      <!--Select 2-->
                      <select class="form-control select-filter" data-minimum-results-for-search="Infinity" data-constraints="@Required">
                        <option value="1">Landscape maintenance</option>
                        <option value="2">Garden Maintenance</option>
                        <option value="3">Lawn Mowing</option>
                        <option value="4">Outdoor Lighting</option>
                        <option value="5">Ice Removal</option>
                      </select>
                    </div>
                    <div class="form-wrap">
                      <label class="form-label" for="form-message-2">Message</label>
                      <textarea class="form-input" id="form-message-2" name="message" data-constraints="@Required"></textarea>
                    </div>
                    <div class="form-wrap text-right">
                      <button class="button button-primary" type="submit">Request a quote<span class="icon-arrow icon-rotate-90 material-icons-keyboard_backspace"></span></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-md bg-white section-relative index-3">
        <div class="shell">
          <div class="range range-50 range-center">
            <div class="cell-lg-7 cell-md-6 cell-sm-10">
              <div class="offset-negative-lg-top-140">
                <div class="box-project box-project__classic context-dark">
                  <div class="box-project-overlay"><a href=<?php echo "projectView?hid=$id"; ?>><div  style="background:url(<?php echo $image_1 ?>); height:500px; width: 500px; background-size: cover; background-position: center; background-repeat: no-repeat;" class=""> </div></a>
                  </div>
                  <div class="box-project-body">
                    <h4>Latest project</h4><a class="button button-custom button-md button-primary arrow-bottom" href="<?php echo "projectView?hid=$id"; ?>"> <?php echo $project_name; ?><span class="text-small"><?php  echo $project_location; ?></span><span class="icon-arrow icon-rotate-90 material-icons-keyboard_backspace"></span></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="cell-lg-5 cell-md-6 cell-sm-10">
              <ul class="list list-letters inset-left-lg-45">
                <li class="wow fadeInRight" data-wow-delay=".1s"><span class="list-index-counter"></span><span class="list-letters-content"><span class="heading-5">Lawn Care</span><span class="p big"><?php $bd = previewBody($about, 50); echo $bd; ?></span></span></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="section-md bg-white">
        <div class="shell">
          <div class="range range-30 range-sm-50 range-center">
            <!-- Counters-->
            <div class="cell-xs-6 cell-md-5 cell-lg-3">
              <div class="box-counter box-counter-classic">
                <div class="counter" data-speed="1000">987</div>
                <p class="box-counter-title">Residential projects</p>
              </div>
            </div>
            <div class="cell-xs-6 cell-md-5 cell-lg-3">
              <div class="box-counter box-counter-classic">
                <div class="counter" data-speed="1000">15</div>
                <p class="box-counter-title">Years in business</p>
              </div>
            </div>
            <div class="cell-xs-6 cell-md-5 cell-lg-3">
              <div class="box-counter box-counter-classic">
                <div class="counter" data-speed="1000">632</div>
                <p class="box-counter-title">Commercial objects</p>
              </div>
            </div>
            <div class="cell-xs-6 cell-md-5 cell-lg-3">
              <div class="box-counter box-counter-classic">
                <div class="counter" data-speed="1000">374</div>
                <p class="box-counter-title">Acres maintained</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-md parallax-container text-center" data-parallax-img="images/parallax-3-1920x1100.jpg">
        <div class="parallax-content">
          <div class="shell shell-inset-owl">
            <h3>From the blog</h3>
            <div class="owl-carousel owl-classic owl-nav-default" data-items="1" data-sm-items="2" data-lg-items="3" data-stage-padding="0" data-loop="true" data-margin="30" data-dots="true" data-nav="true" data-autoplay="true">
               <?php 
                      foreach ($blog as $key => $value) {
                          extract($value);
                      
                     ?>
              <div class="owl-item">
                <div class="post post-classic">
                  <div class="post-header">
                   
                    <time datetime="2018-03-31"><?php echo $date_created; ?></time>
                    <h6><a href=""><?php $bd = previewBody($title, 10); echo $bd; ?></a></h6>
                  </div>
                  <div class="post-img"><a href=<?php echo "viewBlog?hid=$hash_id"; ?>><div  style="background:url(<?php echo $image_1 ?>); height:200px; width: 370px; background-size: cover; background-position: center; background-repeat: no-repeat;" class=""> </div></a></div>
                  <div class="post-content">
                    <p> <?php $bd = previewBody($body, 20); echo $bd; ?></p><a class="post-link" href="single-post.html">Read more<span class="icon-arrow material-icons-keyboard_backspace icon-rotate-90"></span></a>
                  </div>
                </div>
              </div>
              <?php } ?>
              
      </section>
      <section>
        <div class="section-partners bg-white">
          <!-- Owl Carousel-->
          <h3 align="center">Our Partners</h3>
          <div class="owl-carousel partners-carousel" data-items="2" data-xs-items="3" data-sm-items="4" data-md-items="5" data-lg-items="6" data-xlg-items="9" data-xl-items="11" data-stage-padding="15" data-loop="true" data-margin="30" data-mouse-drag="true" data-nav="true" data-dots="true" data-autoplay="true">
            <div class="owl-item"><a href="#"><img src="images/partners-1-146x69.jpg" alt="" width="146" height="69"/></a></div>
            <div class="owl-item"><a href="#"><img src="images/partners-2-131x70.jpg" alt="" width="131" height="70"/></a></div>
            <div class="owl-item"><a href="#"><img src="images/partners-3-163x68.jpg" alt="" width="163" height="68"/></a></div>
            <div class="owl-item"><a href="#"><img src="images/partners-4-145x80.jpg" alt="" width="145" height="80"/></a></div>
            <div class="owl-item"><a href="#"><img src="images/partners-5-123x78.jpg" alt="" width="123" height="78"/></a></div>
            <div class="owl-item"><a href="#"><img src="images/partners-6-124x90.jpg" alt="" width="124" height="90"/></a></div>
            <div class="owl-item"><a href="#"><img src="images/partners-7-134x77.jpg" alt="" width="134" height="77"/></a></div>
            <div class="owl-item"><a href="#"><img src="images/partners-8-101x77.jpg" alt="" width="101" height="77"/></a></div>
            <div class="owl-item"><a href="#"><img src="images/partners-9-129x54.jpg" alt="" width="129" height="54"/></a></div>
            <div class="owl-item"><a href="#"><img src="images/partners-10-157x76.jpg" alt="" width="157" height="76"/></a></div>
            <div class="owl-item"><a href="#"><img src="images/partners-11-137x72.jpg" alt="" width="137" height="72"/></a></div>
          </div>
        </div>
      </section>

      <!-- Page Footer-->
      <footer class="page-footer footer-default bg-gray-3">
        <div class="section-md">
          <div class="shell">
            <div class="range range-50 range-center">
              <div class="cell-md-3 cell-sm-6 cell-xs-12 wow fadeInUp" data-wow-delay=".1s">
                <h3>Residential services</h3>
                <ul class="list list-marked-none visible-xs-inline-block reveal-sm-block">
                  <li><a href="#">Landscape/Hardscape</a></li>
                  <li><a href="#">Landscape</a></li>
                  <li><a href="#">Hardscape</a></li>
                  <li><a href="#">Property Maintenance</a></li>
                  <li><a href="#">Power Washing</a></li>
                  <li><a href="#">Aquatic Management</a></li>
                </ul>
              </div>
              <div class="cell-md-3 cell-sm-6 cell-xs-12 wow fadeInUp" data-wow-delay=".2s">
                <h3>Commercial services</h3>
                <ul class="list list-marked-none visible-xs-inline-block reveal-sm-block">
                  <li><a href="#">Lawn & Bed Maintenance</a></li>
                  <li><a href="#">Lawn Maintenance</a></li>
                  <li><a href="#">Bed Maintenance</a></li>
                  <li><a href="#">Turf Maintenance</a></li>
                  <li><a href="#">Pruning</a></li>
                  <li><a href="#">Spring Clean-Up</a></li>
                </ul>
              </div>
              <div class="cell-md-3 cell-sm-6 cell-xs-12 wow fadeInUp" data-wow-delay=".3s">
                <h3>Contacts</h3>
                <address class="contact-info">
                  <ul class="list-address">
                    <li><a class="text-middle address" href="contacts.html">227 Marion Street,<br>Columbia, SC 29201</a></li>
                    <li class="list-tel">
                      <div class="p tel big"><a class="text-gray text-middle" href="tel:#">1 (800) 123 1234</a></div>
                      <div class="p tel big"><a class="text-gray text-middle" href="tel:#">1 (800) 123 1235</a></div>
                    </li>
                    <li>
                      <div class="p">Mon - Sat 8.00 - 18.00</div>
                      <div class="p">Sunday CLOSED</div>
                    </li>
                  </ul>
                </address>
              </div>
              <div class="cell-md-3 cell-sm-6 cell-xs-10 wow fadeInUp" data-wow-delay=".4s">
                <h3>Newsletter</h3>
                <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="forms" method="post" action="https://livedemo00.template-help.com/wt_prod-3849/bat/rd-mailform.php">
                  <div class="form-wrap">
                    <label class="form-label" for="inline-email-1">Enter your email here</label>
                    <input class="form-input" id="inline-email-1" type="email" name="email" data-constraints="@Email @Required">
                  </div>
                  <div class="form-button text-right">
                    <button class="button button-primary-sec button-no-outline" type="submit">Subscribe<span class="icon-arrow icon-rotate-180 material-icons-keyboard_backspace"></span></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-panel">
          <div class="shell">
            <p><span class="text-gray-dark">Beautiful lawn</span> &#169; <span id="copyright-year"></span>.<a class="text-gray" href="privacy-policy.html"> Privacy Policy</a>
            </p>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body><!-- Google Tag Manager --><noscript><iframe src="http://www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->

<!-- Mirrored from livedemo00.template-help.com/wt_prod-3849/home-classic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Jul 2018 19:31:29 GMT -->
</html>