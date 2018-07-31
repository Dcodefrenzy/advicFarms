<?php 
ob_start();
$page_title = "Services";
include "includes/header.php";
$services =  getServices($conn);

 ?>

      <section class="section-md bg-white text-left">
        <div class="shell">
          <!-- Bootstrap tabs-->
          <div class="tabs-custom tabs-services tabs-vertical">
            <!-- Nav tabs-->
            <ul class="nav-custom nav-custom-tabs group-tabs">
              <li class="active"><a href="#tabs-3-1" data-toggle="tab">Lawn & Bed Maintenance<span class="icon-arrow icon-rotate-90 material-icons-keyboard_backspace"></span></a></li>
              <?php foreach ($services as $key => $value) {
                    extract($value);
               ?>
              <li><a <?php echo "href=#tabs-3-" .$id; ?> data-toggle="tab"><?php echo $title; ?><span class="icon-arrow icon-rotate-90 material-icons-keyboard_backspace"></span></a></li>
              <?php } ?>
            </ul>
            <?php foreach ($services as $key => $show) {
                  extract($show);
             ?>
                     
            <div class="tab-content text-left">
              <div class="tab-pane fade in active counter-index-sec" <?php echo "id=tabs-3-" .$id; ?>>
                <div class="inset-right-lg-150">
                  <h2><?php echo $title; ?></h2>
                  <p><?php echo $body; ?></p>
                 
                </div>
                <div class="range range-30">
                  <!--
                  Created by ragnar on 9/4/2018.
                  
                  -->
                  <div class="cell-lg-4 cell-md-5 text-center text-sm-left"><a class="button button-primary" <?php echo "href=bookings?hid=".$hash_id.">Book this service<span class='icon-arrow icon-rotate-90 material-icons-keyboard_backspace'></span></a>" ?></div>
                   <?php } ?>
                  <div class="cell-lg-4 cell-md-5 text-center text-sm-left">
                    <div class="unit unit-middle unit-spacing-icon-3 unit-horizontal">
                      <div class="unit__left"><span class="icon-gray-dark icon-54 fl-great-icon-set-mobile226"></span></div>
                      <div class="unit__body">
                        <h6>Have any questions?</h6>
                        <h3><a class="tel" href="tel:#">1 <span>(800)</span> 123 1234</a></h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tabs-3-2">
                <h2 class="text-width-800">Landscape / Hardscape Services for Commercial Locations</h2>
                <h3>Year-Round Beauty for Schools, Hospitals, Banks, & More!</h3>
                <p class="big">Any experienced business owner can explain the value of curb appeal. How your commercial space looks can make or break a business. While we have all seen poor landscaping before, few of us realize the power of a beautiful, vibrant, and rich landscape design until we enjoy one personally. That is the service that we offer to commercial clients throughout the country—a lush, attractive landscape that can be a source of pride for any business manager.</p>
                <h3>Hardscape for Commercial Properties</h3>
                <p class="big">Hardscaping, put simply, is the use of stones or inorganic materials in a landscape design. For example, a granite-step walkway would be an example of a hardscape element. Hardscaping is unique from landscaping in that it is not growing or seasonal, but it is still a vital part of a healthy landscape. Hardscaping adds a powerful new dimension to any landscape design. Our knowledgeable stonemasons work with our landscape design specialists to provide diverse forms of lawn care splendor.</p>
                <div class="range range-30">
                  <div class="cell-md-6">
                    <p>More examples of effective hardscaping include:</p>
                    <ul class="list list-marked list-gray-dark list-big list-bold">
                      <li>Stone pathways</li>
                      <li>Walls</li>
                      <li>Patios</li>
                      <li>Staircases</li>
                      <li>Stone slabs</li>
                      <li>Stepping stones</li>
                      <li>Permeable pavers</li>
                      <li>Reinforced turf</li>
                    </ul>
                  </div>
                  <div class="cell-md-6">
                    <p>In contrast, softscape is made of all the organic parts of a landscape, which includes:</p>
                    <ul class="list list-marked list-gray-dark list-big list-bold">
                      <li>Garden beds</li>
                      <li>Shrubs</li>
                      <li>Flowers</li>
                      <li>Trees</li>
                      <li>Grass</li>
                      <li>Soil/turf</li>
                    </ul>
                  </div>
                  <!--
                  Created by ragnar on 9/4/2018.
                  
                  -->
                  <div class="cell-lg-4 cell-md-5 text-center text-sm-left"><a class="button button-primary" href="#">Book this service<span class="icon-arrow icon-rotate-90 material-icons-keyboard_backspace"></span></a></div>
                  <div class="cell-lg-4 cell-md-5 text-center text-sm-left">
                    <div class="unit unit-middle unit-spacing-icon-3 unit-horizontal">
                      <div class="unit__left"><span class="icon-gray-dark icon-54 fl-great-icon-set-mobile226"></span></div>
                      <div class="unit__body">
                        <h6>Have any questions?</h6>
                        <h3><a class="tel" href="tel:#">1 <span>(800)</span> 123 1234</a></h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade counter-index-sec" id="tabs-3-3">
                <h2>Commercial Pest, Weed & Fertilization</h2>
                <p class="big">Maintaining beauty on a commercial property year-round requires a level of detail and expertise that requires a professional’s insight. When it comes to expertise businesses can depend on, The Beautiful Lawn is the most trusted name in commercial lawn care and landscaping services. We provide for commercial properties throughout Canada, including schools, hospitals, and shopping centres.</p>
                <div class="range range-30">
                  <div class="cell-md-6">
                    <h3 class="counter-index-item"><span class="counter-wrap"></span>Organic Lawn Care</h3>
                    <ul class="list list-marked list-bold">
                      <li>Creates efficient soil drainage</li>
                      <li>Minimizes erosion of the turf</li>
                      <li>Requires less frequent upkeep</li>
                      <li>Promotes growth of soil microorganisms</li>
                      <li>Safer for people and animals</li>
                      <li>Promotes soil resilience</li>
                    </ul>
                  </div>
                  <div class="cell-md-6">
                    <h3 class="counter-index-item"><span class="counter-wrap"></span>Hybrid Lawn Care</h3>
                    <ul class="list list-marked list-bold">
                      <li>Safe for people and animals</li>
                      <li>Helps the soil stay healthier for longer</li>
                      <li>Builds drought-resistant plant life</li>
                      <li>Requires less frequent mowing and trimming</li>
                      <li>Traditional fertilizer will help prevent weeds</li>
                    </ul>
                  </div>
                  <div class="cell-md-6">
                    <h3 class="counter-index-item"><span class="counter-wrap"></span>Traditional Lawn Care</h3>
                    <ul class="list list-marked list-bold">
                      <li>Often costs less than natural fertilizer</li>
                      <li>Can deliver quicker results</li>
                      <li>Is better for moderate use/growth</li>
                      <li>Not as safe for people and animals</li>
                    </ul>
                  </div>
                </div>
                <h6 class="text-bold">Our Different Landscaping Schedule Packages</h6>
                <div class="range range-30 range-xxs">
                  <div class="cell-md-6">
                    <p>The central part of our’ values is our commitment to our clients. You come first—always. Each of our packages creates beautiful, lush landscapes that bring out the best in your business’ appearance. We prevent the growth of weeds and the annoyance of pests as well while using safe measures that result in a healthier property.</p>
                  </div>
                  <div class="cell-md-6">
                    <p>Our team of landscape specialists recognizes that different properties have different needs, so we have custom maintenance packages for various clients. Our team of landscape specialists recognizes that different properties have different needs, so we have custom maintenance packages for various clients.</p>
                  </div>
                </div>
                <div class="range range-30">
                  <!--
                  Created by ragnar on 9/4/2018.
                  
                  -->
                  <div class="cell-lg-4 cell-md-5 text-center text-sm-left"><a class="button button-primary" href="#">Book this service<span class="icon-arrow icon-rotate-90 material-icons-keyboard_backspace"></span></a></div>
                  <div class="cell-lg-4 cell-md-5 text-center text-sm-left">
                    <div class="unit unit-middle unit-spacing-icon-3 unit-horizontal">
                      <div class="unit__left"><span class="icon-gray-dark icon-54 fl-great-icon-set-mobile226"></span></div>
                      <div class="unit__body">
                        <h6>Have any questions?</h6>
                        <h3><a class="tel" href="tel:#">1 <span>(800)</span> 123 1234</a></h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tabs-3-4">
                <h2>Outdoor Lighting Services for Commercial Properties</h2>
                <div class="range range-30 range-xs">
                  <div class="cell-md-6">
                    <p class="big">Outdoor lighting can impact the appearance of a property in profound ways. The right lighting can make your landscape look cohesive, clean, and attractive. Good lighting can mean the difference between an inviting location and a shoddy, dangerous-looking one.</p>
                  </div>
                  <div class="cell-md-6">
                    <p class="big">We provide comprehensive outdoor lighting services to businesses and companies, including banks, hotels, schools, and hospitals. Our lighting solutions are elegant and efficient, offering beautiful designs that suit your specific needs.</p>
                  </div>
                </div>
                <h6 class="text-bold text-gray">Comprehensive Lighting Services for All Outdoor Needs.</h6>
                <h6 class="text-bold text-gray">Our lighting service programs include:</h6>
                <div class="range range-30">
                  <div class="cell-md-6">
                    <ul class="list list-marked list-gray-dark list-bold">
                      <li>Replacing all bulbs</li>
                      <li>Installing holiday lighting</li>
                      <li>Handling all light timer concerns</li>
                      <li>Managing all electrical connections</li>
                    </ul>
                  </div>
                  <div class="cell-md-6">
                    <ul class="list list-marked list-gray-dark list-bold">
                      <li>Installing/maintaining fixtures</li>
                      <li>Adjusting lighting in landscape design</li>
                      <li>Ensuring plants and lights are safely separated</li>
                      <li>Repairing/burying below-ground wiring</li>
                    </ul>
                  </div>
                  <!--
                  Created by ragnar on 9/4/2018.
                  
                  -->
                  <div class="cell-lg-4 cell-md-5 text-center text-sm-left"><a class="button button-primary" href="#">Book this service<span class="icon-arrow icon-rotate-90 material-icons-keyboard_backspace"></span></a></div>
                  <div class="cell-lg-4 cell-md-5 text-center text-sm-left">
                    <div class="unit unit-middle unit-spacing-icon-3 unit-horizontal">
                      <div class="unit__left"><span class="icon-gray-dark icon-54 fl-great-icon-set-mobile226"></span></div>
                      <div class="unit__body">
                        <h6>Have any questions?</h6>
                        <h3><a class="tel" href="tel:#">1 <span>(800)</span> 123 1234</a></h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade counter-index-sec" id="tabs-3-5">
                <h2>Commercial Snow & Ice Removal Services</h2>
                <h3>Maintaining Your Property’s Safety & Beauty in Winter</h3>
                <p class="big">The winter often brings with it a whole slew of concerns. However, The Beautiful Lawn is not just devoted to your lawn care—we are devoted to maintaining your peace of mind throughout the year. That’s why we offer snow and ice management for your commercial location during rough weather.</p>
                <div class="range range-30">
                  <div class="cell-md-6">
                    <h6 class="text-bold counter-index-item"><span class="counter-wrap"></span>Property Assessment</h6>
                    <p>Before winter has hit you hardest, our team will already be hard at work evaluating the grounds for effective cold weather preparation. We take into account any physical elements such as curbs, fire hydrants, hardscape, and more. When we return to clear away ice and snow, our team will be able to provide professional, precise, and efficient cleaning service.</p>
                  </div>
                  <div class="cell-md-6">
                    <h6 class="text-bold counter-index-item"><span class="counter-wrap"></span>Tailored Calibration</h6>
                    <p>When our team works on your property, we measure and record all the particular needs of your land. We measure dew points, monitor asphalt temperatures, and prepare in every way for all the obstacles that winter brings. When The Beautiful Lawn prepares your property for snow and ice, you can have total peace of mind about the state of your commercial location.</p>
                  </div>
                  <div class="cell-md-6">
                    <h6 class="text-bold counter-index-item"><span class="counter-wrap"></span>State-of-the-Art Equipment</h6>
                    <p>Our team’s equipment is cutting-edge and extremely precise. We utilize the highest-level technology to ensure that we are serving your company in the most effective way possible. Our GPS tracking equipment for each of our vehicles also ensures we arrive at your property when you need us most.</p>
                  </div>
                  <div class="cell-md-6">
                    <h6 class="text-bold counter-index-item"><span class="counter-wrap"></span>Meteorological Tracking</h6>
                    <p>To ensure we are serving you effectively and quickly, we monitor the weather. This allows us to remain aware of when you will most require service, and how we will need to prepare your property.</p>
                  </div>
                  <!--
                  Created by ragnar on 9/4/2018.
                  
                  -->
                  <div class="cell-lg-4 cell-md-5 text-center text-sm-left"><a class="button button-primary" href="#">Book this service<span class="icon-arrow icon-rotate-90 material-icons-keyboard_backspace"></span></a></div>
                  <div class="cell-lg-4 cell-md-5 text-center text-sm-left">
                    <div class="unit unit-middle unit-spacing-icon-3 unit-horizontal">
                      <div class="unit__left"><span class="icon-gray-dark icon-54 fl-great-icon-set-mobile226"></span></div>
                      <div class="unit__body">
                        <h6>Have any questions?</h6>
                        <h3><a class="tel" href="tel:#">1 <span>(800)</span> 123 1234</a></h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tabs-3-6">
                <h2>Commercial Irrigation Services</h2>
                <h3>Ensure the Beauty and Vitality of Your Business's Landscape</h3>
                <p class="big">The most basic way of ensuring your lawn looks strong, healthy, and lush year-round is having an effective irrigation system. Advanced irrigation keeps your soil well-nurtured while using precious resources responsibly. We offer powerful irrigation solutions for corporate locations to enable beautiful landscape designs from world-class grounds care specialists.</p>
                <h6 class="text-bold">We Build Irrigation Systems for Various Companies.</h6>
                <h6 class="text-bold">Our irrigation systems include advanced benefits, such as:</h6>
                <ul class="list list-marked list-big list-bold">
                  <li>Sustainable design for long-term usage</li>
                  <li>Effective water conservation</li>
                  <li>Prevents excessive water runoff</li>
                  <li>Drains water properly</li>
                  <li>Optimized for lawn growth</li>
                  <li>Custom design for every location</li>
                  <li>Efficient dispensation of water</li>
                </ul>
                <h3>Schedule an Appointment with Us Today!</h3>
                <div class="range range-30 range-xxs">
                  <div class="cell-md-6">
                    <p>Our mission is to exceed your expectations with our service—in fact, our code of values is based entirely on putting our clients first. From our first phone call with you to the cleanup process of every project, we aim to blow you away with the quality of our service.</p>
                  </div>
                  <div class="cell-md-6">
                    <p>That’s why we are the most trusted name in commercial landscaping and irrigation! With 250 locations in North America, our team is never too far to bring health and vibrancy to your property.</p>
                  </div>
                  <!--
                  Created by ragnar on 9/4/2018.
                  
                  -->
                  <div class="cell-lg-4 cell-md-5 text-center text-sm-left"><a class="button button-primary" href="#">Book this service<span class="icon-arrow icon-rotate-90 material-icons-keyboard_backspace"></span></a></div>
                  <div class="cell-lg-4 cell-md-5 text-center text-sm-left">
                    <div class="unit unit-middle unit-spacing-icon-3 unit-horizontal">
                      <div class="unit__left"><span class="icon-gray-dark icon-54 fl-great-icon-set-mobile226"></span></div>
                      <div class="unit__body">
                        <h6>Have any questions?</h6>
                        <h3><a class="tel" href="tel:#">1 <span>(800)</span> 123 1234</a></h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
     <?php include "includes/footer.php"; ?>