<?php 
ob_start();
$page_title = "About";
include "includes/header.php";

 $about = getAboutUS($conn);
 extract($about);

 ?>

      <section class="section-md bg-white">
        <div class="shell">
          <h2>About Us</h2>
          <div class="range range-50 range-xs">
            <div class="cell-lg-7 cell-md-6">
              <p class="big text-width-580"><?php echo $body; ?></p>
              <article class="post-video post-video-var-1">
                <div style="background:url(<?php echo $image_1 ?>); height:300px; width: 500px; background-size: cover; background-position: center; background-repeat: no-repeat;" class=""> </div>
              </article>
            </div>
            <div class="cell-lg-5 cell-md-6">
              <div class="range range-30">
                <div class="cell-md-12 range-xs-center range-lg-left">
                  <div class="unit unit-spacing-icon unit-xs-horizontal text-xs-left">
                    <div class="unit__left"><span class="icon-gray-dark icon-xmd fl-great-icon-set-ice78"></span></div>
                    <div class="unit__body">
                      <div class="box-icon-content">
                        <div class="heading-3">What to expect</div>
                        <p>When you call on Beautiful lawn’s Mowing Service, you can expect to receive the very best in workmanship and expert knowledge.You can rely on us to always show up on time, as we know how frustrating it is waiting around all day for a tradesman.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cell-md-12">
                  <div class="unit unit-spacing-icon unit-xs-horizontal text-xs-left">
                    <div class="unit__left"><span class="icon-gray-dark icon-xmd fl-great-icon-set-user156"></span></div>
                    <div class="unit__body">
                      <div class="box-icon-content">
                        <div class="heading-3">Our team</div>
                        <p>The team at Beautiful lawn is made up of skilled Head Office staff, as well as our qualified servicemen, the best in the field.Each team member is fully trained and is dedicated to the Beautiful lawn’s mowing service’s ethical business system.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cell-md-12">
                  <div class="unit unit-spacing-icon unit-xs-horizontal text-xs-left">
                    <div class="unit__left"><span class="icon-gray-dark icon-xmd fl-great-icon-set-crosshair15"></span></div>
                    <div class="unit__body">
                      <div class="box-icon-content">
                        <div class="heading-3">Our aim</div>
                        <ul class="list list-marked list-family-base">
                          <li>Provide a high standard of presentation and quality of service</li>
                          <li>Be Reliable and responsive to customer needs</li>
                          <li>Provide affordable and competitive service rates</li>
                          <li>Exceed customer expectations in workmanship and conduct</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

               
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-md parallax-container" data-parallax-img="images/parallax-4-1920x1100.jpg">
        <div class="parallax-content">
          <div class="shell">
    <!--         <h2>Careers</h2>
            <div class="range range-50">
              <div class="cell-lg-7 cell-md-6">
                <p class="big text-width-large">You will be applying fertilizer and weed control to lawns weekly on a 1 man crew making great money. Each truck/crew is treated like your own mini business. It’s hard work, but very rewarding. We pay you based on the number of lawns you mow so it’s very fair and the harder you work the more you make.</p>
                <p class="text-bold text-width-large">We reward our awesome staff with bonuses, lunch cards, free breakfasts, and even BBQs on Fridays! We work hard and play hard! So thanks for your time and we wish you the best, whether it’s with us or another company.</p><a class="button button-primary hidden reveal-md-inline-block" href="team.html">Join our team<span class="icon-arrow icon-rotate-90 material-icons-keyboard_backspace"></span></a>
              </div> -->
             <!--  <div class="cell-lg-5 cell-md-6 text-left">
                <p class="big text-bold text-xlg-nowrap">To be considered for the lawn technician position, you must:</p>
                <ul class="list list-index list-bold">
                  <li><span class="list-index-counter"></span>Have some experience in lawn care, or working outdoors.</li>
                  <li><span class="list-index-counter"></span>Understand the importance of keeping our customers happy.</li>
                  <li><span class="list-index-counter"></span>Have a valid driver’s license and be able to legally work</li>
                  <li><span class="list-index-counter"></span>Be prepared to work long days – Monday through Friday</li>
                  <li><span class="list-index-counter"></span>Be someone who wants and needs money.</li>
                  <li><span class="list-index-counter"></span>Have a working cell phone to bring with you every day.</li>
                </ul>
              </div>
            </div><a class="button button-primary veil-md" href="team.html">Join our team<span class="icon-arrow icon-rotate-90 material-icons-keyboard_backspace"></span></a>
          </div> -->
        </div>
      </section>
      <!-- Page Footer-->
<?php  include "includes/footer.php"; ?>